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
class CreateAntifraudRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\CreateClearSaleRequest $clearsale public property
     */
    public $clearsale;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                 $type      Initialization value for $this->type
     * @param CreateClearSaleRequest $clearsale Initialization value for $this->clearsale
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type      = func_get_arg(0);
            $this->clearsale = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['type']      = $this->type;
        $json['clearsale'] = $this->clearsale;

        return $json;
    }
}
