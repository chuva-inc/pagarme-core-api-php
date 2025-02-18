<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Request for updating a Recipient
 */
class UpdateRecipientRequest implements JsonSerializable
{
    /**
     * Name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Email
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name        Initialization value for $this->name
     * @param string $email       Initialization value for $this->email
     * @param string $description Initialization value for $this->description
     * @param string $type        Initialization value for $this->type
     * @param string $status      Initialization value for $this->status
     * @param array  $metadata    Initialization value for $this->metadata
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->email       = func_get_arg(1);
            $this->description = func_get_arg(2);
            $this->type        = func_get_arg(3);
            $this->status      = func_get_arg(4);
            $this->metadata    = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']        = $this->name;
        $json['email']       = $this->email;
        $json['description'] = $this->description;
        $json['type']        = $this->type;
        $json['status']      = $this->status;
        $json['metadata']    = $this->metadata;

        return $json;
    }
}
