<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/resolver/resolver.proto

namespace Eolymp\Resolver\Authorization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.resolver.Authorization.OAuth2</code>
 */
class OAuth2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 1;</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string token_endpoint = 2;</code>
     */
    protected $token_endpoint = '';
    /**
     * Generated from protobuf field <code>string authorize_endpoint = 3;</code>
     */
    protected $authorize_endpoint = '';
    /**
     * Generated from protobuf field <code>string userinfo_endpoint = 4;</code>
     */
    protected $userinfo_endpoint = '';
    /**
     * Generated from protobuf field <code>string signout_endpoint = 5;</code>
     */
    protected $signout_endpoint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type string $token_endpoint
     *     @type string $authorize_endpoint
     *     @type string $userinfo_endpoint
     *     @type string $signout_endpoint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Resolver\Resolver::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client_id = 1;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_endpoint = 2;</code>
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->token_endpoint;
    }

    /**
     * Generated from protobuf field <code>string token_endpoint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string authorize_endpoint = 3;</code>
     * @return string
     */
    public function getAuthorizeEndpoint()
    {
        return $this->authorize_endpoint;
    }

    /**
     * Generated from protobuf field <code>string authorize_endpoint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizeEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorize_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string userinfo_endpoint = 4;</code>
     * @return string
     */
    public function getUserinfoEndpoint()
    {
        return $this->userinfo_endpoint;
    }

    /**
     * Generated from protobuf field <code>string userinfo_endpoint = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserinfoEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->userinfo_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signout_endpoint = 5;</code>
     * @return string
     */
    public function getSignoutEndpoint()
    {
        return $this->signout_endpoint;
    }

    /**
     * Generated from protobuf field <code>string signout_endpoint = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSignoutEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->signout_endpoint = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OAuth2::class, \Eolymp\Resolver\Authorization_OAuth2::class);
