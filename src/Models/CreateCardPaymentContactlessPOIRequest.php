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
class CreateCardPaymentContactlessPOIRequest implements JsonSerializable
{
    /**
     * system name
     * @required
     * @maps system_name
     * @var string $systemName public property
     */
    public $systemName;

    /**
     * model
     * @required
     * @var string $model public property
     */
    public $model;

    /**
     * provider
     * @required
     * @var string $provider public property
     */
    public $provider;

    /**
     * serial number
     * @required
     * @maps serial_number
     * @var string $serialNumber public property
     */
    public $serialNumber;

    /**
     * version number
     * @required
     * @maps version_number
     * @var string $versionNumber public property
     */
    public $versionNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $systemName    Initialization value for $this->systemName
     * @param string $model         Initialization value for $this->model
     * @param string $provider      Initialization value for $this->provider
     * @param string $serialNumber  Initialization value for $this->serialNumber
     * @param string $versionNumber Initialization value for $this->versionNumber
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->systemName    = func_get_arg(0);
            $this->model         = func_get_arg(1);
            $this->provider      = func_get_arg(2);
            $this->serialNumber  = func_get_arg(3);
            $this->versionNumber = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['system_name']    = $this->systemName;
        $json['model']          = $this->model;
        $json['provider']       = $this->provider;
        $json['serial_number']  = $this->serialNumber;
        $json['version_number'] = $this->versionNumber;

        return $json;
    }
}
