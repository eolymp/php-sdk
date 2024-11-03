<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/security_event.proto

namespace Eolymp\Auth\SecurityEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.SecurityEvent.SessionClosed</code>
 */
class SessionClosed extends \Google\Protobuf\Internal\Message
{
    /**
     * iss
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     */
    protected $issuer = '';
    /**
     * sub
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    protected $subject = '';
    /**
     * sid
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     */
    protected $session_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *           iss
     *     @type string $subject
     *           sub
     *     @type string $session_id
     *           sid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\SecurityEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * iss
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * iss
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * sub
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * sub
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * sid
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * sid
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionClosed::class, \Eolymp\Auth\SecurityEvent_SessionClosed::class);
