<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Balance
 */
class GetBalanceResponse implements JsonSerializable
{
    /**
     * Currency
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Amount available for transferring
     * @required
     * @maps available_amount
     * @var integer $availableAmount public property
     */
    public $availableAmount;

    /**
     * Recipient response
     * @var \PagarmeCoreApiLib\Models\GetRecipientResponse|null $recipient public property
     */
    public $recipient;

    /**
     * @todo Write general description for this property
     * @required
     * @maps transferred_amount
     * @var integer $transferredAmount public property
     */
    public $transferredAmount;

    /**
     * @todo Write general description for this property
     * @required
     * @maps waiting_funds_amount
     * @var integer $waitingFundsAmount public property
     */
    public $waitingFundsAmount;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $currency           Initialization value for $this->currency
     * @param integer              $availableAmount    Initialization value for $this->availableAmount
     * @param GetRecipientResponse $recipient          Initialization value for $this->recipient
     * @param integer              $transferredAmount  Initialization value for $this->transferredAmount
     * @param integer              $waitingFundsAmount Initialization value for $this->waitingFundsAmount
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->currency           = func_get_arg(0);
            $this->availableAmount    = func_get_arg(1);
            $this->recipient          = func_get_arg(2);
            $this->transferredAmount  = func_get_arg(3);
            $this->waitingFundsAmount = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['currency']             = $this->currency;
        $json['available_amount']     = $this->availableAmount;
        $json['recipient']            = $this->recipient;
        $json['transferred_amount']   = $this->transferredAmount;
        $json['waiting_funds_amount'] = $this->waitingFundsAmount;

        return $json;
    }
}
