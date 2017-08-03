<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Payment data
 */
class CreatePaymentRequest implements JsonSerializable
{
    /**
     * Payment method
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Settings for credit card payment
     * @required
     * @maps credit_card
     * @var CreateCreditCardPaymentRequest $creditCard public property
     */
    public $creditCard;

    /**
     * Settings for boleto payment
     * @required
     * @var CreateBoletoPaymentRequest $boleto public property
     */
    public $boleto;

    /**
     * Currency. Must be informed using 3 characters
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Settings for voucher payment
     * @required
     * @var CreateVoucherPaymentRequest $voucher public property
     */
    public $voucher;

    /**
     * Settings for bank transfer payment
     * @maps bank_transfer
     * @var CreateBankTransferPaymentRequest|null $bankTransfer public property
     */
    public $bankTransfer;

    /**
     * Gateway affiliation code
     * @maps gateway_affiliation_id
     * @var string|null $gatewayAffiliationId public property
     */
    public $gatewayAffiliationId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                           $paymentMethod        Initialization value for $this->paymentMethod
     * @param CreateCreditCardPaymentRequest   $creditCard           Initialization value for $this->creditCard
     * @param CreateBoletoPaymentRequest       $boleto               Initialization value for $this->boleto
     * @param string                           $currency             Initialization value for $this->currency
     * @param CreateVoucherPaymentRequest      $voucher              Initialization value for $this->voucher
     * @param CreateBankTransferPaymentRequest $bankTransfer         Initialization value for $this->bankTransfer
     * @param string                           $gatewayAffiliationId Initialization value for $this-
     *                                                                 >gatewayAffiliationId
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->paymentMethod        = func_get_arg(0);
            $this->creditCard           = func_get_arg(1);
            $this->boleto               = func_get_arg(2);
            $this->currency             = func_get_arg(3);
            $this->voucher              = func_get_arg(4);
            $this->bankTransfer         = func_get_arg(5);
            $this->gatewayAffiliationId = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['payment_method']         = $this->paymentMethod;
        $json['credit_card']            = $this->creditCard;
        $json['boleto']                 = $this->boleto;
        $json['currency']               = $this->currency;
        $json['voucher']                = $this->voucher;
        $json['bank_transfer']          = $this->bankTransfer;
        $json['gateway_affiliation_id'] = $this->gatewayAffiliationId;

        return $json;
    }
}