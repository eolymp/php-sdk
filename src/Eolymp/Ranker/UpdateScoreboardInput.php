<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.UpdateScoreboardInput</code>
 */
class UpdateScoreboardInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.UpdateScoreboardInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string scoreboard_id = 2;</code>
     */
    protected $scoreboard_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard scoreboard = 3;</code>
     */
    protected $scoreboard = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $patch
     *     @type string $scoreboard_id
     *     @type \Eolymp\Ranker\Scoreboard $scoreboard
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Ranker::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.UpdateScoreboardInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.UpdateScoreboardInput.Patch patch = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Ranker\UpdateScoreboardInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 2;</code>
     * @return string
     */
    public function getScoreboardId()
    {
        return $this->scoreboard_id;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 2;</code>
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
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard scoreboard = 3;</code>
     * @return \Eolymp\Ranker\Scoreboard
     */
    public function getScoreboard()
    {
        return $this->scoreboard;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard scoreboard = 3;</code>
     * @param \Eolymp\Ranker\Scoreboard $var
     * @return $this
     */
    public function setScoreboard($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ranker\Scoreboard::class);
        $this->scoreboard = $var;

        return $this;
    }

}

