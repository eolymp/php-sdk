<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DescribeCourseInput</code>
 */
class DescribeCourseInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     */
    protected $course_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Course.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $course_id
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\CourseService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     * @return string
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCourseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->course_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Course.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Course.Extra extra = 1123;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Course\Course\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

