<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/thread_endpoint.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.DescribeThreadOutput</code>
 */
class DescribeThreadOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Thread thread = 1;</code>
     */
    protected $thread = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Discussion\Thread $thread
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\ThreadEndpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Thread thread = 1;</code>
     * @return \Eolymp\Discussion\Thread
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Thread thread = 1;</code>
     * @param \Eolymp\Discussion\Thread $var
     * @return $this
     */
    public function setThread($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Thread::class);
        $this->thread = $var;

        return $this;
    }

}

