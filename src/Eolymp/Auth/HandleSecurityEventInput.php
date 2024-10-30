<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/security_event_service.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.HandleSecurityEventInput</code>
 */
class HandleSecurityEventInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string signed_security_event = 1;</code>
     */
    protected $signed_security_event = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signed_security_event
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\SecurityEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string signed_security_event = 1;</code>
     * @return string
     */
    public function getSignedSecurityEvent()
    {
        return $this->signed_security_event;
    }

    /**
     * Generated from protobuf field <code>string signed_security_event = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignedSecurityEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->signed_security_event = $var;

        return $this;
    }

}

