<?php

/**
 * Exception for 415 Unsupported Media Type responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 415 Unsupported Media Type responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status415 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 415;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Unsupported Media Type';
}
