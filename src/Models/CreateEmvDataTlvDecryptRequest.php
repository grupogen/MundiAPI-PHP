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
class CreateEmvDataTlvDecryptRequest implements JsonSerializable
{
    /**
     * Emv tag
     * @required
     * @var string $tag public property
     */
    public $tag;

    /**
     * Emv lenght
     * @required
     * @var string $lenght public property
     */
    public $lenght;

    /**
     * Emv value
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $tag    Initialization value for $this->tag
     * @param string $lenght Initialization value for $this->lenght
     * @param string $value  Initialization value for $this->value
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->tag    = func_get_arg(0);
            $this->lenght = func_get_arg(1);
            $this->value  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['tag']    = $this->tag;
        $json['lenght'] = $this->lenght;
        $json['value']  = $this->value;

        return $json;
    }
}
