<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for creating a new Address
 */
class CreateAddressRequest implements JsonSerializable
{
    /**
     * Street
     * @required
     * @var string $street public property
     */
    public $street;

    /**
     * Number
     * @required
     * @var string $number public property
     */
    public $number;

    /**
     * The zip code containing only numbers. No special characters or spaces.
     * @required
     * @maps zip_code
     * @var string $zipCode public property
     */
    public $zipCode;

    /**
     * Neighborhood
     * @required
     * @var string $neighborhood public property
     */
    public $neighborhood;

    /**
     * City
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * State
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * Country. Must be entered using ISO 3166-1 alpha-2 format. See https://pt.wikipedia.org/wiki/ISO_3166-
     * 1_alfa-2
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * Complement
     * @required
     * @var string $complement public property
     */
    public $complement;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Line 1 for address
     * @required
     * @maps line_1
     * @var string $line1 public property
     */
    public $line1;

    /**
     * Line 2 for address
     * @required
     * @maps line_2
     * @var string $line2 public property
     */
    public $line2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $street       Initialization value for $this->street
     * @param string $number       Initialization value for $this->number
     * @param string $zipCode      Initialization value for $this->zipCode
     * @param string $neighborhood Initialization value for $this->neighborhood
     * @param string $city         Initialization value for $this->city
     * @param string $state        Initialization value for $this->state
     * @param string $country      Initialization value for $this->country
     * @param string $complement   Initialization value for $this->complement
     * @param array  $metadata     Initialization value for $this->metadata
     * @param string $line1        Initialization value for $this->line1
     * @param string $line2        Initialization value for $this->line2
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->street       = func_get_arg(0);
            $this->number       = func_get_arg(1);
            $this->zipCode      = func_get_arg(2);
            $this->neighborhood = func_get_arg(3);
            $this->city         = func_get_arg(4);
            $this->state        = func_get_arg(5);
            $this->country      = func_get_arg(6);
            $this->complement   = func_get_arg(7);
            $this->metadata     = func_get_arg(8);
            $this->line1        = func_get_arg(9);
            $this->line2        = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['street']       = $this->street;
        $json['number']       = $this->number;
        $json['zip_code']     = $this->zipCode;
        $json['neighborhood'] = $this->neighborhood;
        $json['city']         = $this->city;
        $json['state']        = $this->state;
        $json['country']      = $this->country;
        $json['complement']   = $this->complement;
        $json['metadata']     = $this->metadata;
        $json['line_1']       = $this->line1;
        $json['line_2']       = $this->line2;

        return $json;
    }
}
