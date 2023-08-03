<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/user.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Username (handler)
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * Email address
     *
     * Generated from protobuf field <code>string email = 3;</code>
     */
    protected $email = '';
    /**
     * Account is active, user can login
     *
     * Generated from protobuf field <code>bool active = 4;</code>
     */
    protected $active = false;
    /**
     * Rank
     *
     * Generated from protobuf field <code>uint32 rank = 41;</code>
     */
    protected $rank = 0;
    /**
     * Rank trend (up or down)
     *
     * Generated from protobuf field <code>.eolymp.cognito.User.RankTrend rank_trend = 42;</code>
     */
    protected $rank_trend = 0;
    /**
     * Full name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * Profile picture
     *
     * Generated from protobuf field <code>string picture = 11;</code>
     */
    protected $picture = '';
    /**
     * Company
     *
     * Generated from protobuf field <code>string company = 12;</code>
     */
    protected $company = '';
    /**
     * Occupation
     *
     * Generated from protobuf field <code>string occupation = 13;</code>
     */
    protected $occupation = '';
    /**
     * Country code
     *
     * Generated from protobuf field <code>string country = 21;</code>
     */
    protected $country = '';
    /**
     * City
     *
     * Generated from protobuf field <code>string city = 22;</code>
     */
    protected $city = '';
    /**
     * Email confirmation status
     *
     * Generated from protobuf field <code>string email_status = 32;</code>
     */
    protected $email_status = '';
    /**
     * Birthday
     *
     * Generated from protobuf field <code>string birthday = 33;</code>
     */
    protected $birthday = '';
    /**
     * Exact time when user registered
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp registered_on = 34;</code>
     */
    protected $registered_on = null;
    /**
     * Exact time when user was last active
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_activity = 35;</code>
     */
    protected $last_activity = null;
    /**
     * Exact time when user has changed username last time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp username_changed_on = 36;</code>
     */
    protected $username_changed_on = null;
    /**
     * Exact time when user has changed password last time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_changed_on = 37;</code>
     */
    protected $password_changed_on = null;
    /**
     * Locale
     *
     * Generated from protobuf field <code>string locale = 40;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Unique identifier
     *     @type string $username
     *           Username (handler)
     *     @type string $email
     *           Email address
     *     @type bool $active
     *           Account is active, user can login
     *     @type int $rank
     *           Rank
     *     @type int $rank_trend
     *           Rank trend (up or down)
     *     @type string $name
     *           Full name
     *     @type string $picture
     *           Profile picture
     *     @type string $company
     *           Company
     *     @type string $occupation
     *           Occupation
     *     @type string $country
     *           Country code
     *     @type string $city
     *           City
     *     @type string $email_status
     *           Email confirmation status
     *     @type string $birthday
     *           Birthday
     *     @type \Google\Protobuf\Timestamp $registered_on
     *           Exact time when user registered
     *     @type \Google\Protobuf\Timestamp $last_activity
     *           Exact time when user was last active
     *     @type \Google\Protobuf\Timestamp $username_changed_on
     *           Exact time when user has changed username last time
     *     @type \Google\Protobuf\Timestamp $password_changed_on
     *           Exact time when user has changed password last time
     *     @type string $locale
     *           Locale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Username (handler)
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Username (handler)
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
     * Email address
     *
     * Generated from protobuf field <code>string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email address
     *
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
     * Account is active, user can login
     *
     * Generated from protobuf field <code>bool active = 4;</code>
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Account is active, user can login
     *
     * Generated from protobuf field <code>bool active = 4;</code>
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
     * Rank
     *
     * Generated from protobuf field <code>uint32 rank = 41;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Rank
     *
     * Generated from protobuf field <code>uint32 rank = 41;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank = $var;

        return $this;
    }

    /**
     * Rank trend (up or down)
     *
     * Generated from protobuf field <code>.eolymp.cognito.User.RankTrend rank_trend = 42;</code>
     * @return int
     */
    public function getRankTrend()
    {
        return $this->rank_trend;
    }

    /**
     * Rank trend (up or down)
     *
     * Generated from protobuf field <code>.eolymp.cognito.User.RankTrend rank_trend = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setRankTrend($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Cognito\User_RankTrend::class);
        $this->rank_trend = $var;

        return $this;
    }

    /**
     * Full name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full name
     *
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
     * Profile picture
     *
     * Generated from protobuf field <code>string picture = 11;</code>
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Profile picture
     *
     * Generated from protobuf field <code>string picture = 11;</code>
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
     * Company
     *
     * Generated from protobuf field <code>string company = 12;</code>
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Company
     *
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
     * Occupation
     *
     * Generated from protobuf field <code>string occupation = 13;</code>
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Occupation
     *
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
     * Country code
     *
     * Generated from protobuf field <code>string country = 21;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Country code
     *
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
     * City
     *
     * Generated from protobuf field <code>string city = 22;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * City
     *
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
     * Email confirmation status
     *
     * Generated from protobuf field <code>string email_status = 32;</code>
     * @return string
     */
    public function getEmailStatus()
    {
        return $this->email_status;
    }

    /**
     * Email confirmation status
     *
     * Generated from protobuf field <code>string email_status = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_status = $var;

        return $this;
    }

    /**
     * Birthday
     *
     * Generated from protobuf field <code>string birthday = 33;</code>
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Birthday
     *
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
     * Exact time when user registered
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp registered_on = 34;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRegisteredOn()
    {
        return $this->registered_on;
    }

    /**
     * Exact time when user registered
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp registered_on = 34;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRegisteredOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->registered_on = $var;

        return $this;
    }

    /**
     * Exact time when user was last active
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_activity = 35;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * Exact time when user was last active
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_activity = 35;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastActivity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_activity = $var;

        return $this;
    }

    /**
     * Exact time when user has changed username last time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp username_changed_on = 36;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUsernameChangedOn()
    {
        return $this->username_changed_on;
    }

    /**
     * Exact time when user has changed username last time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp username_changed_on = 36;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUsernameChangedOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->username_changed_on = $var;

        return $this;
    }

    /**
     * Exact time when user has changed password last time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_changed_on = 37;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getPasswordChangedOn()
    {
        return $this->password_changed_on;
    }

    /**
     * Exact time when user has changed password last time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_changed_on = 37;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPasswordChangedOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->password_changed_on = $var;

        return $this;
    }

    /**
     * Locale
     *
     * Generated from protobuf field <code>string locale = 40;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Locale
     *
     * Generated from protobuf field <code>string locale = 40;</code>
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

