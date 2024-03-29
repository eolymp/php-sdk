<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/billing_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.CreatePortalLinkInput</code>
 */
class CreatePortalLinkInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string flow = 1;</code>
     */
    protected $flow = '';
    /**
     * Generated from protobuf field <code>string back_url = 2;</code>
     */
    protected $back_url = '';
    /**
     * Generated from protobuf field <code>string return_url = 3;</code>
     */
    protected $return_url = '';
    /**
     * Generated from protobuf field <code>string complete_url = 4;</code>
     */
    protected $complete_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $flow
     *     @type string $back_url
     *     @type string $return_url
     *     @type string $complete_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\BillingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string flow = 1;</code>
     * @return string
     */
    public function getFlow()
    {
        return $this->flow;
    }

    /**
     * Generated from protobuf field <code>string flow = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFlow($var)
    {
        GPBUtil::checkString($var, True);
        $this->flow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string back_url = 2;</code>
     * @return string
     */
    public function getBackUrl()
    {
        return $this->back_url;
    }

    /**
     * Generated from protobuf field <code>string back_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->back_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string return_url = 3;</code>
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }

    /**
     * Generated from protobuf field <code>string return_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReturnUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->return_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string complete_url = 4;</code>
     * @return string
     */
    public function getCompleteUrl()
    {
        return $this->complete_url;
    }

    /**
     * Generated from protobuf field <code>string complete_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCompleteUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->complete_url = $var;

        return $this;
    }

}

