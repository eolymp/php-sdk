<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/newsletter/campaign_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.ListRecipientsInput</code>
 */
class ListRecipientsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string campaign_id = 2;</code>
     */
    protected $campaign_id = '';
    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     */
    protected $size = 0;
    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.newsletter.ListRecipientsInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_id
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type \Eolymp\Newsletter\ListRecipientsInput\Filter $filters
     *           data filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\CampaignService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string campaign_id = 2;</code>
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Generated from protobuf field <code>string campaign_id = 2;</code>
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
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.newsletter.ListRecipientsInput.Filter filters = 40;</code>
     * @return \Eolymp\Newsletter\ListRecipientsInput\Filter|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.newsletter.ListRecipientsInput.Filter filters = 40;</code>
     * @param \Eolymp\Newsletter\ListRecipientsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Newsletter\ListRecipientsInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

}

