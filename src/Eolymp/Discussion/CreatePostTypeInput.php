<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_type_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.CreatePostTypeInput</code>
 */
class CreatePostTypeInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.discussion.PostType type = 1;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Discussion\PostType $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostTypeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.PostType type = 1;</code>
     * @return \Eolymp\Discussion\PostType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.PostType type = 1;</code>
     * @param \Eolymp\Discussion\PostType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\PostType::class);
        $this->type = $var;

        return $this;
    }

}
