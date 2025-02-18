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
class GetSplitOptionsResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var bool $liable public property
     */
    public $liable;

    /**
     * @todo Write general description for this property
     * @required
     * @maps charge_processing_fee
     * @var bool $chargeProcessingFee public property
     */
    public $chargeProcessingFee;

    /**
     * @todo Write general description for this property
     * @required
     * @maps charge_remainder_fee
     * @var string $chargeRemainderFee public property
     */
    public $chargeRemainderFee;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $liable              Initialization value for $this->liable
     * @param bool   $chargeProcessingFee Initialization value for $this->chargeProcessingFee
     * @param string $chargeRemainderFee  Initialization value for $this->chargeRemainderFee
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->liable              = func_get_arg(0);
            $this->chargeProcessingFee = func_get_arg(1);
            $this->chargeRemainderFee  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['liable']                = $this->liable;
        $json['charge_processing_fee'] = $this->chargeProcessingFee;
        $json['charge_remainder_fee']  = $this->chargeRemainderFee;

        return $json;
    }
}
