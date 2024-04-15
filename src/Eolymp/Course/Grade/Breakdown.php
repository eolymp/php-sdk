<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/grade.proto

namespace Eolymp\Course\Grade;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Grade.Breakdown</code>
 */
class Breakdown extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     */
    protected $entry_id = '';
    /**
     * Generated from protobuf field <code>float progress = 10;</code>
     */
    protected $progress = 0.0;
    /**
     * Generated from protobuf field <code>uint32 grade = 15;</code>
     */
    protected $grade = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entry_id
     *     @type float $progress
     *     @type int $grade
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Grade::initOnce();
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
     * Generated from protobuf field <code>float progress = 10;</code>
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>float progress = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkFloat($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 15;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->grade = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Breakdown::class, \Eolymp\Course\Grade_Breakdown::class);

