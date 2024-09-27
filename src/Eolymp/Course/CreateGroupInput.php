<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/group_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.CreateGroupInput</code>
 */
class CreateGroupInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.course.Group group = 1;</code>
     */
    protected $group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Course\Group $group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Group group = 1;</code>
     * @return \Eolymp\Course\Group|null
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
     * Generated from protobuf field <code>.eolymp.course.Group group = 1;</code>
     * @param \Eolymp\Course\Group $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Group::class);
        $this->group = $var;

        return $this;
    }

}
