<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge\Contest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Contest.Scoreboard</code>
 */
class Scoreboard extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoreboard.Visibility visibility = 1;</code>
     */
    protected $visibility = 0;
    /**
     * time in seconds before end of the contest when results will be frozen (eg. 3600 means one hour before the end)
     *
     * Generated from protobuf field <code>uint32 freezing_time = 2;</code>
     */
    protected $freezing_time = 0;
    /**
     * a delay in seconds after end of contest that board will remain frozen (eg. 600 means board will remain frozen for 10 minutes after end of contest)
     *
     * Generated from protobuf field <code>int32 unfreeze_delay = 3;</code>
     */
    protected $unfreeze_delay = 0;
    /**
     * Generated from protobuf field <code>uint32 attempt_penalty = 4;</code>
     */
    protected $attempt_penalty = 0;
    /**
     * tie breaker parameter
     *
     * Generated from protobuf field <code>string tie_breaker = 5;</code>
     */
    protected $tie_breaker = '';
    /**
     * hides results in participant UI, to prevent one participant seeing result of another during onsite competitions
     *
     * Generated from protobuf field <code>bool no_spoiler_ui = 6;</code>
     */
    protected $no_spoiler_ui = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $visibility
     *     @type int $freezing_time
     *           time in seconds before end of the contest when results will be frozen (eg. 3600 means one hour before the end)
     *     @type int $unfreeze_delay
     *           a delay in seconds after end of contest that board will remain frozen (eg. 600 means board will remain frozen for 10 minutes after end of contest)
     *     @type int $attempt_penalty
     *     @type string $tie_breaker
     *           tie breaker parameter
     *     @type bool $no_spoiler_ui
     *           hides results in participant UI, to prevent one participant seeing result of another during onsite competitions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoreboard.Visibility visibility = 1;</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoreboard.Visibility visibility = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest_Scoreboard_Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * time in seconds before end of the contest when results will be frozen (eg. 3600 means one hour before the end)
     *
     * Generated from protobuf field <code>uint32 freezing_time = 2;</code>
     * @return int
     */
    public function getFreezingTime()
    {
        return $this->freezing_time;
    }

    /**
     * time in seconds before end of the contest when results will be frozen (eg. 3600 means one hour before the end)
     *
     * Generated from protobuf field <code>uint32 freezing_time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFreezingTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->freezing_time = $var;

        return $this;
    }

    /**
     * a delay in seconds after end of contest that board will remain frozen (eg. 600 means board will remain frozen for 10 minutes after end of contest)
     *
     * Generated from protobuf field <code>int32 unfreeze_delay = 3;</code>
     * @return int
     */
    public function getUnfreezeDelay()
    {
        return $this->unfreeze_delay;
    }

    /**
     * a delay in seconds after end of contest that board will remain frozen (eg. 600 means board will remain frozen for 10 minutes after end of contest)
     *
     * Generated from protobuf field <code>int32 unfreeze_delay = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUnfreezeDelay($var)
    {
        GPBUtil::checkInt32($var);
        $this->unfreeze_delay = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 attempt_penalty = 4;</code>
     * @return int
     */
    public function getAttemptPenalty()
    {
        return $this->attempt_penalty;
    }

    /**
     * Generated from protobuf field <code>uint32 attempt_penalty = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAttemptPenalty($var)
    {
        GPBUtil::checkUint32($var);
        $this->attempt_penalty = $var;

        return $this;
    }

    /**
     * tie breaker parameter
     *
     * Generated from protobuf field <code>string tie_breaker = 5;</code>
     * @return string
     */
    public function getTieBreaker()
    {
        return $this->tie_breaker;
    }

    /**
     * tie breaker parameter
     *
     * Generated from protobuf field <code>string tie_breaker = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTieBreaker($var)
    {
        GPBUtil::checkString($var, True);
        $this->tie_breaker = $var;

        return $this;
    }

    /**
     * hides results in participant UI, to prevent one participant seeing result of another during onsite competitions
     *
     * Generated from protobuf field <code>bool no_spoiler_ui = 6;</code>
     * @return bool
     */
    public function getNoSpoilerUi()
    {
        return $this->no_spoiler_ui;
    }

    /**
     * hides results in participant UI, to prevent one participant seeing result of another during onsite competitions
     *
     * Generated from protobuf field <code>bool no_spoiler_ui = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoSpoilerUi($var)
    {
        GPBUtil::checkBool($var);
        $this->no_spoiler_ui = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Scoreboard::class, \Eolymp\Judge\Contest_Scoreboard::class);

