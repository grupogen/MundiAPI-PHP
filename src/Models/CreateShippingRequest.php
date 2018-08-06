<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;
use MundiAPILib\Utils\DateTimeHelper;

/**
 *Shipping data
 */
class CreateShippingRequest implements JsonSerializable
{
    /**
     * Shipping amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Recipient name
     * @required
     * @maps recipient_name
     * @var string $recipientName public property
     */
    public $recipientName;

    /**
     * Recipient phone number
     * @required
     * @maps recipient_phone
     * @var string $recipientPhone public property
     */
    public $recipientPhone;

    /**
     * The id of the address that will be used for shipping
     * @required
     * @maps address_id
     * @var string $addressId public property
     */
    public $addressId;

    /**
     * Address data
     * @required
     * @var \MundiAPILib\Models\CreateAddressRequest $address public property
     */
    public $address;

    /**
     * Data máxima de entrega
     * @maps max_delivery_date
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $maxDeliveryDate public property
     */
    public $maxDeliveryDate;

    /**
     * Prazo estimado de entrega
     * @maps estimated_delivery_date
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $estimatedDeliveryDate public property
     */
    public $estimatedDeliveryDate;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer               $amount                Initialization value for $this->amount
     * @param string                $description           Initialization value for $this->description
     * @param string                $recipientName         Initialization value for $this->recipientName
     * @param string                $recipientPhone        Initialization value for $this->recipientPhone
     * @param string                $addressId             Initialization value for $this->addressId
     * @param CreateAddressRequest  $address               Initialization value for $this->address
     * @param \DateTime             $maxDeliveryDate       Initialization value for $this->maxDeliveryDate
     * @param \DateTime             $estimatedDeliveryDate Initialization value for $this->estimatedDeliveryDate
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->amount                = func_get_arg(0);
            $this->description           = func_get_arg(1);
            $this->recipientName         = func_get_arg(2);
            $this->recipientPhone        = func_get_arg(3);
            $this->addressId             = func_get_arg(4);
            $this->address               = func_get_arg(5);
            $this->maxDeliveryDate       = func_get_arg(6);
            $this->estimatedDeliveryDate = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']                  = $this->amount;
        $json['description']             = $this->description;
        $json['recipient_name']          = $this->recipientName;
        $json['recipient_phone']         = $this->recipientPhone;
        $json['address_id']              = $this->addressId;
        $json['address']                 = $this->address;
        $json['max_delivery_date']       = isset($this->maxDeliveryDate) ?
            DateTimeHelper::toRfc3339DateTime($this->maxDeliveryDate) : null;
        $json['estimated_delivery_date'] = isset($this->estimatedDeliveryDate) ?
            DateTimeHelper::toRfc3339DateTime($this->estimatedDeliveryDate) : null;

        return $json;
    }
}
