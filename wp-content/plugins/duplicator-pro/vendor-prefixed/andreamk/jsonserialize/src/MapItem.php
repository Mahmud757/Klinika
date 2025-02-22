<?php

/**
 * Map item class
 *
 * @package Amk\JsonSerialize
 */
namespace VendorDuplicator\Amk\JsonSerialize;

/**
 * Map item element
 * @internal
 */
class MapItem
{
    /** @var ?string */
    public $type = null;
    /** @var self[] */
    public $childs = [];
}
