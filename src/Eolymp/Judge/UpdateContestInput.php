<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/contest_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.UpdateContestInput</code>
 */
class UpdateContestInput extends \Google\Protobuf\Internal\Message
{
    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Contest.Patch.Field patch = 3;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest contest = 2;</code>
     */
    protected $contest = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *           specify list of fields to update, if empty all fields are updated
     *     @type string $contest_id
     *     @type \Eolymp\Judge\Contest $contest
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ContestService::initOnce();
        parent::__construct($data);
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Contest.Patch.Field patch = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Contest.Patch.Field patch = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Judge\Contest\Patch\Field::class);
        $this->patch = $arr;

        return $this;
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
     * Generated from protobuf field <code>.eolymp.judge.Contest contest = 2;</code>
     * @return \Eolymp\Judge\Contest|null
     */
    public function getContest()
    {
        return $this->contest;
    }

    public function hasContest()
    {
        return isset($this->contest);
    }

    public function clearContest()
    {
        unset($this->contest);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest contest = 2;</code>
     * @param \Eolymp\Judge\Contest $var
     * @return $this
     */
    public function setContest($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest::class);
        $this->contest = $var;

        return $this;
    }

}

