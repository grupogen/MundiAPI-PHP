<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class UpdateOrderStatusRequest implements JsonSerializable
{
    /**
     * Order status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $status Initialization value for $this->status
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->status = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['status'] = $this->status;

        return $json;
    }
}
