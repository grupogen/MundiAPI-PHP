<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Payment data
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
     * @maps credit_card
     * @var \MundiAPILib\Models\CreateCreditCardPaymentRequest|null $creditCard public property
     */
    public $creditCard;

    /**
     * Settings for debit card payment
     * @maps debit_card
     * @var \MundiAPILib\Models\CreateDebitCardPaymentRequest|null $debitCard public property
     */
    public $debitCard;

    /**
     * Settings for boleto payment
     * @var \MundiAPILib\Models\CreateBoletoPaymentRequest|null $boleto public property
     */
    public $boleto;

    /**
     * Currency. Must be informed using 3 characters
     * @var string|null $currency public property
     */
    public $currency;

    /**
     * Settings for voucher payment
     * @var \MundiAPILib\Models\CreateVoucherPaymentRequest|null $voucher public property
     */
    public $voucher;

    /**
     * Splits
     * @var \MundiAPILib\Models\CreateSplitRequest[]|null $split public property
     */
    public $split;

    /**
     * Settings for bank transfer payment
     * @maps bank_transfer
     * @var \MundiAPILib\Models\CreateBankTransferPaymentRequest|null $bankTransfer public property
     */
    public $bankTransfer;

    /**
     * Gateway affiliation code
     * @maps gateway_affiliation_id
     * @var string|null $gatewayAffiliationId public property
     */
    public $gatewayAffiliationId;

    /**
     * The amount of the payment, in cents
     * @var integer|null $amount public property
     */
    public $amount;

    /**
     * Settings for checkout payment
     * @var \MundiAPILib\Models\CreateCheckoutPaymentRequest|null $checkout public property
     */
    public $checkout;

    /**
     * Customer Id
     * @maps customer_id
     * @var string|null $customerId public property
     */
    public $customerId;

    /**
     * Customer
     * @var \MundiAPILib\Models\CreateCustomerRequest|null $customer public property
     */
    public $customer;

    /**
     * Metadata
     * @var array|null $metadata public property
     */
    public $metadata;

    /**
     * Settings for cash payment
     * @var \MundiAPILib\Models\CreateCashPaymentRequest|null $cash public property
     */
    public $cash;

    /**
     * Settings for private label payment
     * @required
     * @maps private_label
     * @var \MundiAPILib\Models\CreatePrivateLabelPaymentRequest $privateLabel public property
     */
    public $privateLabel;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                           $paymentMethod        Initialization value for $this->paymentMethod
     * @param CreateCreditCardPaymentRequest   $creditCard           Initialization value for $this->creditCard
     * @param CreateDebitCardPaymentRequest    $debitCard            Initialization value for $this->debitCard
     * @param CreateBoletoPaymentRequest       $boleto               Initialization value for $this->boleto
     * @param string                           $currency             Initialization value for $this->currency
     * @param CreateVoucherPaymentRequest      $voucher              Initialization value for $this->voucher
     * @param array                            $split                Initialization value for $this->split
     * @param CreateBankTransferPaymentRequest $bankTransfer         Initialization value for $this->bankTransfer
     * @param string                           $gatewayAffiliationId Initialization value for $this-
     *                                                                 >gatewayAffiliationId
     * @param integer                          $amount               Initialization value for $this->amount
     * @param CreateCheckoutPaymentRequest     $checkout             Initialization value for $this->checkout
     * @param string                           $customerId           Initialization value for $this->customerId
     * @param CreateCustomerRequest            $customer             Initialization value for $this->customer
     * @param array                            $metadata             Initialization value for $this->metadata
     * @param CreateCashPaymentRequest         $cash                 Initialization value for $this->cash
     * @param CreatePrivateLabelPaymentRequest $privateLabel         Initialization value for $this->privateLabel
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->paymentMethod        = func_get_arg(0);
            $this->creditCard           = func_get_arg(1);
            $this->debitCard            = func_get_arg(2);
            $this->boleto               = func_get_arg(3);
            $this->currency             = func_get_arg(4);
            $this->voucher              = func_get_arg(5);
            $this->split                = func_get_arg(6);
            $this->bankTransfer         = func_get_arg(7);
            $this->gatewayAffiliationId = func_get_arg(8);
            $this->amount               = func_get_arg(9);
            $this->checkout             = func_get_arg(10);
            $this->customerId           = func_get_arg(11);
            $this->customer             = func_get_arg(12);
            $this->metadata             = func_get_arg(13);
            $this->cash                 = func_get_arg(14);
            $this->privateLabel         = func_get_arg(15);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['payment_method']         = $this->paymentMethod;
        $json['credit_card']            = $this->creditCard;
        $json['debit_card']             = $this->debitCard;
        $json['boleto']                 = $this->boleto;
        $json['currency']               = $this->currency;
        $json['voucher']                = $this->voucher;
        $json['split']                  = $this->split;
        $json['bank_transfer']          = $this->bankTransfer;
        $json['gateway_affiliation_id'] = $this->gatewayAffiliationId;
        $json['amount']                 = $this->amount;
        $json['checkout']               = $this->checkout;
        $json['customer_id']            = $this->customerId;
        $json['customer']               = $this->customer;
        $json['metadata']               = $this->metadata;
        $json['cash']                   = $this->cash;
        $json['private_label']          = $this->privateLabel;

        return $json;
    }
}
