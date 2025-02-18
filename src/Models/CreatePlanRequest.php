<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for creating a plan
 */
class CreatePlanRequest implements JsonSerializable
{
    /**
     * Plan's name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Text that will be printed on the credit card's statement
     * @required
     * @maps statement_descriptor
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Plan items
     * @required
     * @var \PagarmeCoreApiLib\Models\CreatePlanItemRequest[] $items public property
     */
    public $items;

    /**
     * Indicates if the plan is shippable
     * @required
     * @var bool $shippable public property
     */
    public $shippable;

    /**
     * Allowed payment methods for the plan
     * @required
     * @maps payment_methods
     * @var array $paymentMethods public property
     */
    public $paymentMethods;

    /**
     * Number of installments
     * @required
     * @var array $installments public property
     */
    public $installments;

    /**
     * Currency
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Interval
     * @required
     * @var string $interval public property
     */
    public $interval;

    /**
     * Interval counts between two charges. For instance, if the interval is 'month' and count is 2, the
     * customer will be charged once every two months.
     * @required
     * @maps interval_count
     * @var integer $intervalCount public property
     */
    public $intervalCount;

    /**
     * Allowed billings days for the subscription, in case the plan type is 'exact_day'
     * @required
     * @maps billing_days
     * @var array $billingDays public property
     */
    public $billingDays;

    /**
     * Billing type
     * @required
     * @maps billing_type
     * @var string $billingType public property
     */
    public $billingType;

    /**
     * Request for creating a pricing scheme
     * @required
     * @maps pricing_scheme
     * @var \PagarmeCoreApiLib\Models\CreatePricingSchemeRequest $pricingScheme public property
     */
    public $pricingScheme;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Minimum price that will be charged
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * Number of cycles
     * @var integer|null $cycles public property
     */
    public $cycles;

    /**
     * Quantity
     * @var integer|null $quantity public property
     */
    public $quantity;

    /**
     * Trial period, where the customer will not be charged.
     * @maps trial_period_days
     * @var integer|null $trialPeriodDays public property
     */
    public $trialPeriodDays;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                     $name                Initialization value for $this->name
     * @param string                     $description         Initialization value for $this->description
     * @param string                     $statementDescriptor Initialization value for $this->statementDescriptor
     * @param array                      $items               Initialization value for $this->items
     * @param bool                       $shippable           Initialization value for $this->shippable
     * @param array                      $paymentMethods      Initialization value for $this->paymentMethods
     * @param array                      $installments        Initialization value for $this->installments
     * @param string                     $currency            Initialization value for $this->currency
     * @param string                     $interval            Initialization value for $this->interval
     * @param integer                    $intervalCount       Initialization value for $this->intervalCount
     * @param array                      $billingDays         Initialization value for $this->billingDays
     * @param string                     $billingType         Initialization value for $this->billingType
     * @param CreatePricingSchemeRequest $pricingScheme       Initialization value for $this->pricingScheme
     * @param array                      $metadata            Initialization value for $this->metadata
     * @param integer                    $minimumPrice        Initialization value for $this->minimumPrice
     * @param integer                    $cycles              Initialization value for $this->cycles
     * @param integer                    $quantity            Initialization value for $this->quantity
     * @param integer                    $trialPeriodDays     Initialization value for $this->trialPeriodDays
     */
    public function __construct()
    {
        if (18 == func_num_args()) {
            $this->name                = func_get_arg(0);
            $this->description         = func_get_arg(1);
            $this->statementDescriptor = func_get_arg(2);
            $this->items               = func_get_arg(3);
            $this->shippable           = func_get_arg(4);
            $this->paymentMethods      = func_get_arg(5);
            $this->installments        = func_get_arg(6);
            $this->currency            = func_get_arg(7);
            $this->interval            = func_get_arg(8);
            $this->intervalCount       = func_get_arg(9);
            $this->billingDays         = func_get_arg(10);
            $this->billingType         = func_get_arg(11);
            $this->pricingScheme       = func_get_arg(12);
            $this->metadata            = func_get_arg(13);
            $this->minimumPrice        = func_get_arg(14);
            $this->cycles              = func_get_arg(15);
            $this->quantity            = func_get_arg(16);
            $this->trialPeriodDays     = func_get_arg(17);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']                 = $this->name;
        $json['description']          = $this->description;
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['items']                = $this->items;
        $json['shippable']            = $this->shippable;
        $json['payment_methods']      = $this->paymentMethods;
        $json['installments']         = $this->installments;
        $json['currency']             = $this->currency;
        $json['interval']             = $this->interval;
        $json['interval_count']       = $this->intervalCount;
        $json['billing_days']         = $this->billingDays;
        $json['billing_type']         = $this->billingType;
        $json['pricing_scheme']       = $this->pricingScheme;
        $json['metadata']             = $this->metadata;
        $json['minimum_price']        = $this->minimumPrice;
        $json['cycles']               = $this->cycles;
        $json['quantity']             = $this->quantity;
        $json['trial_period_days']    = $this->trialPeriodDays;

        return $json;
    }
}
