<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/support.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.DescribeCommentOutput</code>
 */
class DescribeCommentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment comment = 1;</code>
     */
    protected $comment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Helpdesk\Ticket\Comment $comment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Support::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment comment = 1;</code>
     * @return \Eolymp\Helpdesk\Ticket\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment comment = 1;</code>
     * @param \Eolymp\Helpdesk\Ticket\Comment $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\Ticket_Comment::class);
        $this->comment = $var;

        return $this;
    }

}

