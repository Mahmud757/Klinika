<?php

/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status402 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 402;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Payment Required';
}
