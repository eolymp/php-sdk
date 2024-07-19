<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module_item.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.ModuleItem</code>
 */
class ModuleItem extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint32 index = 11;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>uint32 depth = 12;</code>
     */
    protected $depth = 0;
    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Grading grading = 30;</code>
     */
    protected $grading = null;
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
    protected $content;

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
     *     @type int $depth
     *     @type \Eolymp\Course\ModuleItem\Grading $grading
     *     @type \Eolymp\Course\ModuleItem\Document $document
     *     @type \Eolymp\Course\ModuleItem\Assignment $assignment
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
        \GPBMetadata\Eolymp\Course\ModuleItem::initOnce();
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
     * Generated from protobuf field <code>uint32 index = 11;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 11;</code>
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
     * Generated from protobuf field <code>uint32 depth = 12;</code>
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Generated from protobuf field <code>uint32 depth = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDepth($var)
    {
        GPBUtil::checkUint32($var);
        $this->depth = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Grading grading = 30;</code>
     * @return \Eolymp\Course\ModuleItem\Grading|null
     */
    public function getGrading()
    {
        return $this->grading;
    }

    public function hasGrading()
    {
        return isset($this->grading);
    }

    public function clearGrading()
    {
        unset($this->grading);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Grading grading = 30;</code>
     * @param \Eolymp\Course\ModuleItem\Grading $var
     * @return $this
     */
    public function setGrading($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\ModuleItem\Grading::class);
        $this->grading = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Document document = 100;</code>
     * @return \Eolymp\Course\ModuleItem\Document|null
     */
    public function getDocument()
    {
        return $this->readOneof(100);
    }

    public function hasDocument()
    {
        return $this->hasOneof(100);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Document document = 100;</code>
     * @param \Eolymp\Course\ModuleItem\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\ModuleItem\Document::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Assignment assignment = 101;</code>
     * @return \Eolymp\Course\ModuleItem\Assignment|null
     */
    public function getAssignment()
    {
        return $this->readOneof(101);
    }

    public function hasAssignment()
    {
        return $this->hasOneof(101);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ModuleItem.Assignment assignment = 101;</code>
     * @param \Eolymp\Course\ModuleItem\Assignment $var
     * @return $this
     */
    public function setAssignment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\ModuleItem\Assignment::class);
        $this->writeOneof(101, $var);

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

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

}

