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
 *Response object for getting a discount
 */
class GetDiscountResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @maps discount_type
     * @var string $discountType public property
     */
    public $discountType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @var integer|null $cycles public property
     */
    public $cycles;

    /**
     * @todo Write general description for this property
     * @maps deleted_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deletedAt public property
     */
    public $deletedAt;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @var \PagarmeCoreApiLib\Models\GetSubscriptionResponse|null $subscription public property
     */
    public $subscription;

    /**
     * @todo Write general description for this property
     * @maps subscription_item
     * @var \PagarmeCoreApiLib\Models\GetSubscriptionItemResponse|null $subscriptionItem public property
     */
    public $subscriptionItem;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                       $id               Initialization value for $this->id
     * @param double                       $value            Initialization value for $this->value
     * @param string                       $discountType     Initialization value for $this->discountType
     * @param string                       $status           Initialization value for $this->status
     * @param \DateTime                    $createdAt        Initialization value for $this->createdAt
     * @param integer                      $cycles           Initialization value for $this->cycles
     * @param \DateTime                    $deletedAt        Initialization value for $this->deletedAt
     * @param string                       $description      Initialization value for $this->description
     * @param GetSubscriptionResponse      $subscription     Initialization value for $this->subscription
     * @param GetSubscriptionItemResponse  $subscriptionItem Initialization value for $this->subscriptionItem
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->id               = func_get_arg(0);
            $this->value            = func_get_arg(1);
            $this->discountType     = func_get_arg(2);
            $this->status           = func_get_arg(3);
            $this->createdAt        = func_get_arg(4);
            $this->cycles           = func_get_arg(5);
            $this->deletedAt        = func_get_arg(6);
            $this->description      = func_get_arg(7);
            $this->subscription     = func_get_arg(8);
            $this->subscriptionItem = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                = $this->id;
        $json['value']             = $this->value;
        $json['discount_type']     = $this->discountType;
        $json['status']            = $this->status;
        $json['created_at']        = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['cycles']            = $this->cycles;
        $json['deleted_at']        = isset($this->deletedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->deletedAt) : null;
        $json['description']       = $this->description;
        $json['subscription']      = $this->subscription;
        $json['subscription_item'] = $this->subscriptionItem;

        return $json;
    }
}
