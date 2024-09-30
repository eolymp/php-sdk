<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/class_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DeleteClassAssignmentInput</code>
 */
class DeleteClassAssignmentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string group_id = 1;</code>
     */
    protected $group_id = '';
    /**
     * Generated from protobuf field <code>string module_id = 2;</code>
     */
    protected $module_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_id
     *     @type string $module_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ClassService::initOnce();
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

    /**
     * Generated from protobuf field <code>string module_id = 2;</code>
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Generated from protobuf field <code>string module_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_id = $var;

        return $this;
    }

}

