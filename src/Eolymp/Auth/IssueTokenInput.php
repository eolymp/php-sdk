<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/oauth2_service.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.IssueTokenInput</code>
 */
class IssueTokenInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.auth.IssueTokenInput.GrantType grant_type = 1;</code>
     */
    protected $grant_type = 0;
    /**
     * username for password grant type
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * password for password grant type
     *
     * Generated from protobuf field <code>string password = 3;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>string client_id = 4;</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string client_secret = 5;</code>
     */
    protected $client_secret = '';
    /**
     * code for authorization_code grant type
     *
     * Generated from protobuf field <code>string code = 6;</code>
     */
    protected $code = '';
    /**
     * code verifier for authorization_code grant type
     *
     * Generated from protobuf field <code>string code_verifier = 7;</code>
     */
    protected $code_verifier = '';
    /**
     * Generated from protobuf field <code>string scope = 8;</code>
     */
    protected $scope = '';
    /**
     * refresh_token for refresh_token grant type
     *
     * Generated from protobuf field <code>string refresh_token = 9;</code>
     */
    protected $refresh_token = '';
    /**
     * Generated from protobuf field <code>string redirect_uri = 10;</code>
     */
    protected $redirect_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $grant_type
     *     @type string $username
     *           username for password grant type
     *     @type string $password
     *           password for password grant type
     *     @type string $client_id
     *     @type string $client_secret
     *     @type string $code
     *           code for authorization_code grant type
     *     @type string $code_verifier
     *           code verifier for authorization_code grant type
     *     @type string $scope
     *     @type string $refresh_token
     *           refresh_token for refresh_token grant type
     *     @type string $redirect_uri
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\Oauth2Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.auth.IssueTokenInput.GrantType grant_type = 1;</code>
     * @return int
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.auth.IssueTokenInput.GrantType grant_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGrantType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Auth\IssueTokenInput\GrantType::class);
        $this->grant_type = $var;

        return $this;
    }

    /**
     * username for password grant type
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * username for password grant type
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * password for password grant type
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * password for password grant type
     *
     * Generated from protobuf field <code>string password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_id = 4;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 4;</code>
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
     * Generated from protobuf field <code>string client_secret = 5;</code>
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Generated from protobuf field <code>string client_secret = 5;</code>
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
     * code for authorization_code grant type
     *
     * Generated from protobuf field <code>string code = 6;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * code for authorization_code grant type
     *
     * Generated from protobuf field <code>string code = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * code verifier for authorization_code grant type
     *
     * Generated from protobuf field <code>string code_verifier = 7;</code>
     * @return string
     */
    public function getCodeVerifier()
    {
        return $this->code_verifier;
    }

    /**
     * code verifier for authorization_code grant type
     *
     * Generated from protobuf field <code>string code_verifier = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCodeVerifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->code_verifier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope = 8;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>string scope = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * refresh_token for refresh_token grant type
     *
     * Generated from protobuf field <code>string refresh_token = 9;</code>
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * refresh_token for refresh_token grant type
     *
     * Generated from protobuf field <code>string refresh_token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setRefreshToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->refresh_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string redirect_uri = 10;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Generated from protobuf field <code>string redirect_uri = 10;</code>
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

