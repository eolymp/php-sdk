<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.WatchScoreInput</code>
 */
class WatchScoreInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     */
    protected $member_id = '';
    /**
     * Mode for fetching score value (see enum description).
     *
     * Generated from protobuf field <code>.eolymp.judge.Score.FetchingMode mode = 3;</code>
     */
    protected $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $member_id
     *     @type int $mode
     *           Mode for fetching score value (see enum description).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ScoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Mode for fetching score value (see enum description).
     *
     * Generated from protobuf field <code>.eolymp.judge.Score.FetchingMode mode = 3;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Mode for fetching score value (see enum description).
     *
     * Generated from protobuf field <code>.eolymp.judge.Score.FetchingMode mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Score\FetchingMode::class);
        $this->mode = $var;

        return $this;
    }

}

