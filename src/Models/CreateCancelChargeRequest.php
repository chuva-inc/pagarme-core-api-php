<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for canceling a charge.
 */
class CreateCancelChargeRequest implements JsonSerializable
{
    /**
     * The amount that will be canceled.
     * @var integer|null $amount public property
     */
    public $amount;

    /**
     * The split rules request
     * @maps split_rules
     * @var \PagarmeCoreApiLib\Models\CreateCancelChargeSplitRulesRequest[]|null $splitRules public property
     */
    public $splitRules;

    /**
     * Splits
     * @var \PagarmeCoreApiLib\Models\CreateSplitRequest[]|null $split public property
     */
    public $split;

    /**
     * @todo Write general description for this property
     * @required
     * @maps operation_reference
     * @var string $operationReference public property
     */
    public $operationReference;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $amount             Initialization value for $this->amount
     * @param array   $splitRules         Initialization value for $this->splitRules
     * @param array   $split              Initialization value for $this->split
     * @param string  $operationReference Initialization value for $this->operationReference
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->amount             = func_get_arg(0);
            $this->splitRules         = func_get_arg(1);
            $this->split              = func_get_arg(2);
            $this->operationReference = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['amount']              = $this->amount;
        $json['split_rules']         = $this->splitRules;
        $json['split']               = $this->split;
        $json['operation_reference'] = $this->operationReference;

        return $json;
    }
}
