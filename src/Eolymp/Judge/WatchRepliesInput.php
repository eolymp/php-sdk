<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.WatchRepliesInput</code>
 */
class WatchRepliesInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     */
    protected $ticket_id = '';
    /**
     * optionally, id of the last reply already received by client
     *
     * Generated from protobuf field <code>string cursor = 2;</code>
     */
    protected $cursor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticket_id
     *     @type string $cursor
     *           optionally, id of the last reply already received by client
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
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
     * optionally, id of the last reply already received by client
     *
     * Generated from protobuf field <code>string cursor = 2;</code>
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * optionally, id of the last reply already received by client
     *
     * Generated from protobuf field <code>string cursor = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->cursor = $var;

        return $this;
    }

}

