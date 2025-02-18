<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateEmvDataDukptDecryptRequest implements JsonSerializable
{
    /**
     * Key serial number
     * @required
     * @var string $ksn public property
     */
    public $ksn;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $ksn Initialization value for $this->ksn
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->ksn = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['ksn'] = $this->ksn;

        return $json;
    }
}
