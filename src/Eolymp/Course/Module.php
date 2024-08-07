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
     * extra module, will only be shown when explicitly assigned
     *
     * Generated from protobuf field <code>bool extra = 7;</code>
     */
    protected $extra = false;
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
     * Generated from protobuf field <code>float progress = 20;</code>
     */
    protected $progress = 0.0;
    /**
     * Generated from protobuf field <code>uint32 grade = 21;</code>
     */
    protected $grade = 0;
    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Assignment assignment = 30;</code>
     */
    protected $assignment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $url
     *     @type bool $draft
     *     @type bool $extra
     *           extra module, will only be shown when explicitly assigned
     *     @type string $name
     *     @type string $image_url
     *     @type int $index
     *     @type \Eolymp\Ecm\Content $description
     *     @type float $progress
     *     @type int $grade
     *     @type \Eolymp\Course\Module\Assignment $assignment
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
     * extra module, will only be shown when explicitly assigned
     *
     * Generated from protobuf field <code>bool extra = 7;</code>
     * @return bool
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * extra module, will only be shown when explicitly assigned
     *
     * Generated from protobuf field <code>bool extra = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtra($var)
    {
        GPBUtil::checkBool($var);
        $this->extra = $var;

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
     * Generated from protobuf field <code>float progress = 20;</code>
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>float progress = 20;</code>
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
     * Generated from protobuf field <code>uint32 grade = 21;</code>
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Generated from protobuf field <code>uint32 grade = 21;</code>
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
     * Generated from protobuf field <code>.eolymp.course.Module.Assignment assignment = 30;</code>
     * @return \Eolymp\Course\Module\Assignment|null
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
     * Generated from protobuf field <code>.eolymp.course.Module.Assignment assignment = 30;</code>
     * @param \Eolymp\Course\Module\Assignment $var
     * @return $this
     */
    public function setAssignment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Module\Assignment::class);
        $this->assignment = $var;

        return $this;
    }

}

