<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/security_event_service.proto

namespace Eolymp\Auth\SecurityEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.SecurityEvent.Subject</code>
 */
class Subject extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string format = 1;</code>
     */
    protected $format = '';
    /**
     * Generated from protobuf field <code>string id = 5;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string iss = 2;</code>
     */
    protected $iss = '';
    /**
     * Generated from protobuf field <code>string sub = 3;</code>
     */
    protected $sub = '';
    /**
     * Generated from protobuf field <code>string email = 4;</code>
     */
    protected $email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $format
     *     @type string $id
     *     @type string $iss
     *     @type string $sub
     *     @type string $email
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\SecurityEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Generated from protobuf field <code>string format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 5;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iss = 2;</code>
     * @return string
     */
    public function getIss()
    {
        return $this->iss;
    }

    /**
     * Generated from protobuf field <code>string iss = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIss($var)
    {
        GPBUtil::checkString($var, True);
        $this->iss = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sub = 3;</code>
     * @return string
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Generated from protobuf field <code>string sub = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSub($var)
    {
        GPBUtil::checkString($var, True);
        $this->sub = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 4;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Subject::class, \Eolymp\Auth\SecurityEvent_Subject::class);

