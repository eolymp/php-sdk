<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/customer_service.proto

namespace Eolymp\Commerce;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.commerce.CreateCustomerInput</code>
 */
class CreateCustomerInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.commerce.Customer customer = 1;</code>
     */
    protected $customer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Commerce\Customer $customer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Commerce\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.commerce.Customer customer = 1;</code>
     * @return \Eolymp\Commerce\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Generated from protobuf field <code>.eolymp.commerce.Customer customer = 1;</code>
     * @param \Eolymp\Commerce\Customer $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Commerce\Customer::class);
        $this->customer = $var;

        return $this;
    }

}

