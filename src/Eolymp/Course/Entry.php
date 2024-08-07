<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 4;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Draft means entry is only available to the admin and won't be shown to students.
     *
     * Generated from protobuf field <code>bool draft = 3;</code>
     */
    protected $draft = false;
    /**
     * Generated from protobuf field <code>string parent_id = 10;</code>
     */
    protected $parent_id = '';
    /**
     * Generated from protobuf field <code>uint32 index = 11;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>uint32 depth = 12;</code>
     */
    protected $depth = 0;
    /**
     * Progress estimate in seconds, ie. amount of time it would take student to complete this entry.
     * For section entries this represents sum of its nested entries.
     *
     * Generated from protobuf field <code>uint32 estimate = 21;</code>
     */
    protected $estimate = 0;
    /**
     * Score weight among other entries in the section. For example, entry with weight 2 will give twice as much points
     * as entry with weight 1. Entry with weight 0 will not give any points.
     *
     * Generated from protobuf field <code>uint32 weight = 30;</code>
     */
    protected $weight = 0;
    /**
     * List of nested entries, read only, only populated when calling DescribeTOC API
     *
     * Generated from protobuf field <code>repeated .eolymp.course.Entry items = 900;</code>
     */
    private $items;
    protected $content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $url
     *     @type string $title
     *     @type bool $draft
     *           Draft means entry is only available to the admin and won't be shown to students.
     *     @type string $parent_id
     *     @type int $index
     *     @type int $depth
     *     @type int $estimate
     *           Progress estimate in seconds, ie. amount of time it would take student to complete this entry.
     *           For section entries this represents sum of its nested entries.
     *     @type int $weight
     *           Score weight among other entries in the section. For example, entry with weight 2 will give twice as much points
     *           as entry with weight 1. Entry with weight 0 will not give any points.
     *     @type \Eolymp\Course\Section $section
     *     @type \Eolymp\Ecm\Content $document
     *     @type \Eolymp\Course\Video $video
     *     @type \Eolymp\Course\Problem $problem
     *     @type array<\Eolymp\Course\Entry>|\Google\Protobuf\Internal\RepeatedField $items
     *           List of nested entries, read only, only populated when calling DescribeTOC API
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Entry::initOnce();
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
     * Generated from protobuf field <code>string url = 4;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 4;</code>
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
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Draft means entry is only available to the admin and won't be shown to students.
     *
     * Generated from protobuf field <code>bool draft = 3;</code>
     * @return bool
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Draft means entry is only available to the admin and won't be shown to students.
     *
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
     * Generated from protobuf field <code>string parent_id = 10;</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Generated from protobuf field <code>string parent_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

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
     * Progress estimate in seconds, ie. amount of time it would take student to complete this entry.
     * For section entries this represents sum of its nested entries.
     *
     * Generated from protobuf field <code>uint32 estimate = 21;</code>
     * @return int
     */
    public function getEstimate()
    {
        return $this->estimate;
    }

    /**
     * Progress estimate in seconds, ie. amount of time it would take student to complete this entry.
     * For section entries this represents sum of its nested entries.
     *
     * Generated from protobuf field <code>uint32 estimate = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setEstimate($var)
    {
        GPBUtil::checkUint32($var);
        $this->estimate = $var;

        return $this;
    }

    /**
     * Score weight among other entries in the section. For example, entry with weight 2 will give twice as much points
     * as entry with weight 1. Entry with weight 0 will not give any points.
     *
     * Generated from protobuf field <code>uint32 weight = 30;</code>
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Score weight among other entries in the section. For example, entry with weight 2 will give twice as much points
     * as entry with weight 1. Entry with weight 0 will not give any points.
     *
     * Generated from protobuf field <code>uint32 weight = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Section section = 100;</code>
     * @return \Eolymp\Course\Section|null
     */
    public function getSection()
    {
        return $this->readOneof(100);
    }

    public function hasSection()
    {
        return $this->hasOneof(100);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Section section = 100;</code>
     * @param \Eolymp\Course\Section $var
     * @return $this
     */
    public function setSection($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Section::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content document = 101;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getDocument()
    {
        return $this->readOneof(101);
    }

    public function hasDocument()
    {
        return $this->hasOneof(101);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content document = 101;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Video video = 102;</code>
     * @return \Eolymp\Course\Video|null
     */
    public function getVideo()
    {
        return $this->readOneof(102);
    }

    public function hasVideo()
    {
        return $this->hasOneof(102);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Video video = 102;</code>
     * @param \Eolymp\Course\Video $var
     * @return $this
     */
    public function setVideo($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Video::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Problem problem = 103;</code>
     * @return \Eolymp\Course\Problem|null
     */
    public function getProblem()
    {
        return $this->readOneof(103);
    }

    public function hasProblem()
    {
        return $this->hasOneof(103);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Problem problem = 103;</code>
     * @param \Eolymp\Course\Problem $var
     * @return $this
     */
    public function setProblem($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\Problem::class);
        $this->writeOneof(103, $var);

        return $this;
    }

    /**
     * List of nested entries, read only, only populated when calling DescribeTOC API
     *
     * Generated from protobuf field <code>repeated .eolymp.course.Entry items = 900;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * List of nested entries, read only, only populated when calling DescribeTOC API
     *
     * Generated from protobuf field <code>repeated .eolymp.course.Entry items = 900;</code>
     * @param array<\Eolymp\Course\Entry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Course\Entry::class);
        $this->items = $arr;

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

