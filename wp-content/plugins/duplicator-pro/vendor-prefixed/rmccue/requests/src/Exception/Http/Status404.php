<?php

/**
 * Exception for 404 Not Found responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 404 Not Found responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status404 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 404;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Not Found';
}
