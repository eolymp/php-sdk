<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/newsletter/campaign_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.TestCampaignInput</code>
 */
class TestCampaignInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string campaign_id = 1;</code>
     */
    protected $campaign_id = '';
    /**
     * Generated from protobuf field <code>string email = 2;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string locale = 3;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>string member_id = 4;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>map<string, string> parameters = 20;</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_id
     *     @type string $email
     *     @type string $locale
     *     @type string $member_id
     *     @type array|\Google\Protobuf\Internal\MapField $parameters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\CampaignService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string campaign_id = 1;</code>
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Generated from protobuf field <code>string campaign_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignId($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
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
     * Generated from protobuf field <code>string locale = 3;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 3;</code>
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
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> parameters = 20;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Generated from protobuf field <code>map<string, string> parameters = 20;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameters = $arr;

        return $this;
    }

}

