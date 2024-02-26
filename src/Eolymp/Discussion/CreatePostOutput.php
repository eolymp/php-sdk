<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.CreatePostOutput</code>
 */
class CreatePostOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     */
    protected $post_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $post_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     * @return string
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPostId($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_id = $var;

        return $this;
    }

}
