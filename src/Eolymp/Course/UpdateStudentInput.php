<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/course/student_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.UpdateStudentInput</code>
 */
class UpdateStudentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.course.UpdateStudentInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.Student student = 3;</code>
     */
    protected $student = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *           specify list of fields to update, if empty all fields are updated
     *     @type string $member_id
     *     @type \Eolymp\Course\Student $student
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\StudentService::initOnce();
        parent::__construct($data);
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.course.UpdateStudentInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.course.UpdateStudentInput.Patch patch = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Course\UpdateStudentInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Student student = 3;</code>
     * @return \Eolymp\Course\Student|null
     */
    public function getStudent()
    {
        return $this->student;
    }

    public function hasStudent()
    {
        return isset($this->student);
    }

    public function clearStudent()
    {
        unset($this->student);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Student student = 3;</code>
     * @param \Eolymp\Course\Student $var
     * @return $this
     */
    public function setStudent($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Student::class);
        $this->student = $var;

        return $this;
    }

}

