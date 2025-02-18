<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Payer's bank details.
 */
class GetPixBankAccountResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps bank_name
     * @var string|null $bankName public property
     */
    public $bankName;

    /**
     * @todo Write general description for this property
     * @var string|null $ispb public property
     */
    public $ispb;

    /**
     * @todo Write general description for this property
     * @maps branch_code
     * @var string|null $branchCode public property
     */
    public $branchCode;

    /**
     * @todo Write general description for this property
     * @maps account_number
     * @var string|null $accountNumber public property
     */
    public $accountNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $bankName      Initialization value for $this->bankName
     * @param string $ispb          Initialization value for $this->ispb
     * @param string $branchCode    Initialization value for $this->branchCode
     * @param string $accountNumber Initialization value for $this->accountNumber
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->bankName      = func_get_arg(0);
            $this->ispb          = func_get_arg(1);
            $this->branchCode    = func_get_arg(2);
            $this->accountNumber = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['bank_name']      = $this->bankName;
        $json['ispb']           = $this->ispb;
        $json['branch_code']    = $this->branchCode;
        $json['account_number'] = $this->accountNumber;

        return $json;
    }
}
