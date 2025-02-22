<?php

/**
 * Exception for 417 Expectation Failed responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 417 Expectation Failed responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status417 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 417;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Expectation Failed';
}
