<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.IntrospectTokenOutput</code>
 */
class IntrospectTokenOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool active = 1;</code>
     */
    protected $active = false;
    /**
     * Generated from protobuf field <code>string token = 2;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>string type = 3;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     */
    protected $expires_at = null;
    /**
     * Generated from protobuf field <code>repeated string scopes = 5;</code>
     */
    private $scopes;
    /**
     * Generated from protobuf field <code>string user_id = 100;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string username = 101;</code>
     */
    protected $username = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $active
     *     @type string $token
     *     @type string $type
     *     @type \Google\Protobuf\Timestamp $expires_at
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $scopes
     *     @type string $user_id
     *     @type string $username
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Cognito::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool active = 1;</code>
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Generated from protobuf field <code>bool active = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setActive($var)
    {
        GPBUtil::checkBool($var);
        $this->active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiresAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expires_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 100;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 101;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

}

