<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/newsletter/campaign_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.DeleteRecipientInput</code>
 */
class DeleteRecipientInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string campaign_id = 1;</code>
     */
    protected $campaign_id = '';
    /**
     * Generated from protobuf field <code>string recipient_id = 2;</code>
     */
    protected $recipient_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_id
     *     @type string $recipient_id
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
     * Generated from protobuf field <code>string recipient_id = 2;</code>
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipient_id;
    }

    /**
     * Generated from protobuf field <code>string recipient_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRecipientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->recipient_id = $var;

        return $this;
    }

}

