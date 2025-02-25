<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/campaign_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.CreateCampaignInput</code>
 */
class CreateCampaignInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Campaign campaign = 1;</code>
     */
    protected $campaign = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Newsletter\Campaign $campaign
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\CampaignService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Campaign campaign = 1;</code>
     * @return \Eolymp\Newsletter\Campaign|null
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    public function hasCampaign()
    {
        return isset($this->campaign);
    }

    public function clearCampaign()
    {
        unset($this->campaign);
    }

    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Campaign campaign = 1;</code>
     * @param \Eolymp\Newsletter\Campaign $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Newsletter\Campaign::class);
        $this->campaign = $var;

        return $this;
    }

}

