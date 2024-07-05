<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/group_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.CreateGroupInput</code>
 */
class CreateGroupInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.community.Group group = 1;</code>
     */
    protected $group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Community\Group $group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Group group = 1;</code>
     * @return \Eolymp\Community\Group|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Group group = 1;</code>
     * @param \Eolymp\Community\Group $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Group::class);
        $this->group = $var;

        return $this;
    }

}

