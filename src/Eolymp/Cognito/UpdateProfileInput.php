<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.UpdateProfileInput</code>
 */
class UpdateProfileInput extends \Google\Protobuf\Internal\Message
{
    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.cognito.UpdateProfileInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string email = 3;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string company = 12;</code>
     */
    protected $company = '';
    /**
     * Generated from protobuf field <code>string occupation = 13;</code>
     */
    protected $occupation = '';
    /**
     * Generated from protobuf field <code>string country = 21;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string city = 22;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string birthday = 33;</code>
     */
    protected $birthday = '';
    /**
     * Generated from protobuf field <code>string locale = 34;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *           specify list of fields to update, if empty all fields are updated
     *     @type string $username
     *     @type string $email
     *     @type string $name
     *     @type string $company
     *     @type string $occupation
     *     @type string $country
     *     @type string $city
     *     @type string $birthday
     *     @type string $locale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Cognito::initOnce();
        parent::__construct($data);
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.cognito.UpdateProfileInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.cognito.UpdateProfileInput.Patch patch = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Cognito\UpdateProfileInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
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
     * Generated from protobuf field <code>string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
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
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 10;</code>
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
     * Generated from protobuf field <code>string company = 12;</code>
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Generated from protobuf field <code>string company = 12;</code>
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
     * Generated from protobuf field <code>string occupation = 13;</code>
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Generated from protobuf field <code>string occupation = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setOccupation($var)
    {
        GPBUtil::checkString($var, True);
        $this->occupation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 21;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 21;</code>
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
     * Generated from protobuf field <code>string city = 22;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 22;</code>
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
     * Generated from protobuf field <code>string birthday = 33;</code>
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Generated from protobuf field <code>string birthday = 33;</code>
     * @param string $var
     * @return $this
     */
    public function setBirthday($var)
    {
        GPBUtil::checkString($var, True);
        $this->birthday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locale = 34;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 34;</code>
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

