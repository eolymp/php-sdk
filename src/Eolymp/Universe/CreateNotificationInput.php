<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/notification_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.CreateNotificationInput</code>
 */
class CreateNotificationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.universe.Notification notification = 1;</code>
     */
    protected $notification = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Universe\Notification $notification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Notification notification = 1;</code>
     * @return \Eolymp\Universe\Notification|null
     */
    public function getNotification()
    {
        return $this->notification;
    }

    public function hasNotification()
    {
        return isset($this->notification);
    }

    public function clearNotification()
    {
        unset($this->notification);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Notification notification = 1;</code>
     * @param \Eolymp\Universe\Notification $var
     * @return $this
     */
    public function setNotification($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Notification::class);
        $this->notification = $var;

        return $this;
    }

}

