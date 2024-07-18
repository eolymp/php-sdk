<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Module</code>
 */
class Module extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>bool draft = 3;</code>
     */
    protected $draft = false;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string image_url = 5;</code>
     */
    protected $image_url = '';
    /**
     * Generated from protobuf field <code>uint32 index = 6;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 10;</code>
     */
    protected $description = null;
    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Status status = 1000;</code>
     */
    protected $status = 0;
    /**
     * value from 0 to 1 showing overall progress in the module
     *
     * Generated from protobuf field <code>float progress = 1001;</code>
     */
    protected $progress = 0.0;
    /**
     * value from 0 to 100 showing overall grade in the module
     *
     * Generated from protobuf field <code>uint32 grade = 1002;</code>
     */
    protected $grade = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp due_at = 1010;</code>
     */
    protected $due_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_at = 1011;</code>
     */
    protected $start_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 1012;</code>
     */
    protected $complete_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $url
     *     @type bool $draft
     *     @type string $name
     *     @type string $image_url
     *     @type int $index
     *     @type \Eolymp\Ecm\Content $description
     *     @type int $status
     *     @type float $progress
     *           value from 0 to 1 showing overall progress in the module
     *     @type int $grade
     *           value from 0 to 100 showing overall grade in the module
     *     @type \Google\Protobuf\Timestamp $due_at
     *     @type \Google\Protobuf\Timestamp $start_at
     *     @type \Google\Protobuf\Timestamp $complete_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Module::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool draft = 3;</code>
     * @return bool
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Generated from protobuf field <code>bool draft = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDraft($var)
    {
        GPBUtil::checkBool($var);
        $this->draft = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_url = 5;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>string image_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 6;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 10;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 10;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Status status = 1000;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Status status = 1000;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Module\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * value from 0 to 1 showing overall progress in the module
     *
     * Generated from protobuf field <code>float progress = 1001;</code>
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * value from 0 to 1 showing overall progress in the module
     *
     * Generated from protobuf field <code>float progress = 1001;</code>
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
     * value from 0 to 100 showing overall grade in the module
     *
     * Generated from protobuf field <code>uint32 grade = 1002;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * value from 0 to 100 showing overall grade in the module
     *
     * Generated from protobuf field <code>uint32 grade = 1002;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp due_at = 1010;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDueAt()
    {
        return $this->due_at;
    }

    public function hasDueAt()
    {
        return isset($this->due_at);
    }

    public function clearDueAt()
    {
        unset($this->due_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp due_at = 1010;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDueAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->due_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_at = 1011;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartAt()
    {
        return $this->start_at;
    }

    public function hasStartAt()
    {
        return isset($this->start_at);
    }

    public function clearStartAt()
    {
        unset($this->start_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_at = 1011;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 1012;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompleteAt()
    {
        return $this->complete_at;
    }

    public function hasCompleteAt()
    {
        return isset($this->complete_at);
    }

    public function clearCompleteAt()
    {
        unset($this->complete_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 1012;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompleteAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->complete_at = $var;

        return $this;
    }

}

