<?php

/**
 * Exception for 428 Precondition Required responses
 *
 * @link https://tools.ietf.org/html/rfc6585
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 428 Precondition Required responses
 *
 * @link https://tools.ietf.org/html/rfc6585
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status428 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 428;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Precondition Required';
}
