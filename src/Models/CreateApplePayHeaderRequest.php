<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *The ApplePay header request
 */
class CreateApplePayHeaderRequest implements JsonSerializable
{
    /**
     * SHA–256 hash, Base64 string codified
     * @maps public_key_hash
     * @var string|null $publicKeyHash public property
     */
    public $publicKeyHash;

    /**
     * X.509 encoded key bytes, Base64 encoded as a string
     * @required
     * @maps ephemeral_public_key
     * @var string $ephemeralPublicKey public property
     */
    public $ephemeralPublicKey;

    /**
     * Transaction identifier, generated on Device
     * @maps transaction_id
     * @var string|null $transactionId public property
     */
    public $transactionId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $publicKeyHash      Initialization value for $this->publicKeyHash
     * @param string $ephemeralPublicKey Initialization value for $this->ephemeralPublicKey
     * @param string $transactionId      Initialization value for $this->transactionId
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->publicKeyHash      = func_get_arg(0);
            $this->ephemeralPublicKey = func_get_arg(1);
            $this->transactionId      = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['public_key_hash']      = $this->publicKeyHash;
        $json['ephemeral_public_key'] = $this->ephemeralPublicKey;
        $json['transaction_id']       = $this->transactionId;

        return $json;
    }
}
