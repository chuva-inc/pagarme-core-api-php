<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for creating a recipient
 */
class CreateRecipientRequest implements JsonSerializable
{
    /**
     * Recipient name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Recipient email
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * Recipient description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Recipient document number
     * @required
     * @var string $document public property
     */
    public $document;

    /**
     * Recipient type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Request for creating a bank account
     * @required
     * @maps default_bank_account
     * @var \PagarmeCoreApiLib\Models\CreateBankAccountRequest $defaultBankAccount public property
     */
    public $defaultBankAccount;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Informações de transferência do recebedor
     * @maps transfer_settings
     * @var \PagarmeCoreApiLib\Models\CreateTransferSettingsRequest|null $transferSettings public property
     */
    public $transferSettings;

    /**
     * Recipient code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Payment mode
     * @required
     * @maps payment_mode
     * @var string $paymentMode public property
     */
    public $paymentMode;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                        $name               Initialization value for $this->name
     * @param string                        $email              Initialization value for $this->email
     * @param string                        $description        Initialization value for $this->description
     * @param string                        $document           Initialization value for $this->document
     * @param string                        $type               Initialization value for $this->type
     * @param CreateBankAccountRequest      $defaultBankAccount Initialization value for $this->defaultBankAccount
     * @param array                         $metadata           Initialization value for $this->metadata
     * @param CreateTransferSettingsRequest $transferSettings   Initialization value for $this->transferSettings
     * @param string                        $code               Initialization value for $this->code
     * @param string                        $paymentMode        Initialization value for $this->paymentMode
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->name               = func_get_arg(0);
            $this->email              = func_get_arg(1);
            $this->description        = func_get_arg(2);
            $this->document           = func_get_arg(3);
            $this->type               = func_get_arg(4);
            $this->defaultBankAccount = func_get_arg(5);
            $this->metadata           = func_get_arg(6);
            $this->transferSettings   = func_get_arg(7);
            $this->code               = func_get_arg(8);
            $this->paymentMode        = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']                 = $this->name;
        $json['email']                = $this->email;
        $json['description']          = $this->description;
        $json['document']             = $this->document;
        $json['type']                 = $this->type;
        $json['default_bank_account'] = $this->defaultBankAccount;
        $json['metadata']             = $this->metadata;
        $json['transfer_settings']    = $this->transferSettings;
        $json['code']                 = $this->code;
        $json['payment_mode']         = $this->paymentMode;

        return $json;
    }
}
