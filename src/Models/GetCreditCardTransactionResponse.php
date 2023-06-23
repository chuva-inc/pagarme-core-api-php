<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Response object for getting a credit card transaction
 *
 * @discriminator transaction_type
 * @discriminatorType credit_card
 */
class GetCreditCardTransactionResponse extends GetTransactionResponse implements JsonSerializable
{
    /**
     * Text that will appear on the credit card's statement
     * @required
     * @maps statement_descriptor
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Acquirer name
     * @required
     * @maps acquirer_name
     * @var string $acquirerName public property
     */
    public $acquirerName;

    /**
     * Aquirer affiliation code
     * @required
     * @maps acquirer_affiliation_code
     * @var string $acquirerAffiliationCode public property
     */
    public $acquirerAffiliationCode;

    /**
     * Acquirer TID
     * @required
     * @maps acquirer_tid
     * @var string $acquirerTid public property
     */
    public $acquirerTid;

    /**
     * Acquirer NSU
     * @required
     * @maps acquirer_nsu
     * @var string $acquirerNsu public property
     */
    public $acquirerNsu;

    /**
     * Acquirer authorization code
     * @required
     * @maps acquirer_auth_code
     * @var string $acquirerAuthCode public property
     */
    public $acquirerAuthCode;

    /**
     * Operation type
     * @required
     * @maps operation_type
     * @var string $operationType public property
     */
    public $operationType;

    /**
     * Response object for getting a credit card
     * @required
     * @var \PagarmeCoreApiLib\Models\GetCardResponse $card public property
     */
    public $card;

    /**
     * Acquirer message
     * @required
     * @maps acquirer_message
     * @var string $acquirerMessage public property
     */
    public $acquirerMessage;

    /**
     * Acquirer Return Code
     * @required
     * @maps acquirer_return_code
     * @var string $acquirerReturnCode public property
     */
    public $acquirerReturnCode;

    /**
     * Number of installments
     * @var integer|null $installments public property
     */
    public $installments;

    /**
     * 3D-S authentication Url
     * @required
     * @maps threed_authentication_url
     * @var string $threedAuthenticationUrl public property
     */
    public $threedAuthenticationUrl;

    /**
     * Identify when a card is prepaid, credit or debit.
     * @maps funding_source
     * @var string|null $fundingSource public property
     */
    public $fundingSource;

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $statementDescriptor     Initialization value for $this->statementDescriptor
     * @param string          $acquirerName            Initialization value for $this->acquirerName
     * @param string          $acquirerAffiliationCode Initialization value for $this->acquirerAffiliationCode
     * @param string          $acquirerTid             Initialization value for $this->acquirerTid
     * @param string          $acquirerNsu             Initialization value for $this->acquirerNsu
     * @param string          $acquirerAuthCode        Initialization value for $this->acquirerAuthCode
     * @param string          $operationType           Initialization value for $this->operationType
     * @param GetCardResponse $card                    Initialization value for $this->card
     * @param string          $acquirerMessage         Initialization value for $this->acquirerMessage
     * @param string          $acquirerReturnCode      Initialization value for $this->acquirerReturnCode
     * @param integer         $installments            Initialization value for $this->installments
     * @param string          $threedAuthenticationUrl Initialization value for $this->threedAuthenticationUrl
     * @param string          $fundingSource           Initialization value for $this->fundingSource
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->statementDescriptor     = func_get_arg(0);
            $this->acquirerName            = func_get_arg(1);
            $this->acquirerAffiliationCode = func_get_arg(2);
            $this->acquirerTid             = func_get_arg(3);
            $this->acquirerNsu             = func_get_arg(4);
            $this->acquirerAuthCode        = func_get_arg(5);
            $this->operationType           = func_get_arg(6);
            $this->card                    = func_get_arg(7);
            $this->acquirerMessage         = func_get_arg(8);
            $this->acquirerReturnCode      = func_get_arg(9);
            $this->installments            = func_get_arg(10);
            $this->threedAuthenticationUrl = func_get_arg(11);
            $this->fundingSource           = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['statement_descriptor']      = $this->statementDescriptor;
        $json['acquirer_name']             = $this->acquirerName;
        $json['acquirer_affiliation_code'] = $this->acquirerAffiliationCode;
        $json['acquirer_tid']              = $this->acquirerTid;
        $json['acquirer_nsu']              = $this->acquirerNsu;
        $json['acquirer_auth_code']        = $this->acquirerAuthCode;
        $json['operation_type']            = $this->operationType;
        $json['card']                      = $this->card;
        $json['acquirer_message']          = $this->acquirerMessage;
        $json['acquirer_return_code']      = $this->acquirerReturnCode;
        $json['installments']              = $this->installments;
        $json['threed_authentication_url'] = $this->threedAuthenticationUrl;
        $json['funding_source']            = $this->fundingSource;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}
