<?php

/**
 * Class for handling archive setup and build process
 *
 * Standard: PSR-2 (almost)
 *
 * @link http://www.php-fig.org/psr/psr-2
 *
 * @package    DUP_PRO
 * @subpackage classes/package
 * @copyright  (c) 2017, Snapcreek LLC
 * @license    https://opensource.org/licenses/GPL-3.0 GNU Public License
 * @since      1.0.0
 *
 * @notes: Trace process time
 *  $timer01 = DUP_PRO_U::getMicrotime();
 *  DUP_PRO_Log::trace("SCAN TIME-B = " . DUP_PRO_U::elapsedTime(DUP_PRO_U::getMicrotime(), $timer01));
 */

defined('ABSPATH') || defined('DUPXABSPATH') || exit;

use Duplicator\Installer\Package\ArchiveDescriptor;
use Duplicator\Libs\Snap\SnapIO;
use Duplicator\Libs\Snap\SnapURL;
use Duplicator\Libs\Snap\SnapUtil;
use Duplicator\Libs\Snap\SnapWP;
use Duplicator\Libs\Snap\SnapOS;
use Duplicator\Models\Storages\AbstractStorageEntity;
use Duplicator\Models\Storages\Local\LocalStorage;
use Duplicator\Package\Create\BuildProgress;
use Duplicator\Package\Create\DupArchive\PackageDupArchive;
use Duplicator\Package\Create\BuildComponents;

require_once(DUPLICATOR____PATH . '/classes/package/class.pack.archive.filters.php');
require_once(DUPLICATOR____PATH . '/classes/package/class.pack.archive.zip.php');
require_once(DUPLICATOR____PATH . '/classes/package/class.pack.archive.shellzip.php');
require_once(DUPLICATOR____PATH . '/classes/class.exceptions.php');

class DUP_PRO_Archive
{
    const DIRS_LIST_FILE_NAME_SUFFIX  = '_dirs.txt';
    const FILES_LIST_FILE_NAME_SUFFIX = '_files.txt';

    /** @var bool */
    public $ExportOnlyDB = false;
    /** @var string */
    public $FilterDirs = '';
    /** @var string */
    public $FilterExts = '';
    /** @var string */
    public $FilterFiles = '';
    /** @var string[] */
    public $FilterDirsAll = array();
    /** @var string[] */
    public $FilterExtsAll = array();
    /** @var string[] */
    public $FilterFilesAll = array();
    /** @var bool */
    public $FilterOn = false;
    /** @var bool */
    public $FilterNames = false;
    /** @var null|string archive file name */
    public $File = null;
    /** @var null|string archive format */
    public $Format = null;
    /** @var string */
    public $PackDir = '';
    /** @var int<0, max> */
    public $Size = 0;
    /** @var string[] */
    public $Dirs = array();
    /** @var int<0, max> */
    public $DirCount = 0;
    /** @var string[] */
    public $RecursiveLinks = array();
    /** @var string[] */
    public $Files = array();
    /** @var int<0, max> */
    public $FileCount = 0;
    /** @var int<-2, max> */
    public $file_count = -1;
    /** @var DUP_PRO_Archive_Filter_Info */
    public $FilterInfo = null;
    /** @var string */
    public $ListDelimiter = "\n";
    /** @var DUP_PRO_Package */
    public $Package = null;
    /** @var string[] */
    private $tmpFilterDirsAll = array();
    /** @var string[] relatrive path filters */
    private $relativeFiltersDir = array();
    /** @var DUP_PRO_Archive_File_List */
    private $listFileObj = null;
    /** @var DUP_PRO_Archive_File_List */
    private $listDirObj = null;

    /**
     * Class constructor
     *
     * @param DUP_PRO_Package $package The package to build
     */
    public function __construct(DUP_PRO_Package $package)
    {
        $this->Package    = $package;
        $this->FilterOn   = false;
        $this->FilterInfo = new DUP_PRO_Archive_Filter_Info();
        $this->PackDir    = $this->getTargetRootPath();
        if (DUP_PRO_Global_Entity::getInstance()->archive_build_mode == DUP_PRO_Archive_Build_Mode::DupArchive) {
            $this->Format = 'DAF';
        } else {
            $this->Format = 'ZIP';
        }

        $this->listDirObj  = new DUP_PRO_Archive_File_List(DUPLICATOR_PRO_SSDIR_PATH_TMP . '/' . $this->Package->get_dirs_list_filename());
        $this->listFileObj = new DUP_PRO_Archive_File_List(DUPLICATOR_PRO_SSDIR_PATH_TMP . '/' . $this->Package->get_files_list_filename());

        $this->relativeFiltersDir = array(
            DUPLICATOR_PRO_SSDIR_NAME,
            'backups-dup-lite',
        );
    }

    /**
     * Clone object
     *
     * @return void
     */
    public function __clone()
    {
        $this->FilterInfo = clone $this->FilterInfo;
    }

    /**
     * Filter props on json encode
     *
     * @return string[]
     */
    public function __sleep()
    {
        $props = array_keys(get_object_vars($this));
        return array_diff($props, array('Package', 'tmpFilterDirsAll', 'relativeFiltersDir', 'listFileObj', 'listDirObj'));
    }

    public function __wakeup()
    {
        $this->listDirObj  = new DUP_PRO_Archive_File_List(DUPLICATOR_PRO_SSDIR_PATH_TMP . '/' . $this->Package->get_dirs_list_filename());
        $this->listFileObj = new DUP_PRO_Archive_File_List(DUPLICATOR_PRO_SSDIR_PATH_TMP . '/' . $this->Package->get_files_list_filename());
    }

    /**
     * Return true if archive must is encrypted
     *
     * @return bool
     */
    public function isArchiveEncrypt()
    {
        return (
            $this->Package->Installer->OptsSecureOn == ArchiveDescriptor::SECURE_MODE_ARC_ENCRYPT &&
            strlen($this->Package->Installer->passowrd) > 0
        );
    }

    /**
     * Get archive password, empty no password
     *
     * Important: This function returns the valued password only in case the security mode is encrypted archive.
     * In case the security is only password only at the installer level this function will return the empty password.
     *
     * @return string
     */
    public function getArchivePassword()
    {
        if ($this->Package->Installer->OptsSecureOn == ArchiveDescriptor::SECURE_MODE_ARC_ENCRYPT) {
            return $this->Package->Installer->passowrd;
        } else {
            return '';
        }
    }

    /**
     * Builds the archive file
     *
     * @param DUP_PRO_Package $package        The package to build
     * @param BuildProgress   $build_progress The build progress object
     *
     * @return void
     */
    public function buildFile(DUP_PRO_Package $package, BuildProgress $build_progress)
    {
        DUP_PRO_Log::trace("Building archive");
        try {
            $this->Package = $package;
            if (strlen($this->PackDir) > 0 && !is_dir($this->PackDir)) {
                throw new Exception("The 'PackDir' property must be a valid directory.");
            }

            if (!isset($this->File)) {
                throw new Exception("A 'File' property must be set.");
            }

            $completed = false;
            switch ($this->Format) {
                case 'TAR':
                    break;
                case 'DAF':
                    $completed = PackageDupArchive::create($this->Package, $build_progress);
                    $this->Package->Update();
                    break;
                default:
                    $this->Format = 'ZIP';
                    if ($build_progress->current_build_mode == DUP_PRO_Archive_Build_Mode::Shell_Exec) {
                        DUP_PRO_Log::trace('Doing shell exec zip');
                        $completed = DUP_PRO_ShellZip::create($this->Package, $build_progress);
                    } else {
                        $zipArchive = new DUP_PRO_ZipArchive($this->Package);
                        $completed  = $zipArchive->create($build_progress);
                    }
                    $this->Package->Update();
                    break;
            }

            if ($completed) {
                if ($build_progress->failed) {
                    throw new Exception("Error building archive");
                } else {
                    $filepath   = SnapIO::safePath("{$this->Package->StorePath}/{$this->File}");
                    $this->Size = @filesize($filepath);
                    $this->Package->set_status(DUP_PRO_PackageStatus::ARCDONE);
                    DUP_PRO_Log::trace("filesize of archive = {$this->Size}");
                    DUP_PRO_Log::trace("Done building archive");
                }
            } else {
                DUP_PRO_Log::trace("Archive chunk completed");
            }
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    /**
     * return all paths to scan
     *
     * @return string[]
     */
    public static function getScanPaths()
    {
        static $scanPaths = null;
        if (is_null($scanPaths)) {
            $paths = self::getArchiveListPaths();
            // The folder that contains wp-config must not be scanned in full but only added
            unset($paths['wpconfig']);
            $scanPaths = array($paths['home']);
            unset($paths['home']);
            foreach ($paths as $path) {
                $addPath = true;
                foreach ($scanPaths as $resPath) {
                    if (SnapIO::getRelativePath($path, $resPath) !== false) {
                        $addPath = false;
                        break;
                    }
                }
                if ($addPath) {
                    $scanPaths[] = $path;
                }
            }
            $scanPaths = array_values(array_unique($scanPaths));
        }
        return $scanPaths;
    }

    /**
     * Create filters info and generate meta data about the dirs and files needed for the build
     *
     * @link http://msdn.microsoft.com/en-us/library/aa365247%28VS.85%29.aspx Windows filename restrictions
     *
     * @return self  Returns a copy of this object containing scanner results
     */
    public function buildScanStats()
    {
        DUP_PRO_Log::trace(' START');
        $this->initScanStats();
        $this->createFilterInfo();
        $rootPath = $this->getTargetRootPath();
        if (strlen($rootPath) == 0) {
            $rootPath = '/';
        }

        //If the root directory is a filter then skip it all
        if (in_array($rootPath, $this->FilterDirsAll) || $this->Package->isDBOnly()) {
            DUP_PRO_Log::trace('SKIP ALL FILES');
            $this->initFileListHandles();
            $this->closeFileListHandles();
            $this->Dirs = array();
        } else {
            $this->initFileListHandles();
            $mainSize    = 0;
            $mainNodes   = 0;
            $pathsToScan = self::getScanPaths();
            foreach ($pathsToScan as $path) {
                DUP_PRO_Log::trace('START SCAN PATH: ' . $path);
                $relativePath = SnapIO::getRelativePath($path, $rootPath);
                if (($result = $this->getFileLists($path, $relativePath)) != false) {
                    $this->addToDirList($path, $relativePath, $result['size'], $result['nodes'] + 1);
                    $mainSize  += $result['size'];
                    $mainNodes += $result['nodes'] + 1;
                } else {
                    DUP_PRO_Log::trace('Can\'t scan the folder ' . $rootPath);
                }
            }

            if (!in_array($rootPath, $pathsToScan)) {
                $this->addToDirList($rootPath, '', $mainSize, $mainNodes + 1);
            }

            $this->closeFileListHandles();
        }

        DUP_PRO_Log::trace('set filters all');
        $this->FilterDirsAll  = array_merge($this->FilterDirsAll, $this->RecursiveLinks, $this->FilterInfo->Dirs->Unreadable);
        $this->FilterFilesAll = array_merge($this->FilterFilesAll, $this->FilterInfo->Files->Unreadable);
        sort($this->FilterDirsAll);
        sort($this->FilterFilesAll);
        $this->setTreeFilters();
        return $this;
    }

    /**
     * Init Scan stats
     *
     * @return void
     */
    private function initScanStats()
    {
        $this->RecursiveLinks = array();
        $this->FilterInfo->reset(true);
        // For file
        $this->Size      = 0;
        $this->FileCount = 0;
        $this->DirCount  = 0;
    }

    /**
     * Get the file path to the archive file within default storage directory
     *
     * @return string Returns the full file path to the archive file
     */
    public function getSafeFilePath()
    {
        return SnapIO::safePath(DUPLICATOR_PRO_SSDIR_PATH . "/{$this->File}");
    }

    /**
     * Get the store URL to the archive file
     *
     * @return string Returns the full URL path to the archive file
     */
    public function getURL()
    {
        return DUPLICATOR_PRO_SSDIR_URL . "/{$this->File}";
    }

    /**
     * Parse path filter
     *
     * @param string $input         The input string
     * @param bool   $getFilterList If true, return the filter list
     *
     * @return string|string[]    The filter list or the input string
     */
    public static function parsePathFilter($input = '', $getFilterList = false)
    {
        // replace all new line with ;
        $input = str_replace(array("\r\n", "\n", "\r"), ';', $input);
// remove all empty content
        $input = trim(preg_replace('/;([\s\t]*;)+/', ';', $input), "; \t\n\r\0\x0B");
// get content array
        $line_array = preg_split('/[\s\t]*;[\s\t]*/', $input);
        $result     = array();
        foreach ($line_array as $val) {
            if (strlen($val) == 0 || preg_match('/^[\s\t]*?#/', $val)) {
                if (!$getFilterList) {
                    $result[] = trim($val);
                }
            } else {
                $safePath = str_replace(array("\t", "\r"), '', $val);
                $safePath = SnapIO::untrailingslashit(SnapIO::safePath(trim($safePath)));
                if (strlen($safePath) >= 2) {
                    $result[] = $safePath;
                }
            }
        }

        if ($getFilterList) {
            $result = array_unique($result);
            sort($result);
            return $result;
        } else {
            return implode(";", $result);
        }
    }

    /**
     * Parse the list of ";" separated paths to make paths/format safe
     *
     * @param string $paths       A list of paths to parse
     * @param bool   $getPathList If true, return the path list
     *
     * @return string|string[]   Returns a cleanup up ";" separated string of dir paths
     */
    public static function parseDirectoryFilter($paths = '', $getPathList = false)
    {
        $dirList = array();

        foreach (self::parsePathFilter($paths, true) as $path) {
            if (is_dir($path)) {
                $dirList[] = $path;
            }
        }

        if ($getPathList) {
            return $dirList;
        } else {
            return implode(";", $dirList);
        }
    }

    /**
     * Parse the list of ";" separated extension names to make paths/format safe
     *
     * @param string $extensions A list of file extension names to parse
     *
     * @return string   Returns a cleanup up ";" separated string of extension names
     */
    public static function parseExtensionFilter($extensions = "")
    {
        $filter_exts = "";
        if (!empty($extensions) && $extensions != ";") {
            $filter_exts = str_replace(array(' ', '.'), '', $extensions);
            $filter_exts = str_replace(",", ";", $filter_exts);
            $filter_exts = DUP_PRO_STR::appendOnce($extensions, ";");
        }
        return $filter_exts;
    }

    /**
     * Parse the list of ";" separated paths to make paths/format safe
     *
     * @param string $paths       A list of paths to parse
     * @param bool   $getPathList If true, return the path list
     *
     * @return string|string[]   Returns a cleanup up ";" separated string of file paths
     */
    public static function parseFileFilter($paths = '', $getPathList = false)
    {
        $fileList = array();

        foreach (self::parsePathFilter($paths, true) as $path) {
            if (!is_dir($path)) {
                $fileList[] = $path;
            }
        }

        if ($getPathList) {
            return $fileList;
        } else {
            return implode(";", $fileList);
        }
    }

    /**
     * return true if path is child of duplicator backup path
     *
     * @param string $path The path to check
     *
     * @return boolean
     */
    public static function isBackupPathChild($path)
    {
        return (preg_match('/[\/]' . preg_quote(DUPLICATOR_PRO_SSDIR_NAME, '/') . '[\/][^\/]+$/', $path) === 1);
    }

    /**
     * Creates all of the filter information meta stores
     *
     * @todo: Create New Section Settings > Packages > Filters
     * Two new check boxes one for directories and one for files
     * Readonly list boxes for directories and files
     *
     * @return void
     */
    private function createFilterInfo()
    {
        DUP_PRO_Log::traceObject('Filter files', $this->FilterFiles);
        $this->FilterInfo->Dirs->Core = array();
        //FILTER: INSTANCE ITEMS
        if ($this->FilterOn) {
            $this->FilterInfo->Dirs->Instance = self::parsePathFilter($this->FilterDirs, true);
            $this->FilterInfo->Exts->Instance = explode(";", $this->FilterExts);
        // Remove blank entries
            $this->FilterInfo->Exts->Instance  = array_filter(array_map('trim', $this->FilterInfo->Exts->Instance));
            $this->FilterInfo->Files->Instance = self::parsePathFilter($this->FilterFiles, true);
        }

        //FILTER: GLOBAL ITMES
        if ($GLOBALS['DUPLICATOR_PRO_GLOBAL_DIR_FILTERS_ON']) {
            $this->FilterInfo->Dirs->Global = self::getDefaultGlobalDirFilter();
        }
        DUP_PRO_Log::traceObject('FILTER INFO GLOBAL DIR ', $this->FilterInfo->Dirs->Global);

        if ($GLOBALS['DUPLICATOR_PRO_GLOBAL_FILE_FILTERS_ON']) {
            $this->FilterInfo->Files->Global = $this->getDefaultGlobalFileFilter();
        } else {
            $this->FilterInfo->Files->Global = array();
        }

        //Configuration files
        $this->FilterInfo->Files->Global[] = $this->getArchiveListPaths('home') . '/.htaccess';
        $this->FilterInfo->Files->Global[] = $this->getArchiveListPaths('home') . '/.user.ini';
        $this->FilterInfo->Files->Global[] = $this->getArchiveListPaths('home') . '/php.ini';
        $this->FilterInfo->Files->Global[] = $this->getArchiveListPaths('home') . '/web.config';
        $this->FilterInfo->Files->Global[] = $this->getArchiveListPaths('wpcontent') . '/debug.log';
        $this->FilterInfo->Files->Global[] = SnapWP::getWPConfigPath();
        DUP_PRO_Log::traceObject('FILTER INFO GLOBAL FILES ', $this->FilterInfo->Files->Global);
        //FILTER: CORE ITMES
        //Filters Duplicator free packages & All pro local directories
        $storages = AbstractStorageEntity::getAll();

        foreach ($storages as $storage) {
            if ($storage->getSType() !== LocalStorage::getSType()) {
                continue;
            }
            /** @var LocalStorage $storage */
            if (!$storage->isFilterProtection()) {
                continue;
            }
            $path     = SnapIO::safePathUntrailingslashit($storage->getLocationString());
            $realPath = SnapIO::safePathUntrailingslashit($storage->getLocationString(), true);

            $this->FilterInfo->Dirs->Core[] = $path;
            if ($path != $realPath) {
                $this->FilterInfo->Dirs->Core[] = $realPath;
            }
        }

        $compMng = new BuildComponents($this->Package->components);

        $this->FilterDirsAll  = array_merge(
            $this->FilterInfo->Dirs->Instance,
            $this->FilterInfo->Dirs->Global,
            $this->FilterInfo->Dirs->Core,
            $this->Package->Multisite->getDirsToFilter(),
            $compMng->getFiltersDirs()
        );
        $this->FilterExtsAll  = array_merge($this->FilterInfo->Exts->Instance, $this->FilterInfo->Exts->Global, $this->FilterInfo->Exts->Core);
        $this->FilterFilesAll = array_merge(
            $this->FilterInfo->Files->Instance,
            $this->FilterInfo->Files->Global,
            $this->FilterInfo->Files->Core,
            $compMng->getFiltersFiles()
        );

        $this->tmpFilterDirsAll = array_map('trailingslashit', $this->FilterDirsAll);

        //PHP 5 on windows decode patch
        if (!SnapUtil::isPHP7Plus() && SnapOS::isWindows()) {
            foreach ($this->tmpFilterDirsAll as $key => $value) {
                if (preg_match('/[^\x20-\x7f]/', $value)) {
                    $this->tmpFilterDirsAll[$key] = utf8_decode($value);
                }
            }
        }
        DUP_PRO_Log::trace('Filter files Ok');
    }

    /**
     * Return global default filter
     *
     * @return string[]
     */
    public static function getDefaultGlobalDirFilter()
    {
        static $dirFiltersLits = null;
        if (is_null($dirFiltersLits)) {
            $arcPaths = array_map('trailingslashit', self::getArchiveListPaths());
            $items    = [
                'home'      => [
                    'wp-snapshots',
                    '.opcache',
                    '.tmb',
                ],
                'wpcontent' => [
                    'backups-dup-lite',
                    'backups-dup-pro',
                    'ai1wm-backups',
                    'backupwordpress',
                    'content/cache',
                    'contents/cache',
                    'infinitewp/backups',
                    'managewp/backups',
                    'old-cache',
                    'updraft',
                    'wpvividbackups',
                    'wishlist-backup',
                    'wfcache',
                    'bps-backup',
                    'cache',
                ],
                'uploads'   =>  [
                    'aiowps_backups',
                    'backupbuddy_temp',
                    'backupbuddy_backups',
                    'ithemes-security/backups',
                    'mainwp/backup',
                    'pb_backupbuddy',
                    'snapshots',
                    'sucuri',
                    'wp-clone',
                    'wp_all_backup',
                    'wpbackitup_backups',
                    'backup-guard',
                ],
                'plugins'   => [
                    'all-in-one-wp-migration/storage',
                    'really-simple-captcha/tmp',
                    'wordfence/tmp',
                ],
            ];

            $dirFiltersLits = [];
            foreach ($items as $pathKey => $pathsList) {
                foreach ($pathsList as $subPath) {
                    $dirFiltersLits[] = $arcPaths[$pathKey] . $subPath;
                }
            }
        }
        return apply_filters('duplicator_pro_global_dir_filters', $dirFiltersLits);
    }

    /**
     * Return global default filter
     *
     * @return string[]
     */
    public static function getDefaultGlobalFileFilter()
    {
        static $fileFiltersLits = null;
        if (is_null($fileFiltersLits)) {
            $fileFiltersLits = array(
                'error_log',
                'debug_log',
                'ws_ftp.log',
                'dbcache',
                'pgcache',
                'objectcache',
                '.DS_Store',
            );
        }
        return apply_filters('duplicator_pro_global_file_filters', $fileFiltersLits);
    }

    /**
     * Recursive function to get all directories in a wp install
     *
     * @param string $path         The path to start the search
     * @param string $relativePath The relative path to start the search
     *
     * @return false|array{size: int, nodes: int} Returns an array of directories to include in the archive, false on failure
     */
    private function getFileLists($path, $relativePath)
    {
        if (($handle = opendir((strlen($path) === 0 ? '/' : $path))) === false) {
            DUP_PRO_Log::trace('Can\'t open dir: ' . $path);
            return false;
        }

        $result              = array(
            'size'  => 0,
            'nodes' => 1,
        );
        $trimmedRelativePath = ltrim($relativePath . '/', '/');
        while (($currentName         = readdir($handle)) !== false) {
            if ($currentName == '.' || $currentName == '..') {
                continue;
            }
            $currentPath = $path . '/' . $currentName;
            //DUP_PRO_Log::trace(' ANALIZE PATH: '.$currentPath);

            if (is_dir($currentPath)) {
                //DUP_PRO_Log::trace(' Scan dir: ' . $currentPath);
                $add = true;
                if (is_link($currentPath)) {
                    //Get real path of link
                    //trailing slash is essential!
                    $realPath = SnapIO::safePathTrailingslashit($currentPath, true);
                    //if $currentPath starts with $realPath and is link
                    //=> $currentPath is located in $realPath and points back to it
                    if (strpos($currentPath, $realPath) === 0) {
                        $this->RecursiveLinks[] = $currentPath;
                        continue;
                    }
                }

                if (in_array($currentName, $this->relativeFiltersDir)) {
                    $add = false;
                } else {
                    foreach ($this->tmpFilterDirsAll as $filteredDir) {
                        if (SnapIO::isChildPath($currentPath, $filteredDir)) {
                            $add = false;
                            break;
                        }
                    }
                }

                if ($add) {
                    $childResult      = $this->getFileLists($currentPath, $trimmedRelativePath . $currentName);
                    $result['size']  += $childResult['size'];
                    $result['nodes'] += $childResult['nodes'];
                    $this->addToDirList(
                        $currentPath,
                        $trimmedRelativePath . $currentName,
                        $childResult['size'],
                        $childResult['nodes']
                    );
                }
            } else {
                // Note: The last clause is present to perform just a filename check
                if (
                    !(in_array(pathinfo($currentName, PATHINFO_EXTENSION), $this->FilterExtsAll) ||
                    in_array($currentPath, $this->FilterFilesAll) ||
                    in_array($currentName, $this->FilterFilesAll))
                ) {
                    if ($this->FilterNames) {
                        if (!$this->isValidEncoding($currentName)) {
                            continue;
                        }
                    }
                    $fileSize         = (int) @filesize($currentPath);
                    $result['size']  += $fileSize;
                    $result['nodes'] += 1;
                    $this->addToFileList($currentPath, $trimmedRelativePath . $currentName, $fileSize);
                }
            }
        }
        closedir($handle);
        return $result;
    }

    /**
     * Initializes the file list handles. Handles are set-up as properties for
     * performance improvement. Otherwise each handle would be opened and closed
     * with each path added.
     *
     * @return void
     */
    private function initFileListHandles()
    {
        DUP_PRO_Log::trace('Inif list files');
        $this->listDirObj->open(true);
        $this->listFileObj->open(true);
    }

    /**
     * Closes file and dir list handles
     *
     * @return void
     */
    private function closeFileListHandles()
    {
        $this->listDirObj->close();
        $this->listFileObj->close();
    }

    /**
     * Check if is valid encoding
     *
     * @param string $string string to check
     *
     * @return bool
     */
    public static function isValidEncoding($string)
    {
        return !preg_match('/([\/\*\?><\:\\\\\|]|[^\x20-\x7f])/', $string);
    }

    /**
     * Check if dir must be added to warning list
     *
     * @param string $dirPath      dir path
     * @param string $relativePath root relative path
     * @param int    $size         file size
     * @param int    $nodes        num items inside folder
     *
     * @return void
     */
    private function addToDirList($dirPath, $relativePath, $size, $nodes)
    {
        // Dir is not readble remove and flag
        if (strlen($dirPath) > 0 && !SnapOS::isWindows() && !is_readable($dirPath)) {
            $this->FilterInfo->Dirs->addUnreadableItem($dirPath);
            return;
        }

        // is relative path is empty is the root path
        $global = DUP_PRO_Global_Entity::getInstance();
        if (strlen($relativePath) && !$global->skip_archive_scan) {
            if ($size > DUPLICATOR_PRO_SCAN_WARN_DIR_SIZE) {
                $dirData                        = array(
                    'ubytes' => $size,
                    'bytes'  => DUP_PRO_U::byteSize($size),
                    'nodes'  => $nodes,
                    'name'   => basename($dirPath),
                    'dir'    => pathinfo($relativePath, PATHINFO_DIRNAME),
                    'path'   => $relativePath,
                );
                $this->FilterInfo->Dirs->Size[] = $dirData;
                DUP_PRO_Log::traceObject('ADD DIR SIZE:', $dirData);
            }

            // Check for other WordPress installs
            if (!self::isCurrentWordpressInstallPath($dirPath) && SnapWP::isWpHomeFolder($dirPath)) {
                $this->FilterInfo->Dirs->AddonSites[] = $dirPath;
            }
        }

        $this->DirCount++;
        $this->listDirObj->addEntry($relativePath, $size, $nodes);
    }

    /**
     * Check if file must be added to warning list
     *
     * @param string $filePath     file path
     * @param string $relativePath root relative path
     * @param int    $fileSize     file size
     *
     * @return void
     */
    private function addToFileList($filePath, $relativePath, $fileSize)
    {
        if (!is_readable($filePath)) {
            $this->FilterInfo->Files->addUnreadableItem($filePath);
            return;
        }

        if (!DUP_PRO_Global_Entity::getInstance()->skip_archive_scan && $fileSize > DUPLICATOR_PRO_SCAN_WARN_FILE_SIZE) {
            $this->FilterInfo->Files->Size[] = array(
                'ubytes' => $fileSize,
                'bytes'  => DUP_PRO_U::byteSize($fileSize),
                'nodes'  => 1,
                'name'   => basename($filePath),
                'dir'    => pathinfo($relativePath, PATHINFO_DIRNAME),
                'path'   => $relativePath,
            );
        }

        $this->FileCount++;
        $this->Size += $fileSize;
        $this->listFileObj->addEntry($relativePath, $fileSize, 1);
    }

    /**
     *  Builds a tree for both file size warnings and name check warnings
     *  The trees are used to apply filters from the scan screen
     *
     *  @return bool
     */
    private function setTreeFilters()
    {
        //-------------------------
        //SIZE TREE
        //BUILD: File Size tree
        DUP_PRO_Log::trace('BUILD: File Size tree');
        $rootPath  = $this->getTargetRootPath();
        $scanPaths = $this->getScanPaths();
        if (count($this->FilterInfo->Dirs->Size) || count($this->FilterInfo->Files->Size)) {
            $treeObj = new DUP_PRO_Tree_files($scanPaths, false);
            foreach ($this->FilterInfo->Dirs->Size as $fileData) {
                /* if (SnapWP::isWpCore($fileData, SnapWP::PATH_RELATIVE, true)) {
                  continue;
                  } */
                $data = array(
                    'is_warning' => true,
                    'size'       => $fileData['bytes'],
                    'ubytes'     => $fileData['ubytes'],
                    'nodes'      => $fileData['nodes'],
                );
                try {
                    $treeObj->addElement($rootPath . '/' . $fileData['path'], $data);
                } catch (Exception $e) {
                    DUP_PRO_Log::trace('Add filter dir size error MSG: ' . $e->getMessage());
                }
            }

            foreach ($this->FilterInfo->Files->Size as $fileData) {
                /* if (SnapWP::isWpCore($fileData, SnapWP::PATH_RELATIVE, true)) {
                  continue;
                  } */
                $data = array(
                    'is_warning' => true,
                    'size'       => $fileData['bytes'],
                    'ubytes'     => $fileData['ubytes'],
                    'nodes'      => 1,
                );
                try {
                    $treeObj->addElement($rootPath . '/' . $fileData['path'], $data);
                } catch (Exception $e) {
                    DUP_PRO_Log::trace('Add filter file size error MSG: ' . $e->getMessage());
                }
            }

            $treeObj->uasort(array(__CLASS__, 'sortTreeByFolderWarningName'));
            $treeObj->treeTraverseCallback(array($this, 'checkTreeNodesFolder'));
        } else {
            $treeObj = new DUP_PRO_Tree_files($scanPaths, false);
        }


        $this->FilterInfo->TreeSize = self::getJsTreeStructure($treeObj, esc_html__('No large files found during this scan.', 'duplicator-pro'), true);
        DUP_PRO_Log::trace(' END');
        return true;
    }

    /**
     * Three sort function
     *
     * @param DUP_PRO_Tree_files_node $a Node
     * @param DUP_PRO_Tree_files_node $b Node
     *
     * @return int<-1,1>
     */
    public static function sortTreeByFolderWarningName($a, $b)
    {
        // check sort by path type
        if ($a->isDir && !$b->isDir) {
            return -1;
        } elseif (!$a->isDir && $b->isDir) {
            return 1;
        } else {
            // sort by warning
            if (
                (isset($a->data['is_warning']) && $a->data['is_warning'] == true) &&
                (!isset($b->data['is_warning']) || $b->data['is_warning'] == false)
            ) {
                return -1;
            } elseif (
                (!isset($a->data['is_warning']) || $a->data['is_warning'] == false) &&
                (isset($b->data['is_warning']) && $b->data['is_warning'] == true)
            ) {
                return 1;
            } else {
                // sort by name
                return strcmp($a->name, $b->name);
            }
        }
    }

    /**
     * Check tree node
     *
     * @param DUP_PRO_Tree_files_node $node Tree node
     *
     * @return void
     */
    public function checkTreeNodesFolder($node)
    {
        $node->data['is_core']     = 0;
        $node->data['is_filtered'] = 0;
        if ($node->isDir) {
            $node->data['is_core'] = (int) SnapWP::isWpCore($node->fullPath, SnapWP::PATH_FULL);
            if (in_array($node->fullPath, $this->FilterDirsAll)) {
                $node->data['is_filtered'] = 1;
            }

            $dirData             = $this->listDirObj->getEntryFromPath(SnapIO::getRelativePath($node->fullPath, self::getTargetRootPath()));
            $node->data['size']  = DUP_PRO_U::byteSize($dirData['s']);
            $node->data['nodes'] = $dirData['n'];
        } else {
            $ext = pathinfo($node->fullPath, PATHINFO_EXTENSION);
            if (in_array($ext, $this->FilterExtsAll)) {
                $node->data['is_filtered'] = 1;
            } elseif (in_array($node->fullPath, $this->FilterFilesAll)) {
                $node->data['is_filtered'] = 1;
            }

            /*
             * provision to disable the core files to be excluded.
             *
             * $node->data['is_core'] = (int) SnapWP::isWpCore($node->fullPath , SnapWP::PATH_FULL);
             */
        }
    }

    /**
     * Get tree structure for jsTree
     *
     * @param DUP_PRO_Tree_files $treeObj       Tree object
     * @param string             $notFoundText  Text for empty tree
     * @param bool               $addFullLoaded Add full loaded flag
     *
     * @return array<string, mixed>
     */
    public static function getJsTreeStructure($treeObj, $notFoundText = '', $addFullLoaded = true)
    {
        $treeList = array_values($treeObj->getTreeList());
        switch (count($treeList)) {
            case 0:
                return array(
                    //'id'          => 'no_child_founds',
                    'text'  => $notFoundText, // node text
                    'type'  => 'info-text',
                    'state' => array(
                        'opened'            => false, // is the node open
                        'disabled'          => true, // is the node disabled
                        'selected'          => false, // is the node selected,
                        'checked'           => false,
                        'checkbox_disabled' => true,
                    ),
                );
            case 1:
                return self::treeNodeTojstreeNode($treeList[0], true, $notFoundText, $addFullLoaded);
            default:
                $rootPath = self::getTargetRootPath();
                $result   = array(
                    //'id'          => 'no_child_founds',
                    'text'     => strlen($rootPath) ? $rootPath : '/', // node text
                    'type'     => 'folder',
                    'children' => array(),
                    'state'    => array(
                        'opened'            => true, // is the node open
                        'disabled'          => true, // is the node disabled
                        'selected'          => false, // is the node selected,
                        'checked'           => false,
                        'checkbox_disabled' => true,
                    ),
                );
                foreach ($treeList as $treeRootNode) {
                    $result['children'][] = self::treeNodeTojstreeNode($treeRootNode, true, $notFoundText, $addFullLoaded);
                }

                return $result;
        }
    }

    /**
     * Get jsTree node from tree node
     *
     * @param DUP_PRO_Tree_files_node $node          Tree node
     * @param bool                    $root          Is root node
     * @param string                  $notFoundText  Text for empty tree
     * @param bool                    $addFullLoaded Add full loaded flag
     *
     * @return array<string, mixed>
     */
    protected static function treeNodeTojstreeNode($node, $root = false, $notFoundText = '', $addFullLoaded = true)
    {
        $name       = $root ? $node->fullPath : $node->name;
        $isCore     = isset($node->data['is_core']) && $node->data['is_core'];
        $isFiltered = isset($node->data['is_filtered']) && $node->data['is_filtered'];
        if (isset($node->data['size'])) {
            $name .= ' <span class="size" >' . (($node->data['size'] !== false && !$isFiltered) ? $node->data['size'] : '&nbsp;') . '</span>';
        }

        if (isset($node->data['nodes'])) {
            $name .= ' <span class="nodes" >' . (($node->data['nodes'] > 1 && !$isFiltered) ? $node->data['nodes'] : '&nbsp;') . '</span>';
        }

        $li_classes = '';
        $a_attr     = array();
        $li_attr    = array();
        if ($root) {
            $li_classes .= ' root-node';
        }

        if ($isCore) {
            $li_classes .= ' core-node';
            if ($node->isDir) {
                $a_attr['title'] = esc_attr__('Core WordPress directories should not be filtered. Use caution when excluding files.', 'duplicator-pro');
            }
            $isWraning = false;
// never warings for cores files
        } else {
            $isWraning = isset($node->data['is_warning']) && $node->data['is_warning'];
        }

        if ($isWraning) {
            $li_classes .= ' warning-node';
        }

        if ($isFiltered) {
            $li_classes .= ' filtered-node';
            if ($node->isDir) {
                $a_attr['title'] = esc_attr__('This dir is filtered.', 'duplicator-pro');
            } else {
                $a_attr['title'] = esc_attr__('This file is filtered.', 'duplicator-pro');
            }
        }

        if ($addFullLoaded && $node->isDir) {
            $li_attr['data-full-loaded'] = false;
            if (!$root && $node->haveChildren && !$isWraning) {
                $li_classes .= ' warning-childs';
            }
        }

        $li_attr['class'] = $li_classes;
        $result           = array(
            //'id'          => $node->id, // will be autogenerated if omitted
            'text'     => $name, // node text
            'fullPath' => $node->fullPath,
            'type'     => $node->isDir ? 'folder' : 'file',
            'state'    => array(
                'opened'            => true, // is the node open
                'disabled'          => false, // is the node disabled
                'selected'          => false, // is the node selected,
                'checked'           => false,
                'checkbox_disabled' => $isCore || $isFiltered,
            ),
            'children' => array(), // array of strings or objects
            'li_attr'  => $li_attr, // attributes for the generated LI node
            'a_attr'   => $a_attr,// attributes for the generated A node
        );
        if ($root) {
            if (count($node->childs) == 0) {
                $result['state']['disabled'] = true;
                $result['state']['opened']   = true;
                $result['li_attr']['class'] .= ' no-warnings';
                $result['children'][]        = array(
                    //'id'          => 'no_child_founds',
                    'text'  => $notFoundText, // node text
                    'type'  => 'info-text',
                    'state' => array(
                        'opened'            => false, // is the node open
                        'disabled'          => true, // is the node disabled
                        'selected'          => false, // is the node selected,
                        'checked'           => false,
                        'checkbox_disabled' => true,
                    ),
                );
            } else {
                $result['li_attr']['class'] .= ' warning-childs';
            }
        } else {
            if (count($node->childs) == 0) {
                $result['children']        = $node->haveChildren;
                $result['state']['opened'] = false;
            }
        }

        foreach ($node->childs as $child) {
            $result['children'][] = self::treeNodeTojstreeNode($child, false, '', $addFullLoaded);
        }

        return $result;
    }

    /**
     * get the main target root path to make archive
     *
     * @return string
     */
    public static function getTargetRootPath()
    {
        static $targetRoorPath = null;
        if (is_null($targetRoorPath)) {
            $paths = self::getArchiveListPaths();
            unset($paths['wpconfig']);
            $targetRoorPath = SnapIO::getCommonPath($paths);
        }
        return $targetRoorPath;
    }

    /**
     * Get original wordpress URLs
     *
     * @param null|string $urlKey if set will only return the url identified by that key
     *
     * @return array<string,string>|string return empty string if key doesn't exist
     */
    public static function getOriginalUrls($urlKey = null)
    {
        static $origUrls = null;
        if (is_null($origUrls)) {
            $restoreMultisite = false;
            if (is_multisite() && SnapWP::getMainSiteId() !== get_current_blog_id()) {
                $restoreMultisite = true;
                restore_current_blog();
                switch_to_blog(SnapWP::getMainSiteId());
            }

            $updDirs = wp_upload_dir(null, false, true);
            if (($wpConfigDir = SnapWP::getWPConfigPath()) !== false) {
                $wpConfigDir = dirname($wpConfigDir);
            }

            if (DUP_PRO_Global_Entity::getInstance()->homepath_as_abspath) {
                $homeUrl = site_url();
            } else {
                $homeUrl   = home_url();
                $homeParse = SnapURL::parseUrl(home_url());
                $absParse  = SnapURL::parseUrl(site_url());
                if ($homeParse['host'] === $absParse['host'] && SnapIO::isChildPath($homeParse['path'], $absParse['path'], false, false)) {
                    $homeParse['path'] = $absParse['path'];
                    $homeUrl           = SnapURL::buildUrl($homeParse);
                }
            }

            $origUrls = array(
                'home'      => $homeUrl,
                'abs'       => site_url(),
                'login'     => wp_login_url(),
                'wpcontent' => content_url(),
                'uploads'   => $updDirs['baseurl'],
                'plugins'   => plugins_url(),
                'muplugins' => WPMU_PLUGIN_URL,
                'themes'    => get_theme_root_uri(),
            );
            if ($restoreMultisite) {
                restore_current_blog();
            }
        }

        if ($urlKey === null) {
            return $origUrls;
        }

        if (isset($origUrls[$urlKey])) {
            return $origUrls[$urlKey];
        } else {
            return '';
        }
    }

    /**
     * Get WordPress core dirs
     *
     * @return string[]
     */
    public function filterWpCoreFoldersList()
    {
        return array_intersect($this->FilterDirsAll, DUP_PRO_U::getWPCoreDirs());
    }

    /**
     * Check if the wordpress core dirs are filtered
     *
     * @return bool
     */
    public function hasWpCoreFolderFiltered()
    {
        return count($this->filterWpCoreFoldersList()) > 0;
    }

    /**
     * return the wordpress original dir paths
     *
     * @param string|null $pathKey path key
     *
     * @return array<string,string>|string return empty string if key doesn't exist
     */
    public static function getOriginalPaths($pathKey = null)
    {
        return SnapWP::getWpPaths($pathKey, DUP_PRO_Global_Entity::getInstance()->homepath_as_abspath);
    }

    /**
     * Return the wordpress original dir paths.
     *
     * @param string|null $pathKey path key
     *
     * @return array<string,string>|string return empty string if key doesn't exist
     */
    public static function getArchiveListPaths($pathKey = null)
    {
        return SnapWP::getNormalizedWpPaths($pathKey, DUP_PRO_Global_Entity::getInstance()->homepath_as_abspath);
    }

    /**
     *
     * @param string $path path to check
     *
     * @return bool return true if path is a path of current wordpress installation
     */
    public static function isCurrentWordpressInstallPath($path)
    {
        static $currentWpPaths = null;

        if (is_null($currentWpPaths)) {
            $currentWpPaths = array_merge(self::getOriginalPaths(), self::getArchiveListPaths());
            $currentWpPaths = array_map('trailingslashit', $currentWpPaths);
            $currentWpPaths = array_values(array_unique($currentWpPaths));
        }
        return in_array(trailingslashit($path), $currentWpPaths);
    }

    /**
     * Check if the homepath and abspath are equivalent
     *
     * @return bool
     */
    public static function isAbspathHomepathEquivalent()
    {
        static $isEquivalent = null;
        if (is_null($isEquivalent)) {
            $absPath      = SnapIO::safePathUntrailingslashit(ABSPATH, true);
            $homePath     = SnapIO::safePathUntrailingslashit(get_home_path(), true);
            $isEquivalent = (strcmp($homePath, $absPath) === 0);
        }
        return $isEquivalent;
    }

    /**
     * Get package local dir path
     *
     * @param string $dir      package dir path
     * @param string $basePath base path
     *
     * @return string
     */
    public function getLocalDirPath($dir, $basePath = '')
    {
        $safeDir = SnapIO::safePathUntrailingslashit($dir);
        return ltrim($basePath . preg_replace('/^' . preg_quote($this->PackDir, '/') . '(.*)/m', '$1', $safeDir), '/');
    }

    /**
     * Get package local file path
     *
     * @param string $file     package file path
     * @param string $basePath base path
     *
     * @return string
     */
    public function getLocalFilePath($file, $basePath = '')
    {
        $safeFile = SnapIO::safePathUntrailingslashit($file);
        return ltrim($basePath . preg_replace('/^' . preg_quote($this->PackDir, '/') . '(.*)/m', '$1', $safeFile), '/');
    }
}
