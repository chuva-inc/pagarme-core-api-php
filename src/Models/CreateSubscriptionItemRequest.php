<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for creating a new subscription item
 */
class CreateSubscriptionItemRequest implements JsonSerializable
{
    /**
     * Item description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Request for creating a pricing scheme
     * @required
     * @maps pricing_scheme
     * @var \PagarmeCoreApiLib\Models\CreatePricingSchemeRequest $pricingScheme public property
     */
    public $pricingScheme;

    /**
     * Item id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Plan item id
     * @required
     * @maps plan_item_id
     * @var string $planItemId public property
     */
    public $planItemId;

    /**
     * Discounts for the item
     * @required
     * @var \PagarmeCoreApiLib\Models\CreateDiscountRequest[] $discounts public property
     */
    public $discounts;

    /**
     * Item name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Number of cycles which the item will be charged
     * @var integer|null $cycles public property
     */
    public $cycles;

    /**
     * Quantity of items
     * @var integer|null $quantity public property
     */
    public $quantity;

    /**
     * Minimum price
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                     $description   Initialization value for $this->description
     * @param CreatePricingSchemeRequest $pricingScheme Initialization value for $this->pricingScheme
     * @param string                     $id            Initialization value for $this->id
     * @param string                     $planItemId    Initialization value for $this->planItemId
     * @param array                      $discounts     Initialization value for $this->discounts
     * @param string                     $name          Initialization value for $this->name
     * @param integer                    $cycles        Initialization value for $this->cycles
     * @param integer                    $quantity      Initialization value for $this->quantity
     * @param integer                    $minimumPrice  Initialization value for $this->minimumPrice
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->description   = func_get_arg(0);
            $this->pricingScheme = func_get_arg(1);
            $this->id            = func_get_arg(2);
            $this->planItemId    = func_get_arg(3);
            $this->discounts     = func_get_arg(4);
            $this->name          = func_get_arg(5);
            $this->cycles        = func_get_arg(6);
            $this->quantity      = func_get_arg(7);
            $this->minimumPrice  = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['description']    = $this->description;
        $json['pricing_scheme'] = $this->pricingScheme;
        $json['id']             = $this->id;
        $json['plan_item_id']   = $this->planItemId;
        $json['discounts']      = $this->discounts;
        $json['name']           = $this->name;
        $json['cycles']         = $this->cycles;
        $json['quantity']       = $this->quantity;
        $json['minimum_price']  = $this->minimumPrice;

        return $json;
    }
}
