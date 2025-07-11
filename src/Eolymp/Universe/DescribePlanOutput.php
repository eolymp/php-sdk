<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/universe/plan_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribePlanOutput</code>
 */
class DescribePlanOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.universe.Plan plan = 1;</code>
     */
    protected $plan = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Universe\Plan $plan
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\PlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Plan plan = 1;</code>
     * @return \Eolymp\Universe\Plan|null
     */
    public function getPlan()
    {
        return $this->plan;
    }

    public function hasPlan()
    {
        return isset($this->plan);
    }

    public function clearPlan()
    {
        unset($this->plan);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Plan plan = 1;</code>
     * @param \Eolymp\Universe\Plan $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Plan::class);
        $this->plan = $var;

        return $this;
    }

}

