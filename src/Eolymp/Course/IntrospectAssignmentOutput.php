<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.IntrospectAssignmentOutput</code>
 */
class IntrospectAssignmentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment assignment = 1;</code>
     */
    protected $assignment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Course\Assignment $assignment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\AssignmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment assignment = 1;</code>
     * @return \Eolymp\Course\Assignment|null
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    public function hasAssignment()
    {
        return isset($this->assignment);
    }

    public function clearAssignment()
    {
        unset($this->assignment);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment assignment = 1;</code>
     * @param \Eolymp\Course\Assignment $var
     * @return $this
     */
    public function setAssignment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Assignment::class);
        $this->assignment = $var;

        return $this;
    }

}

