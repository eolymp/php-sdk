<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_item_v2.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.AssignmentItemV2</code>
 */
class AssignmentItemV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string module_item_id = 2;</code>
     */
    protected $module_item_id = '';
    /**
     * Generated from protobuf field <code>float progress = 10;</code>
     */
    protected $progress = 0.0;
    /**
     * Generated from protobuf field <code>uint32 grade = 15;</code>
     */
    protected $grade = 0;
    /**
     * Generated from protobuf field <code>bool excused = 16;</code>
     */
    protected $excused = false;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp graded_at = 26;</code>
     */
    protected $graded_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $module_item_id
     *     @type float $progress
     *     @type int $grade
     *     @type bool $excused
     *     @type \Google\Protobuf\Timestamp $graded_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\AssignmentItemV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string module_item_id = 2;</code>
     * @return string
     */
    public function getModuleItemId()
    {
        return $this->module_item_id;
    }

    /**
     * Generated from protobuf field <code>string module_item_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleItemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_item_id = $var;

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

    /**
     * Generated from protobuf field <code>bool excused = 16;</code>
     * @return bool
     */
    public function getExcused()
    {
        return $this->excused;
    }

    /**
     * Generated from protobuf field <code>bool excused = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setExcused($var)
    {
        GPBUtil::checkBool($var);
        $this->excused = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp graded_at = 26;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getGradedAt()
    {
        return $this->graded_at;
    }

    public function hasGradedAt()
    {
        return isset($this->graded_at);
    }

    public function clearGradedAt()
    {
        unset($this->graded_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp graded_at = 26;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGradedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->graded_at = $var;

        return $this;
    }

}

