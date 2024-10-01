<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/notify/notification_service.proto

namespace Eolymp\Notify;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.notify.DescribeNotificationConfigOutput</code>
 */
class DescribeNotificationConfigOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string email_subscriptions = 2;</code>
     */
    private $email_subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $email_subscriptions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Notify\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string email_subscriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmailSubscriptions()
    {
        return $this->email_subscriptions;
    }

    /**
     * Generated from protobuf field <code>repeated string email_subscriptions = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmailSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->email_subscriptions = $arr;

        return $this;
    }

}
