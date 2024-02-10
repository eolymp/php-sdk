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
     * space key used to build URLs
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
     * space use type
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Type type = 12;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Visibility visibility = 14;</code>
     */
    protected $visibility = 0;
    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Status status = 16;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Subscription subscription = 800;</code>
     */
    protected $subscription = null;
    /**
     * deprecated: use subscription.quota
     *
     * Generated from protobuf field <code>.eolymp.universe.Quota quota = 30;</code>
     */
    protected $quota = null;
    /**
     * deprecated: use subscription.plan
     *
     * Generated from protobuf field <code>string plan = 13;</code>
     */
    protected $plan = '';
    /**
     * deprecated: use subscription.seats
     *
     * Generated from protobuf field <code>uint32 seats = 31;</code>
     */
    protected $seats = 0;

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
     *           space key used to build URLs
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
     *     @type int $type
     *           space use type
     *     @type int $visibility
     *     @type int $status
     *     @type \Eolymp\Universe\Space\Subscription $subscription
     *     @type \Eolymp\Universe\Quota $quota
     *           deprecated: use subscription.quota
     *     @type string $plan
     *           deprecated: use subscription.plan
     *     @type int $seats
     *           deprecated: use subscription.seats
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
     * space key used to build URLs
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * space key used to build URLs
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
     * space use type
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Type type = 12;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * space use type
     *
     * Generated from protobuf field <code>.eolymp.universe.Space.Type type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Universe\Space_Type::class);
        $this->type = $var;

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
        GPBUtil::checkEnum($var, \Eolymp\Universe\Space_Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Status status = 16;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Status status = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Universe\Space_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Subscription subscription = 800;</code>
     * @return \Eolymp\Universe\Space\Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space.Subscription subscription = 800;</code>
     * @param \Eolymp\Universe\Space\Subscription $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Space_Subscription::class);
        $this->subscription = $var;

        return $this;
    }

    /**
     * deprecated: use subscription.quota
     *
     * Generated from protobuf field <code>.eolymp.universe.Quota quota = 30;</code>
     * @return \Eolymp\Universe\Quota
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * deprecated: use subscription.quota
     *
     * Generated from protobuf field <code>.eolymp.universe.Quota quota = 30;</code>
     * @param \Eolymp\Universe\Quota $var
     * @return $this
     */
    public function setQuota($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Quota::class);
        $this->quota = $var;

        return $this;
    }

    /**
     * deprecated: use subscription.plan
     *
     * Generated from protobuf field <code>string plan = 13;</code>
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * deprecated: use subscription.plan
     *
     * Generated from protobuf field <code>string plan = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->plan = $var;

        return $this;
    }

    /**
     * deprecated: use subscription.seats
     *
     * Generated from protobuf field <code>uint32 seats = 31;</code>
     * @return int
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * deprecated: use subscription.seats
     *
     * Generated from protobuf field <code>uint32 seats = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setSeats($var)
    {
        GPBUtil::checkUint32($var);
        $this->seats = $var;

        return $this;
    }

}

