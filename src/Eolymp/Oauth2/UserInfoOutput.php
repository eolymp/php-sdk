<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/oauth2/oauth2.proto

namespace Eolymp\Oauth2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.oauth2.UserInfoOutput</code>
 */
class UserInfoOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string subject = 1;</code>
     */
    protected $subject = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string given_name = 3;</code>
     */
    protected $given_name = '';
    /**
     * Generated from protobuf field <code>string family_name = 4;</code>
     */
    protected $family_name = '';
    /**
     * Generated from protobuf field <code>string middle_name = 5;</code>
     */
    protected $middle_name = '';
    /**
     * Generated from protobuf field <code>string nickname = 6;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>string picture = 7;</code>
     */
    protected $picture = '';
    /**
     * Generated from protobuf field <code>string email = 8;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>bool email_verified = 9;</code>
     */
    protected $email_verified = false;
    /**
     * Generated from protobuf field <code>string locale = 10;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subject
     *     @type string $name
     *     @type string $given_name
     *     @type string $family_name
     *     @type string $middle_name
     *     @type string $nickname
     *     @type string $picture
     *     @type string $email
     *     @type bool $email_verified
     *     @type string $locale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Oauth2\Oauth2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string subject = 1;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>string subject = 1;</code>
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Generated from protobuf field <code>string given_name = 3;</code>
     * @return string
     */
    public function getGivenName()
    {
        return $this->given_name;
    }

    /**
     * Generated from protobuf field <code>string given_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGivenName($var)
    {
        GPBUtil::checkString($var, True);
        $this->given_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string family_name = 4;</code>
     * @return string
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * Generated from protobuf field <code>string family_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFamilyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->family_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string middle_name = 5;</code>
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }

    /**
     * Generated from protobuf field <code>string middle_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMiddleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->middle_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 6;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 6;</code>
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
     * Generated from protobuf field <code>string picture = 7;</code>
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Generated from protobuf field <code>string picture = 7;</code>
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
     * Generated from protobuf field <code>string email = 8;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 8;</code>
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
     * Generated from protobuf field <code>bool email_verified = 9;</code>
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->email_verified;
    }

    /**
     * Generated from protobuf field <code>bool email_verified = 9;</code>
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
     * Generated from protobuf field <code>string locale = 10;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 10;</code>
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

