<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.ConfigureActiveSubscriptionOutput</code>
 */
class ConfigureActiveSubscriptionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * if subscription requires payment, this field is populated with url to complete checkout
     *
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
     *           if subscription requires payment, this field is populated with url to complete checkout
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * if subscription requires payment, this field is populated with url to complete checkout
     *
     * Generated from protobuf field <code>string checkout_url = 1;</code>
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkout_url;
    }

    /**
     * if subscription requires payment, this field is populated with url to complete checkout
     *
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

