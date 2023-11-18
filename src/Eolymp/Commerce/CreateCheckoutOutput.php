<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/checkout_service.proto

namespace Eolymp\Commerce;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.commerce.CreateCheckoutOutput</code>
 */
class CreateCheckoutOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string checkout_url = 1;</code>
     */
    protected $checkout_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $checkout_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Commerce\CheckoutService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string checkout_url = 1;</code>
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkout_url;
    }

    /**
     * Generated from protobuf field <code>string checkout_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckoutUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->checkout_url = $var;

        return $this;
    }

}

