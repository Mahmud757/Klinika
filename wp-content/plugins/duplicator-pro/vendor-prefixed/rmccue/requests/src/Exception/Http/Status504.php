<?php

/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests\Exceptions
 */
namespace VendorDuplicator\WpOrg\Requests\Exception\Http;

use VendorDuplicator\WpOrg\Requests\Exception\Http;
/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests\Exceptions
 * @internal
 */
final class Status504 extends Http
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 504;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Gateway Timeout';
}
