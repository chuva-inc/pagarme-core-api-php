<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetAntifraudResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps return_code
     * @var string $returnCode public property
     */
    public $returnCode;

    /**
     * @todo Write general description for this property
     * @required
     * @maps return_message
     * @var string $returnMessage public property
     */
    public $returnMessage;

    /**
     * @todo Write general description for this property
     * @required
     * @maps provider_name
     * @var string $providerName public property
     */
    public $providerName;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $score public property
     */
    public $score;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $status        Initialization value for $this->status
     * @param string $returnCode    Initialization value for $this->returnCode
     * @param string $returnMessage Initialization value for $this->returnMessage
     * @param string $providerName  Initialization value for $this->providerName
     * @param string $score         Initialization value for $this->score
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->status        = func_get_arg(0);
            $this->returnCode    = func_get_arg(1);
            $this->returnMessage = func_get_arg(2);
            $this->providerName  = func_get_arg(3);
            $this->score         = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['status']         = $this->status;
        $json['return_code']    = $this->returnCode;
        $json['return_message'] = $this->returnMessage;
        $json['provider_name']  = $this->providerName;
        $json['score']          = $this->score;

        return $json;
    }
}
