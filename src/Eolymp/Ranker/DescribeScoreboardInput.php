<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.DescribeScoreboardInput</code>
 */
class DescribeScoreboardInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     */
    protected $scoreboard_id = '';
    /**
     * Generated from protobuf field <code>string scoreboard_key = 2;</code>
     */
    protected $scoreboard_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scoreboard_id
     *     @type string $scoreboard_key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Ranker::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     * @return string
     */
    public function getScoreboardId()
    {
        return $this->scoreboard_id;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScoreboardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->scoreboard_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_key = 2;</code>
     * @return string
     */
    public function getScoreboardKey()
    {
        return $this->scoreboard_key;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScoreboardKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->scoreboard_key = $var;

        return $this;
    }

}

