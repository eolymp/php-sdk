<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.UpdateAssignmentInput</code>
 */
class UpdateAssignmentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string student_id = 1;</code>
     */
    protected $student_id = '';
    /**
     * Generated from protobuf field <code>string entry_id = 2;</code>
     */
    protected $entry_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment assignment = 3;</code>
     */
    protected $assignment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $student_id
     *     @type string $entry_id
     *     @type \Eolymp\Course\Assignment $assignment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\StudentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string student_id = 1;</code>
     * @return string
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * Generated from protobuf field <code>string student_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStudentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->student_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entry_id = 2;</code>
     * @return string
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>string entry_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment assignment = 3;</code>
     * @return \Eolymp\Course\Assignment
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment assignment = 3;</code>
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

