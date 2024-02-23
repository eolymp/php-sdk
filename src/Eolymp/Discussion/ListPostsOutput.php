<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.ListPostsOutput</code>
 */
class ListPostsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.Post items = 1;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     */
    protected $has_more = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Discussion\Post[]|\Google\Protobuf\Internal\RepeatedField $items
     *     @type bool $has_more
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.Post items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.Post items = 1;</code>
     * @param \Eolymp\Discussion\Post[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Discussion\Post::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     * @return bool
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasMore($var)
    {
        GPBUtil::checkBool($var);
        $this->has_more = $var;

        return $this;
    }

}

