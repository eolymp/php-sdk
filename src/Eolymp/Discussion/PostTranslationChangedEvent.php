<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

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
     * Generated from protobuf field <code>string post_id = 10;</code>
     */
    protected $post_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation before = 2;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation after = 3;</code>
     */
    protected $after = null;
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content reason = 11;</code>
     */
    protected $reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $post_id
     *     @type \Eolymp\Discussion\Post\Translation $before
     *     @type \Eolymp\Discussion\Post\Translation $after
     *     @type \Eolymp\Ecm\Content $reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string post_id = 10;</code>
     * @return string
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Generated from protobuf field <code>string post_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPostId($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_id = $var;

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

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content reason = 11;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    public function hasReason()
    {
        return isset($this->reason);
    }

    public function clearReason()
    {
        unset($this->reason);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content reason = 11;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->reason = $var;

        return $this;
    }

}

