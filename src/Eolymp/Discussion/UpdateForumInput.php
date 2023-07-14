<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/forum_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.UpdateForumInput</code>
 */
class UpdateForumInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string forum_id = 1;</code>
     */
    protected $forum_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Forum forum = 2;</code>
     */
    protected $forum = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $forum_id
     *     @type \Eolymp\Discussion\Forum $forum
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\ForumService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string forum_id = 1;</code>
     * @return string
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * Generated from protobuf field <code>string forum_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setForumId($var)
    {
        GPBUtil::checkString($var, True);
        $this->forum_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Forum forum = 2;</code>
     * @return \Eolymp\Discussion\Forum
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Forum forum = 2;</code>
     * @param \Eolymp\Discussion\Forum $var
     * @return $this
     */
    public function setForum($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Forum::class);
        $this->forum = $var;

        return $this;
    }

}
