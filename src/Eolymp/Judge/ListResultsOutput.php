<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListResultsOutput</code>
 */
class ListResultsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.ResultV2 items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type array<\Eolymp\Judge\ResultV2>|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ScoreService::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.judge.ResultV2 items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.ResultV2 items = 2;</code>
     * @param array<\Eolymp\Judge\ResultV2>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\ResultV2::class);
        $this->items = $arr;

        return $this;
    }

}

