<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.ListMessageChangesOutput</code>
 */
class ListMessageChangesOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.ListMessageChangesOutput.Record history = 1;</code>
     */
    private $history;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Discussion\ListMessageChangesOutput\Record>|\Google\Protobuf\Internal\RepeatedField $history
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.ListMessageChangesOutput.Record history = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.ListMessageChangesOutput.Record history = 1;</code>
     * @param array<\Eolymp\Discussion\ListMessageChangesOutput\Record>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHistory($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Discussion\ListMessageChangesOutput\Record::class);
        $this->history = $arr;

        return $this;
    }

}

