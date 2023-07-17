<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/claims.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.Claims</code>
 */
class Claims extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string email = 10;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>bool email_verified = 11;</code>
     */
    protected $email_verified = false;
    /**
     * Generated from protobuf field <code>string name = 30;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string nickname = 31;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>string picture = 40;</code>
     */
    protected $picture = '';
    /**
     * Generated from protobuf field <code>string locale = 50;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>bool minor = 61;</code>
     */
    protected $minor = false;
    /**
     * Generated from protobuf field <code>string country = 70;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string city = 73;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string company = 80;</code>
     */
    protected $company = '';
    /**
     * Generated from protobuf field <code>string business_title = 81;</code>
     */
    protected $business_title = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *     @type string $subject
     *     @type string $email
     *     @type bool $email_verified
     *     @type string $name
     *     @type string $nickname
     *     @type string $picture
     *     @type string $locale
     *     @type bool $minor
     *     @type string $country
     *     @type string $city
     *     @type string $company
     *     @type string $business_title
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\Claims::initOnce();
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
     * Generated from protobuf field <code>string email = 10;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 10;</code>
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
     * Generated from protobuf field <code>bool email_verified = 11;</code>
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->email_verified;
    }

    /**
     * Generated from protobuf field <code>bool email_verified = 11;</code>
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
     * Generated from protobuf field <code>string name = 30;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 30;</code>
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
     * Generated from protobuf field <code>string nickname = 31;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 31;</code>
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
     * Generated from protobuf field <code>string picture = 40;</code>
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Generated from protobuf field <code>string picture = 40;</code>
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
     * Generated from protobuf field <code>string locale = 50;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 50;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool minor = 61;</code>
     * @return bool
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * Generated from protobuf field <code>bool minor = 61;</code>
     * @param bool $var
     * @return $this
     */
    public function setMinor($var)
    {
        GPBUtil::checkBool($var);
        $this->minor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 70;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 70;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 73;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 73;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company = 80;</code>
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Generated from protobuf field <code>string company = 80;</code>
     * @param string $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkString($var, True);
        $this->company = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_title = 81;</code>
     * @return string
     */
    public function getBusinessTitle()
    {
        return $this->business_title;
    }

    /**
     * Generated from protobuf field <code>string business_title = 81;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_title = $var;

        return $this;
    }

}

