<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/events.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.UserChangedEvent</code>
 */
class UserChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.cognito.User before = 1;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.cognito.User after = 2;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Cognito\User $before
     *     @type \Eolymp\Cognito\User $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.cognito.User before = 1;</code>
     * @return \Eolymp\Cognito\User
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Generated from protobuf field <code>.eolymp.cognito.User before = 1;</code>
     * @param \Eolymp\Cognito\User $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Cognito\User::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.cognito.User after = 2;</code>
     * @return \Eolymp\Cognito\User
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * Generated from protobuf field <code>.eolymp.cognito.User after = 2;</code>
     * @param \Eolymp\Cognito\User $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Cognito\User::class);
        $this->after = $var;

        return $this;
    }

}
