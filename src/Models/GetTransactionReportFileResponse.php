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
 * @todo Write general description for this model
 */
class GetTransactionReportFileResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $date public property
     */
    public $date;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $name Initialization value for $this->name
     * @param \DateTime $date Initialization value for $this->date
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name = func_get_arg(0);
            $this->date = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name'] = $this->name;
        $json['date'] = DateTimeHelper::toRfc3339DateTime($this->date);

        return $json;
    }
}
