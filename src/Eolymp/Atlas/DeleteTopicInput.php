<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/taxonomy_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DeleteTopicInput</code>
 */
class DeleteTopicInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string topic_id = 1;</code>
     */
    protected $topic_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TaxonomyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string topic_id = 1;</code>
     * @return string
     */
    public function getTopicId()
    {
        return $this->topic_id;
    }

    /**
     * Generated from protobuf field <code>string topic_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopicId($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic_id = $var;

        return $this;
    }

}

