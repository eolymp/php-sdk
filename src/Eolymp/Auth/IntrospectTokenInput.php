<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/oauth2_service.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.IntrospectTokenInput</code>
 */
class IntrospectTokenInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\Oauth2Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

