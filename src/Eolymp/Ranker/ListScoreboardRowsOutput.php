<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.ListScoreboardRowsOutput</code>
 */
class ListScoreboardRowsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Row items = 2;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>bool frozen = 10;</code>
     */
    protected $frozen = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type \Eolymp\Ranker\Scoreboard\Row[]|\Google\Protobuf\Internal\RepeatedField $items
     *     @type bool $frozen
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Ranker::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Row items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Row items = 2;</code>
     * @param \Eolymp\Ranker\Scoreboard\Row[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Ranker\Scoreboard\Row::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool frozen = 10;</code>
     * @return bool
     */
    public function getFrozen()
    {
        return $this->frozen;
    }

    /**
     * Generated from protobuf field <code>bool frozen = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setFrozen($var)
    {
        GPBUtil::checkBool($var);
        $this->frozen = $var;

        return $this;
    }

}

