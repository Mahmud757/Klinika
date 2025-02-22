<?php

/**
 * Exception for 405 Method Not Allowed responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 405 Method Not Allowed responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status405 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 405;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Method Not Allowed';
}
