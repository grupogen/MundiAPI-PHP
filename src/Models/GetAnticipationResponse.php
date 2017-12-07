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
 * Anticipation
 */
class GetAnticipationResponse implements JsonSerializable
{
    /**
     * Id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Requested amount
     * @required
     * @maps requested_amount
     * @var integer $requestedAmount public property
     */
    public $requestedAmount;

    /**
     * Approved amount
     * @required
     * @maps approved_amount
     * @var integer $approvedAmount public property
     */
    public $approvedAmount;

    /**
     * Recipient
     * @required
     * @var \MundiAPILib\Models\GetRecipientResponse $recipient public property
     */
    public $recipient;

    /**
     * Anticipation id on the gateway
     * @required
     * @var string $pgid public property
     */
    public $pgid;

    /**
     * Creation date
     * @required
     * @maps created_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * Last update date
     * @required
     * @maps updated_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * Payment date
     * @required
     * @maps payment_date
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $paymentDate public property
     */
    public $paymentDate;

    /**
     * Status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Timeframe
     * @required
     * @var string $timeframe public property
     */
    public $timeframe;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                $id              Initialization value for $this->id
     * @param integer               $requestedAmount Initialization value for $this->requestedAmount
     * @param integer               $approvedAmount  Initialization value for $this->approvedAmount
     * @param GetRecipientResponse  $recipient       Initialization value for $this->recipient
     * @param string                $pgid            Initialization value for $this->pgid
     * @param \DateTime             $createdAt       Initialization value for $this->createdAt
     * @param \DateTime             $updatedAt       Initialization value for $this->updatedAt
     * @param \DateTime             $paymentDate     Initialization value for $this->paymentDate
     * @param string                $status          Initialization value for $this->status
     * @param string                $timeframe       Initialization value for $this->timeframe
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->id              = func_get_arg(0);
            $this->requestedAmount = func_get_arg(1);
            $this->approvedAmount  = func_get_arg(2);
            $this->recipient       = func_get_arg(3);
            $this->pgid            = func_get_arg(4);
            $this->createdAt       = func_get_arg(5);
            $this->updatedAt       = func_get_arg(6);
            $this->paymentDate     = func_get_arg(7);
            $this->status          = func_get_arg(8);
            $this->timeframe       = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']               = $this->id;
        $json['requested_amount'] = $this->requestedAmount;
        $json['approved_amount']  = $this->approvedAmount;
        $json['recipient']        = $this->recipient;
        $json['pgid']             = $this->pgid;
        $json['created_at']       = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']       = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['payment_date']     = DateTimeHelper::toRfc3339DateTime($this->paymentDate);
        $json['status']           = $this->status;
        $json['timeframe']        = $this->timeframe;

        return $json;
    }
}
