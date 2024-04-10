<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Course</code>
 */
class Course extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string locale = 10;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>string name = 11;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 12;</code>
     */
    protected $description = null;
    /**
     * Generated from protobuf field <code>string image = 13;</code>
     */
    protected $image = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.Course.Visibility visibility = 14;</code>
     */
    protected $visibility = 0;
    /**
     * Generated from protobuf field <code>uint32 duration = 15;</code>
     */
    protected $duration = 0;
    /**
     * Problem topics (ID of topics from eolymp.taxonomy.TopicService)
     *
     * Generated from protobuf field <code>repeated string topics = 16;</code>
     */
    private $topics;
    /**
     * Generated from protobuf field <code>uint32 estimate = 20;</code>
     */
    protected $estimate = 0;
    /**
     * Generated from protobuf field <code>.eolymp.course.Course.ParticipationMode participation_mode = 30;</code>
     */
    protected $participation_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $url
     *     @type string $locale
     *     @type string $name
     *     @type \Eolymp\Ecm\Content $description
     *     @type string $image
     *     @type int $visibility
     *     @type int $duration
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $topics
     *           Problem topics (ID of topics from eolymp.taxonomy.TopicService)
     *     @type int $estimate
     *     @type int $participation_mode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Course::initOnce();
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
     * Generated from protobuf field <code>string locale = 10;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 11;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 11;</code>
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
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 12;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 12;</code>
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
     * Generated from protobuf field <code>string image = 13;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>string image = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Course.Visibility visibility = 14;</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Course.Visibility visibility = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Course_Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 duration = 15;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>uint32 duration = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->duration = $var;

        return $this;
    }

    /**
     * Problem topics (ID of topics from eolymp.taxonomy.TopicService)
     *
     * Generated from protobuf field <code>repeated string topics = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Problem topics (ID of topics from eolymp.taxonomy.TopicService)
     *
     * Generated from protobuf field <code>repeated string topics = 16;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->topics = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 estimate = 20;</code>
     * @return int
     */
    public function getEstimate()
    {
        return $this->estimate;
    }

    /**
     * Generated from protobuf field <code>uint32 estimate = 20;</code>
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
     * Generated from protobuf field <code>.eolymp.course.Course.ParticipationMode participation_mode = 30;</code>
     * @return int
     */
    public function getParticipationMode()
    {
        return $this->participation_mode;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Course.ParticipationMode participation_mode = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setParticipationMode($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Course_ParticipationMode::class);
        $this->participation_mode = $var;

        return $this;
    }

}

