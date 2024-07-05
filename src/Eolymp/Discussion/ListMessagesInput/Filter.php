<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message_service.proto

namespace Eolymp\Discussion\ListMessagesInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.ListMessagesInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 1;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID reply_to = 3;</code>
     */
    private $reply_to;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 4;</code>
     */
    private $member_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID thread_id = 5;</code>
     */
    private $thread_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt vote_count = 6;</code>
     */
    private $vote_count;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt reply_count = 7;</code>
     */
    private $reply_count;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp posted_at = 8;</code>
     */
    private $posted_at;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $reply_to
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $member_id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $thread_id
     *     @type array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $vote_count
     *     @type array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $reply_count
     *     @type array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $posted_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID reply_to = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID reply_to = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplyTo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->reply_to = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMemberId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->member_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID thread_id = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThreadId()
    {
        return $this->thread_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID thread_id = 5;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThreadId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->thread_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt vote_count = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVoteCount()
    {
        return $this->vote_count;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt vote_count = 6;</code>
     * @param array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVoteCount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->vote_count = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt reply_count = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplyCount()
    {
        return $this->reply_count;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt reply_count = 7;</code>
     * @param array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplyCount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->reply_count = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp posted_at = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp posted_at = 8;</code>
     * @param array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPostedAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->posted_at = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Discussion\ListMessagesInput_Filter::class);

