<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/product_service.proto

namespace Eolymp\Commerce;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.commerce.ListProductPricesInput</code>
 */
class ListProductPricesInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string product_id = 1;</code>
     */
    protected $product_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $product_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Commerce\ProductService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string product_id = 1;</code>
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Generated from protobuf field <code>string product_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_id = $var;

        return $this;
    }

}

