<?php

/**
 * Exception for 431 Request Header Fields Too Large responses
 *
 * @link https://tools.ietf.org/html/rfc6585
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 431 Request Header Fields Too Large responses
 *
 * @link https://tools.ietf.org/html/rfc6585
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status431 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 431;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Request Header Fields Too Large';
}
