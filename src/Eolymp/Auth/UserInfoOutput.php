<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/oauth2_service.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.UserInfoOutput</code>
 */
class UserInfoOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.auth.Claims claims = 10;</code>
     */
    protected $claims = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Auth\Claims $claims
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\Oauth2Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.auth.Claims claims = 10;</code>
     * @return \Eolymp\Auth\Claims
     */
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * Generated from protobuf field <code>.eolymp.auth.Claims claims = 10;</code>
     * @param \Eolymp\Auth\Claims $var
     * @return $this
     */
    public function setClaims($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Auth\Claims::class);
        $this->claims = $var;

        return $this;
    }

}
