<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Response object for geetting an order device
 */
class GetDeviceResponse implements JsonSerializable
{
    /**
     * Device's platform name
     * @var string|null $platform public property
     */
    public $platform;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $platform Initialization value for $this->platform
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->platform = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['platform'] = $this->platform;

        return $json;
    }
}
