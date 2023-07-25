<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/configuration_idp.proto

namespace Eolymp\Community\IdentityProvider;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.IdentityProvider.OIDC</code>
 */
class OIDC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 10;</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string client_secret = 11;</code>
     */
    protected $client_secret = '';
    /**
     * Generated from protobuf field <code>string issuer = 20;</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string authorize_endpoint = 21;</code>
     */
    protected $authorize_endpoint = '';
    /**
     * Generated from protobuf field <code>string token_endpoint = 22;</code>
     */
    protected $token_endpoint = '';
    /**
     * Generated from protobuf field <code>string keys_endpoint = 23;</code>
     */
    protected $keys_endpoint = '';
    /**
     * Generated from protobuf field <code>string userinfo_endpoint = 24;</code>
     */
    protected $userinfo_endpoint = '';
    /**
     * Generated from protobuf field <code>string redirect_uri = 25;</code>
     */
    protected $redirect_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type string $client_secret
     *     @type string $issuer
     *     @type string $authorize_endpoint
     *     @type string $token_endpoint
     *     @type string $keys_endpoint
     *     @type string $userinfo_endpoint
     *     @type string $redirect_uri
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\ConfigurationIdp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client_id = 10;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 10;</code>
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
     * Generated from protobuf field <code>string client_secret = 11;</code>
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Generated from protobuf field <code>string client_secret = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setClientSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string issuer = 20;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 20;</code>
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
     * Generated from protobuf field <code>string authorize_endpoint = 21;</code>
     * @return string
     */
    public function getAuthorizeEndpoint()
    {
        return $this->authorize_endpoint;
    }

    /**
     * Generated from protobuf field <code>string authorize_endpoint = 21;</code>
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
     * Generated from protobuf field <code>string token_endpoint = 22;</code>
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->token_endpoint;
    }

    /**
     * Generated from protobuf field <code>string token_endpoint = 22;</code>
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
     * Generated from protobuf field <code>string keys_endpoint = 23;</code>
     * @return string
     */
    public function getKeysEndpoint()
    {
        return $this->keys_endpoint;
    }

    /**
     * Generated from protobuf field <code>string keys_endpoint = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setKeysEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->keys_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string userinfo_endpoint = 24;</code>
     * @return string
     */
    public function getUserinfoEndpoint()
    {
        return $this->userinfo_endpoint;
    }

    /**
     * Generated from protobuf field <code>string userinfo_endpoint = 24;</code>
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
     * Generated from protobuf field <code>string redirect_uri = 25;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Generated from protobuf field <code>string redirect_uri = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OIDC::class, \Eolymp\Community\IdentityProvider_OIDC::class);

