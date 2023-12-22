<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/invoice.proto

namespace Eolymp\Commerce\Invoice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.commerce.Invoice.TaxAmount</code>
 */
class TaxAmount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 amount = 1;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>bool inclusive = 2;</code>
     */
    protected $inclusive = false;
    /**
     * Generated from protobuf field <code>string tax_rate = 3;</code>
     */
    protected $tax_rate = '';
    /**
     * Generated from protobuf field <code>string taxability_reason = 4;</code>
     */
    protected $taxability_reason = '';
    /**
     * Generated from protobuf field <code>int32 taxable_amount = 10;</code>
     */
    protected $taxable_amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $amount
     *     @type bool $inclusive
     *     @type string $tax_rate
     *     @type string $taxability_reason
     *     @type int $taxable_amount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Commerce\Invoice::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 amount = 1;</code>
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int32 amount = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool inclusive = 2;</code>
     * @return bool
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * Generated from protobuf field <code>bool inclusive = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->inclusive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tax_rate = 3;</code>
     * @return string
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * Generated from protobuf field <code>string tax_rate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTaxRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->tax_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string taxability_reason = 4;</code>
     * @return string
     */
    public function getTaxabilityReason()
    {
        return $this->taxability_reason;
    }

    /**
     * Generated from protobuf field <code>string taxability_reason = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTaxabilityReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->taxability_reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 taxable_amount = 10;</code>
     * @return int
     */
    public function getTaxableAmount()
    {
        return $this->taxable_amount;
    }

    /**
     * Generated from protobuf field <code>int32 taxable_amount = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setTaxableAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->taxable_amount = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TaxAmount::class, \Eolymp\Commerce\Invoice_TaxAmount::class);

