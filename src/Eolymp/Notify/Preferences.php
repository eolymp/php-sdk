<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/notify/preferences.proto

namespace Eolymp\Notify;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.notify.Preferences</code>
 */
class Preferences extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.notify.Preferences.Subscription subscriptions = 10;</code>
     */
    private $subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Notify\Preferences\Subscription>|\Google\Protobuf\Internal\RepeatedField $subscriptions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Notify\Preferences::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.notify.Preferences.Subscription subscriptions = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.notify.Preferences.Subscription subscriptions = 10;</code>
     * @param array<\Eolymp\Notify\Preferences\Subscription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Notify\Preferences\Subscription::class);
        $this->subscriptions = $arr;

        return $this;
    }

}

