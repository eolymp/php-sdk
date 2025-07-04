<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/course/class_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.CreateClassOutput</code>
 */
class CreateClassOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string class_id = 2;</code>
     */
    protected $class_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $class_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ClassService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string class_id = 2;</code>
     * @return string
     */
    public function getClassId()
    {
        return $this->class_id;
    }

    /**
     * Generated from protobuf field <code>string class_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClassId($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_id = $var;

        return $this;
    }

}

