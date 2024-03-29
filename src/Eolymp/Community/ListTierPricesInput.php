<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/tier_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.ListTierPricesInput</code>
 */
class ListTierPricesInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tier_id = 1;</code>
     */
    protected $tier_id = '';
    /**
     * Generated from protobuf field <code>string currency = 2;</code>
     */
    protected $currency = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tier_id
     *     @type string $currency
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\TierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tier_id = 1;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tier_id;
    }

    /**
     * Generated from protobuf field <code>string tier_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tier_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string currency = 2;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Generated from protobuf field <code>string currency = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

}

