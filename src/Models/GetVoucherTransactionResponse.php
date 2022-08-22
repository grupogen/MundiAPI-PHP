<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Response for voucher transactions
 *
 * @discriminator transaction_type
 * @discriminatorType voucher
 */
class GetVoucherTransactionResponse extends GetTransactionResponse implements JsonSerializable
{
    /**
     * Text that will appear on the voucher's statement
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
     * Acquirer affiliation code
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
     * acquirer_message
     * @required
     * @maps acquirer_message
     * @var string $acquirerMessage public property
     */
    public $acquirerMessage;

    /**
     * Acquirer return code
     * @required
     * @maps acquirer_return_code
     * @var string $acquirerReturnCode public property
     */
    public $acquirerReturnCode;

    /**
     * Operation type
     * @required
     * @maps operation_type
     * @var string $operationType public property
     */
    public $operationType;

    /**
     * Card data
     * @required
     * @var \MundiAPILib\Models\GetCardResponse $card public property
     */
    public $card;

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $statementDescriptor     Initialization value for $this->statementDescriptor
     * @param string          $acquirerName            Initialization value for $this->acquirerName
     * @param string          $acquirerAffiliationCode Initialization value for $this->acquirerAffiliationCode
     * @param string          $acquirerTid             Initialization value for $this->acquirerTid
     * @param string          $acquirerNsu             Initialization value for $this->acquirerNsu
     * @param string          $acquirerAuthCode        Initialization value for $this->acquirerAuthCode
     * @param string          $acquirerMessage         Initialization value for $this->acquirerMessage
     * @param string          $acquirerReturnCode      Initialization value for $this->acquirerReturnCode
     * @param string          $operationType           Initialization value for $this->operationType
     * @param GetCardResponse $card                    Initialization value for $this->card
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->statementDescriptor     = func_get_arg(0);
            $this->acquirerName            = func_get_arg(1);
            $this->acquirerAffiliationCode = func_get_arg(2);
            $this->acquirerTid             = func_get_arg(3);
            $this->acquirerNsu             = func_get_arg(4);
            $this->acquirerAuthCode        = func_get_arg(5);
            $this->acquirerMessage         = func_get_arg(6);
            $this->acquirerReturnCode      = func_get_arg(7);
            $this->operationType           = func_get_arg(8);
            $this->card                    = func_get_arg(9);
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
        $json['acquirer_message']          = $this->acquirerMessage;
        $json['acquirer_return_code']      = $this->acquirerReturnCode;
        $json['operation_type']            = $this->operationType;
        $json['card']                      = $this->card;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}
