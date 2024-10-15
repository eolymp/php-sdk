<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeReplyInput</code>
 */
class DescribeReplyInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     */
    protected $ticket_id = '';
    /**
     * Generated from protobuf field <code>string reply_id = 2;</code>
     */
    protected $reply_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Reply.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticket_id
     *     @type string $reply_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\TicketService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticket_id;
    }

    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticket_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reply_id = 2;</code>
     * @return string
     */
    public function getReplyId()
    {
        return $this->reply_id;
    }

    /**
     * Generated from protobuf field <code>string reply_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReplyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Reply.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Reply.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Judge\Reply\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

