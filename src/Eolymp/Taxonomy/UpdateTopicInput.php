<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/topic_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.UpdateTopicInput</code>
 */
class UpdateTopicInput extends \Google\Protobuf\Internal\Message
{
    /**
     * patch defines how update should be performed
     *
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.UpdateTopicInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * topic to update
     *
     * Generated from protobuf field <code>string topic_id = 2;</code>
     */
    protected $topic_id = '';
    /**
     * value to set (id field is ignored during update)
     *
     * Generated from protobuf field <code>.eolymp.taxonomy.Topic topic = 3;</code>
     */
    protected $topic = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $patch
     *           patch defines how update should be performed
     *     @type string $topic_id
     *           topic to update
     *     @type \Eolymp\Taxonomy\Topic $topic
     *           value to set (id field is ignored during update)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\TopicService::initOnce();
        parent::__construct($data);
    }

    /**
     * patch defines how update should be performed
     *
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.UpdateTopicInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * patch defines how update should be performed
     *
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.UpdateTopicInput.Patch patch = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Taxonomy\UpdateTopicInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * topic to update
     *
     * Generated from protobuf field <code>string topic_id = 2;</code>
     * @return string
     */
    public function getTopicId()
    {
        return $this->topic_id;
    }

    /**
     * topic to update
     *
     * Generated from protobuf field <code>string topic_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTopicId($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic_id = $var;

        return $this;
    }

    /**
     * value to set (id field is ignored during update)
     *
     * Generated from protobuf field <code>.eolymp.taxonomy.Topic topic = 3;</code>
     * @return \Eolymp\Taxonomy\Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * value to set (id field is ignored during update)
     *
     * Generated from protobuf field <code>.eolymp.taxonomy.Topic topic = 3;</code>
     * @param \Eolymp\Taxonomy\Topic $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Taxonomy\Topic::class);
        $this->topic = $var;

        return $this;
    }

}

