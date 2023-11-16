<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/group_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeGroupInput</code>
 */
class DescribeGroupInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string group_id = 1;</code>
     */
    protected $group_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string group_id = 1;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>string group_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

}

