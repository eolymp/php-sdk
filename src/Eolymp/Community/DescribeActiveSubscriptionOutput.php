<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeActiveSubscriptionOutput</code>
 */
class DescribeActiveSubscriptionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.community.Subscription subscription = 1;</code>
     */
    protected $subscription = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Community\Subscription $subscription
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Subscription subscription = 1;</code>
     * @return \Eolymp\Community\Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Subscription subscription = 1;</code>
     * @param \Eolymp\Community\Subscription $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Subscription::class);
        $this->subscription = $var;

        return $this;
    }

}

