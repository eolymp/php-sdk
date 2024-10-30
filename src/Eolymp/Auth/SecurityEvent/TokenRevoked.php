<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/security_event.proto

namespace Eolymp\Auth\SecurityEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.SecurityEvent.TokenRevoked</code>
 */
class TokenRevoked extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string issuer = 1;</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    protected $subject = '';
    /**
     * access_token or refresh_token
     *
     * Generated from protobuf field <code>string token_type = 3;</code>
     */
    protected $token_type = '';
    /**
     * Generated from protobuf field <code>string token_hash_md5 = 4;</code>
     */
    protected $token_hash_md5 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *     @type string $subject
     *     @type string $token_type
     *           access_token or refresh_token
     *     @type string $token_hash_md5
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\SecurityEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
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
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
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
     * access_token or refresh_token
     *
     * Generated from protobuf field <code>string token_type = 3;</code>
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * access_token or refresh_token
     *
     * Generated from protobuf field <code>string token_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenType($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_hash_md5 = 4;</code>
     * @return string
     */
    public function getTokenHashMd5()
    {
        return $this->token_hash_md5;
    }

    /**
     * Generated from protobuf field <code>string token_hash_md5 = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenHashMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_hash_md5 = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TokenRevoked::class, \Eolymp\Auth\SecurityEvent_TokenRevoked::class);

