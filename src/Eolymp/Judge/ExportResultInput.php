<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ExportResultInput</code>
 */
class ExportResultInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Mode for fetching score value (see enum description).
     *
     * Generated from protobuf field <code>.eolymp.judge.Score.FetchingMode mode = 2;</code>
     */
    protected $mode = 0;
    /**
     * Time offset allows to fetch score at particular moment in the competition. Time offset is specified as number of
     * seconds since the participant has started the competition. When time offset is 0, the latest score is returned.
     * This value is ignored if mode is not PUNCTUAL.
     *
     * Generated from protobuf field <code>int32 time_offset = 3;</code>
     */
    protected $time_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type int $mode
     *           Mode for fetching score value (see enum description).
     *     @type int $time_offset
     *           Time offset allows to fetch score at particular moment in the competition. Time offset is specified as number of
     *           seconds since the participant has started the competition. When time offset is 0, the latest score is returned.
     *           This value is ignored if mode is not PUNCTUAL.
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
     * Mode for fetching score value (see enum description).
     *
     * Generated from protobuf field <code>.eolymp.judge.Score.FetchingMode mode = 2;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Mode for fetching score value (see enum description).
     *
     * Generated from protobuf field <code>.eolymp.judge.Score.FetchingMode mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Score\FetchingMode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Time offset allows to fetch score at particular moment in the competition. Time offset is specified as number of
     * seconds since the participant has started the competition. When time offset is 0, the latest score is returned.
     * This value is ignored if mode is not PUNCTUAL.
     *
     * Generated from protobuf field <code>int32 time_offset = 3;</code>
     * @return int
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    /**
     * Time offset allows to fetch score at particular moment in the competition. Time offset is specified as number of
     * seconds since the participant has started the competition. When time offset is 0, the latest score is returned.
     * This value is ignored if mode is not PUNCTUAL.
     *
     * Generated from protobuf field <code>int32 time_offset = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->time_offset = $var;

        return $this;
    }

}

