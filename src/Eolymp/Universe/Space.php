<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.Space</code>
 */
class Space extends \Google\Protobuf\Internal\Message
{
    /**
     * space unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * space key used to build URLs
     *
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * space url
     *
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = '';
    /**
     * space home page URL
     *
     * Generated from protobuf field <code>string home_url = 50;</code>
     */
    protected $home_url = '';
    /**
     * space issuer URL (used for issuing tokens)
     *
     * Generated from protobuf field <code>string issuer_url = 51;</code>
     */
    protected $issuer_url = '';
    /**
     * space graphql endpoint
     *
     * Generated from protobuf field <code>string graphql_url = 52;</code>
     */
    protected $graphql_url = '';
    /**
     * human friendly name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * space logo image
     *
     * Generated from protobuf field <code>string image = 11;</code>
     */
    protected $image = '';
    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Visibility visibility = 14;</code>
     */
    protected $visibility = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.universe.Space.Feature features = 17;</code>
     */
    private $features;
    /**
     * space status
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Status status = 16;</code>
     */
    protected $status = 0;
    /**
     * subscription details (private)
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Subscription subscription = 800;</code>
     */
    protected $subscription = null;
    /**
     * space affiliation label
     *
     * Generated from protobuf field <code>string affiliation = 15;</code>
     */
    protected $affiliation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           space unique identifier
     *     @type string $key
     *           space key used to build URLs
     *     @type string $url
     *           space url
     *     @type string $home_url
     *           space home page URL
     *     @type string $issuer_url
     *           space issuer URL (used for issuing tokens)
     *     @type string $graphql_url
     *           space graphql endpoint
     *     @type string $name
     *           human friendly name
     *     @type string $image
     *           space logo image
     *     @type int $visibility
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $features
     *     @type int $status
     *           space status
     *     @type \Eolymp\Universe\Space\Subscription $subscription
     *           subscription details (private)
     *     @type string $affiliation
     *           space affiliation label
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Space::initOnce();
        parent::__construct($data);
    }

    /**
     * space unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * space unique identifier
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
     * space key used to build URLs
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * space key used to build URLs
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * space url
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * space url
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * space home page URL
     *
     * Generated from protobuf field <code>string home_url = 50;</code>
     * @return string
     */
    public function getHomeUrl()
    {
        return $this->home_url;
    }

    /**
     * space home page URL
     *
     * Generated from protobuf field <code>string home_url = 50;</code>
     * @param string $var
     * @return $this
     */
    public function setHomeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->home_url = $var;

        return $this;
    }

    /**
     * space issuer URL (used for issuing tokens)
     *
     * Generated from protobuf field <code>string issuer_url = 51;</code>
     * @return string
     */
    public function getIssuerUrl()
    {
        return $this->issuer_url;
    }

    /**
     * space issuer URL (used for issuing tokens)
     *
     * Generated from protobuf field <code>string issuer_url = 51;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuerUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer_url = $var;

        return $this;
    }

    /**
     * space graphql endpoint
     *
     * Generated from protobuf field <code>string graphql_url = 52;</code>
     * @return string
     */
    public function getGraphqlUrl()
    {
        return $this->graphql_url;
    }

    /**
     * space graphql endpoint
     *
     * Generated from protobuf field <code>string graphql_url = 52;</code>
     * @param string $var
     * @return $this
     */
    public function setGraphqlUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->graphql_url = $var;

        return $this;
    }

    /**
     * human friendly name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * human friendly name
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
     * space logo image
     *
     * Generated from protobuf field <code>string image = 11;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * space logo image
     *
     * Generated from protobuf field <code>string image = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Visibility visibility = 14;</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Visibility visibility = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Universe\Space\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.universe.Space.Feature features = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.universe.Space.Feature features = 17;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Universe\Space\Feature::class);
        $this->features = $arr;

        return $this;
    }

    /**
     * space status
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Status status = 16;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * space status
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Status status = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Universe\Space\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * subscription details (private)
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Subscription subscription = 800;</code>
     * @return \Eolymp\Universe\Space\Subscription|null
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    public function hasSubscription()
    {
        return isset($this->subscription);
    }

    public function clearSubscription()
    {
        unset($this->subscription);
    }

    /**
     * subscription details (private)
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Subscription subscription = 800;</code>
     * @param \Eolymp\Universe\Space\Subscription $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Space\Subscription::class);
        $this->subscription = $var;

        return $this;
    }

    /**
     * space affiliation label
     *
     * Generated from protobuf field <code>string affiliation = 15;</code>
     * @return string
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * space affiliation label
     *
     * Generated from protobuf field <code>string affiliation = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setAffiliation($var)
    {
        GPBUtil::checkString($var, True);
        $this->affiliation = $var;

        return $this;
    }

}

