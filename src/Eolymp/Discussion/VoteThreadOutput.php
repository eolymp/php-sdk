<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/thread_endpoint.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.VoteThreadOutput</code>
 */
class VoteThreadOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 vote_count = 1;</code>
     */
    protected $vote_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $vote_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\ThreadEndpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 vote_count = 1;</code>
     * @return int
     */
    public function getVoteCount()
    {
        return $this->vote_count;
    }

    /**
     * Generated from protobuf field <code>int32 vote_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVoteCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->vote_count = $var;

        return $this;
    }

}
