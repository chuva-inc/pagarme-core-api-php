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
class GetPhoneResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps country_code
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * @todo Write general description for this property
     * @var string|null $number public property
     */
    public $number;

    /**
     * @todo Write general description for this property
     * @maps area_code
     * @var string|null $areaCode public property
     */
    public $areaCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $countryCode Initialization value for $this->countryCode
     * @param string $number      Initialization value for $this->number
     * @param string $areaCode    Initialization value for $this->areaCode
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->countryCode = func_get_arg(0);
            $this->number      = func_get_arg(1);
            $this->areaCode    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['country_code'] = $this->countryCode;
        $json['number']       = $this->number;
        $json['area_code']    = $this->areaCode;

        return $json;
    }
}
