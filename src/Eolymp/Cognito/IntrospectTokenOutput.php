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
     * Generated from protobuf field <code>string scope = 2;</code>
     */
    protected $scope = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire = 3;</code>
     */
    protected $expire = null;
    /**
     * Generated from protobuf field <code>string subject = 4;</code>
     */
    protected $subject = '';
    /**
     * Generated from protobuf field <code>string audience = 5;</code>
     */
    protected $audience = '';
    /**
     * Generated from protobuf field <code>string issuer = 6;</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string name = 100;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string nickname = 101;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>string picture = 102;</code>
     */
    protected $picture = '';
    /**
     * Generated from protobuf field <code>string email = 103;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>bool email_verified = 104;</code>
     */
    protected $email_verified = false;
    /**
     * Generated from protobuf field <code>string locale = 105;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $active
     *     @type string $scope
     *     @type \Google\Protobuf\Timestamp $expire
     *     @type string $subject
     *     @type string $audience
     *     @type string $issuer
     *     @type string $name
     *     @type string $nickname
     *     @type string $picture
     *     @type string $email
     *     @type bool $email_verified
     *     @type string $locale
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
     * Generated from protobuf field <code>string scope = 2;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>string scope = 2;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpire()
    {
        return $this->expire;
    }

    public function hasExpire()
    {
        return isset($this->expire);
    }

    public function clearExpire()
    {
        unset($this->expire);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpire($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subject = 4;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>string subject = 4;</code>
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
     * Generated from protobuf field <code>string audience = 5;</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Generated from protobuf field <code>string audience = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string issuer = 6;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 6;</code>
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
     * Generated from protobuf field <code>string name = 100;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 101;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picture = 102;</code>
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Generated from protobuf field <code>string picture = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setPicture($var)
    {
        GPBUtil::checkString($var, True);
        $this->picture = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 103;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 103;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool email_verified = 104;</code>
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->email_verified;
    }

    /**
     * Generated from protobuf field <code>bool email_verified = 104;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmailVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->email_verified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locale = 105;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 105;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

}

