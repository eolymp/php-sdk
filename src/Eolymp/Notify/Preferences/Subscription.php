<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/notify/preferences.proto

namespace Eolymp\Notify\Preferences;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.notify.Preferences.Subscription</code>
 */
class Subscription extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Generated from protobuf field <code>.eolymp.notify.Preferences.Digest digest = 2;</code>
     */
    protected $digest = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *     @type int $digest
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Notify\Preferences::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.notify.Preferences.Digest digest = 2;</code>
     * @return int
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Generated from protobuf field <code>.eolymp.notify.Preferences.Digest digest = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDigest($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Notify\Preferences\Digest::class);
        $this->digest = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Subscription::class, \Eolymp\Notify\Preferences_Subscription::class);
