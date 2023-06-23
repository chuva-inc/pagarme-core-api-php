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
 *Request for updating the due date from a subscription
 */
class UpdateSubscriptionBillingDateRequest implements JsonSerializable
{
    /**
     * The date when the next subscription billing must occur
     * @required
     * @maps next_billing_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $nextBillingAt public property
     */
    public $nextBillingAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $nextBillingAt Initialization value for $this->nextBillingAt
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->nextBillingAt = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['next_billing_at'] = DateTimeHelper::toRfc3339DateTime($this->nextBillingAt);

        return $json;
    }
}
