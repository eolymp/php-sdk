<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/discussion_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.DescribeDiscussionInput</code>
 */
class DescribeDiscussionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string discussion_id = 1;</code>
     */
    protected $discussion_id = '';
    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     */
    protected $render = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $discussion_id
     *     @type bool $render
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\DiscussionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string discussion_id = 1;</code>
     * @return string
     */
    public function getDiscussionId()
    {
        return $this->discussion_id;
    }

    /**
     * Generated from protobuf field <code>string discussion_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscussionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->discussion_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRender($var)
    {
        GPBUtil::checkBool($var);
        $this->render = $var;

        return $this;
    }

}
