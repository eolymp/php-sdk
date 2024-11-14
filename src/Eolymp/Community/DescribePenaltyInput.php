<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/penalty_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribePenaltyInput</code>
 */
class DescribePenaltyInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string penalty_id = 1;</code>
     */
    protected $penalty_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Penalty.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $penalty_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\PenaltyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string penalty_id = 1;</code>
     * @return string
     */
    public function getPenaltyId()
    {
        return $this->penalty_id;
    }

    /**
     * Generated from protobuf field <code>string penalty_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPenaltyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->penalty_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Penalty.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Penalty.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Community\Penalty\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}
