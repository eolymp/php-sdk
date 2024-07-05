<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/events.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.PostTranslationChangedEvent</code>
 */
class PostTranslationChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post post = 1;</code>
     */
    protected $post = null;
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation before = 2;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation after = 3;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Discussion\Post $post
     *     @type \Eolymp\Discussion\Post\Translation $before
     *     @type \Eolymp\Discussion\Post\Translation $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post post = 1;</code>
     * @return \Eolymp\Discussion\Post|null
     */
    public function getPost()
    {
        return $this->post;
    }

    public function hasPost()
    {
        return isset($this->post);
    }

    public function clearPost()
    {
        unset($this->post);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post post = 1;</code>
     * @param \Eolymp\Discussion\Post $var
     * @return $this
     */
    public function setPost($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Post::class);
        $this->post = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation before = 2;</code>
     * @return \Eolymp\Discussion\Post\Translation|null
     */
    public function getBefore()
    {
        return $this->before;
    }

    public function hasBefore()
    {
        return isset($this->before);
    }

    public function clearBefore()
    {
        unset($this->before);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation before = 2;</code>
     * @param \Eolymp\Discussion\Post\Translation $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Post\Translation::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation after = 3;</code>
     * @return \Eolymp\Discussion\Post\Translation|null
     */
    public function getAfter()
    {
        return $this->after;
    }

    public function hasAfter()
    {
        return isset($this->after);
    }

    public function clearAfter()
    {
        unset($this->after);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation after = 3;</code>
     * @param \Eolymp\Discussion\Post\Translation $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Post\Translation::class);
        $this->after = $var;

        return $this;
    }

}

