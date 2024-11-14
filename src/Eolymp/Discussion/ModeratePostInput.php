<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.ModeratePostInput</code>
 */
class ModeratePostInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     */
    protected $post_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.discussion.ModeratePostInput.Outcome outcome = 2;</code>
     */
    protected $outcome = 0;
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
     *     @type int $outcome
     *     @type \Eolymp\Ecm\Content $reason
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

    /**
     * Generated from protobuf field <code>.eolymp.discussion.ModeratePostInput.Outcome outcome = 2;</code>
     * @return int
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.ModeratePostInput.Outcome outcome = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Discussion\ModeratePostInput\Outcome::class);
        $this->outcome = $var;

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
