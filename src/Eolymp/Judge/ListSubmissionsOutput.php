<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/submission_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListSubmissionsOutput</code>
 */
class ListSubmissionsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission items = 2;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>string next_page_cursor = 3;</code>
     */
    protected $next_page_cursor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type array<\Eolymp\Judge\Submission>|\Google\Protobuf\Internal\RepeatedField $items
     *     @type string $next_page_cursor
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\SubmissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission items = 2;</code>
     * @param array<\Eolymp\Judge\Submission>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Submission::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_page_cursor = 3;</code>
     * @return string
     */
    public function getNextPageCursor()
    {
        return $this->next_page_cursor;
    }

    /**
     * Generated from protobuf field <code>string next_page_cursor = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_cursor = $var;

        return $this;
    }

}

