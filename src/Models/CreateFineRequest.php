<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Fine Request
 */
class CreateFineRequest implements JsonSerializable
{
    /**
     * Days
     * @required
     * @var integer $days public property
     */
    public $days;

    /**
     * Type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $days   Initialization value for $this->days
     * @param string  $type   Initialization value for $this->type
     * @param integer $amount Initialization value for $this->amount
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->days   = func_get_arg(0);
            $this->type   = func_get_arg(1);
            $this->amount = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['days']   = $this->days;
        $json['type']   = $this->type;
        $json['amount'] = $this->amount;

        return $json;
    }
}
