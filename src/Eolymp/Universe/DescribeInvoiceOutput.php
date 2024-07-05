<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/billing_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribeInvoiceOutput</code>
 */
class DescribeInvoiceOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.commerce.Invoice invoice = 1;</code>
     */
    protected $invoice = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Commerce\Invoice $invoice
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\BillingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.commerce.Invoice invoice = 1;</code>
     * @return \Eolymp\Commerce\Invoice|null
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    public function hasInvoice()
    {
        return isset($this->invoice);
    }

    public function clearInvoice()
    {
        unset($this->invoice);
    }

    /**
     * Generated from protobuf field <code>.eolymp.commerce.Invoice invoice = 1;</code>
     * @param \Eolymp\Commerce\Invoice $var
     * @return $this
     */
    public function setInvoice($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Commerce\Invoice::class);
        $this->invoice = $var;

        return $this;
    }

}

