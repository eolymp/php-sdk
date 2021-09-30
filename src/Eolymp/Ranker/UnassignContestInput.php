<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.UnassignContestInput</code>
 */
class UnassignContestInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     */
    protected $scoreboard_id = '';
    /**
     * Generated from protobuf field <code>string contest_id = 2;</code>
     */
    protected $contest_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scoreboard_id
     *     @type string $contest_id
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
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

}

