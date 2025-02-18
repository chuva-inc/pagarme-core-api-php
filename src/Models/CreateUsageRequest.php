<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;
use PagarmeCoreApiLib\Utils\DateTimeHelper;

/**
 *Request for creating a usage
 */
class CreateUsageRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @maps used_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $usedAt public property
     */
    public $usedAt;

    /**
     * Identification code in the client system
     * @var string|null $code public property
     */
    public $code;

    /**
     * identification group in the client system
     * @var string|null $group public property
     */
    public $group;

    /**
     * Field used in item scheme type 'Percent'
     * @var integer|null $amount public property
     */
    public $amount;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $quantity    Initialization value for $this->quantity
     * @param string    $description Initialization value for $this->description
     * @param \DateTime $usedAt      Initialization value for $this->usedAt
     * @param string    $code        Initialization value for $this->code
     * @param string    $group       Initialization value for $this->group
     * @param integer   $amount      Initialization value for $this->amount
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->quantity    = func_get_arg(0);
            $this->description = func_get_arg(1);
            $this->usedAt      = func_get_arg(2);
            $this->code        = func_get_arg(3);
            $this->group       = func_get_arg(4);
            $this->amount      = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['quantity']    = $this->quantity;
        $json['description'] = $this->description;
        $json['used_at']     = DateTimeHelper::toRfc3339DateTime($this->usedAt);
        $json['code']        = $this->code;
        $json['group']       = $this->group;
        $json['amount']      = $this->amount;

        return $json;
    }
}
