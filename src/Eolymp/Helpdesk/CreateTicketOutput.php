<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/support.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.CreateTicketOutput</code>
 */
class CreateTicketOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     */
    protected $ticket_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticket_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Support::initOnce();
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

}

