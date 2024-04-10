<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DescribeProgressInput</code>
 */
class DescribeProgressInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     */
    protected $entry_id = '';
    /**
     * authenticated student, if empty
     *
     * Generated from protobuf field <code>string student_id = 2;</code>
     */
    protected $student_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entry_id
     *     @type string $student_id
     *           authenticated student, if empty
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\EntryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     * @return string
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
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
     * authenticated student, if empty
     *
     * Generated from protobuf field <code>string student_id = 2;</code>
     * @return string
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * authenticated student, if empty
     *
     * Generated from protobuf field <code>string student_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStudentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->student_id = $var;

        return $this;
    }

}

