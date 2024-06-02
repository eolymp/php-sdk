<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/mailing/email_subscription_service.proto

namespace Eolymp\Mailing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.mailing.DescribeEmailSubscriptionOutput</code>
 */
class DescribeEmailSubscriptionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.mailing.EmailType subscriptions = 1;</code>
     */
    private $subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $subscriptions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Mailing\EmailSubscriptionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.mailing.EmailType subscriptions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.mailing.EmailType subscriptions = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Mailing\EmailType::class);
        $this->subscriptions = $arr;

        return $this;
    }

}

