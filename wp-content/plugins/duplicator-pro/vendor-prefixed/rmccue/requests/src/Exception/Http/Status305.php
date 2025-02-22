<?php

/**
 * Exception for 305 Use Proxy responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 305 Use Proxy responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status305 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 305;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Use Proxy';
}
