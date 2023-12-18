<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/billing_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.UpdateBillingInformationInput</code>
 */
class UpdateBillingInformationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.universe.Billing.Information info = 1;</code>
     */
    protected $info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Universe\Billing\Information $info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\BillingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Billing.Information info = 1;</code>
     * @return \Eolymp\Universe\Billing\Information
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Billing.Information info = 1;</code>
     * @param \Eolymp\Universe\Billing\Information $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Billing_Information::class);
        $this->info = $var;

        return $this;
    }

}

