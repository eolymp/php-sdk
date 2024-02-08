<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/plan_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribePlanInput</code>
 */
class DescribePlanInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string plan_id = 1;</code>
     */
    protected $plan_id = '';
    /**
     * optionally, request name and description in particular locale
     *
     * Generated from protobuf field <code>string locale = 101;</code>
     */
    protected $locale = '';
    /**
     * optionally, request variants in particular currency
     *
     * Generated from protobuf field <code>string currency = 102;</code>
     */
    protected $currency = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.universe.Plan.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plan_id
     *     @type string $locale
     *           optionally, request name and description in particular locale
     *     @type string $currency
     *           optionally, request variants in particular currency
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\PlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string plan_id = 1;</code>
     * @return string
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }

    /**
     * Generated from protobuf field <code>string plan_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlanId($var)
    {
        GPBUtil::checkString($var, True);
        $this->plan_id = $var;

        return $this;
    }

    /**
     * optionally, request name and description in particular locale
     *
     * Generated from protobuf field <code>string locale = 101;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * optionally, request name and description in particular locale
     *
     * Generated from protobuf field <code>string locale = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * optionally, request variants in particular currency
     *
     * Generated from protobuf field <code>string currency = 102;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * optionally, request variants in particular currency
     *
     * Generated from protobuf field <code>string currency = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.universe.Plan.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.universe.Plan.Extra extra = 1123;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Universe\Plan\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}
