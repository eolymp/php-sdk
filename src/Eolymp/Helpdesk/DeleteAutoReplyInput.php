<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/support.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.DeleteAutoReplyInput</code>
 */
class DeleteAutoReplyInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string reply_id = 1;</code>
     */
    protected $reply_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reply_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Support::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string reply_id = 1;</code>
     * @return string
     */
    public function getReplyId()
    {
        return $this->reply_id;
    }

    /**
     * Generated from protobuf field <code>string reply_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReplyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply_id = $var;

        return $this;
    }

}

