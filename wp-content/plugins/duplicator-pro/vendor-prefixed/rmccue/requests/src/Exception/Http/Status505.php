<?php

/**
 * Exception for 505 HTTP Version Not Supported responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 505 HTTP Version Not Supported responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status505 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 505;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'HTTP Version Not Supported';
}
