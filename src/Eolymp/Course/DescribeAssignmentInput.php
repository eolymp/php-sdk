<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DescribeAssignmentInput</code>
 */
class DescribeAssignmentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     */
    protected $assignment_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Assignment.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $assignment_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\AssignmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     * @return string
     */
    public function getAssignmentId()
    {
        return $this->assignment_id;
    }

    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAssignmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->assignment_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Assignment.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Assignment.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Course\Assignment\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

