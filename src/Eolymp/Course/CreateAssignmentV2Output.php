<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_service_v2.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.CreateAssignmentV2Output</code>
 */
class CreateAssignmentV2Output extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     */
    protected $assignment_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $assignment_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\AssignmentServiceV2::initOnce();
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

}

