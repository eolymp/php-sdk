<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/participant_service.proto

namespace Eolymp\Judge\ListParticipantsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * complex filters to further narrow down the search
 *
 * Generated from protobuf message <code>eolymp.judge.ListParticipantsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 2;</code>
     */
    private $member_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 8;</code>
     */
    private $name;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 3;</code>
     */
    private $status;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 4;</code>
     */
    private $score;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat penalty = 5;</code>
     */
    private $penalty;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp started_at = 6;</code>
     */
    private $started_at;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp complete_at = 7;</code>
     */
    private $complete_at;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $member_id
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $name
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $status
     *     @type \Eolymp\Wellknown\ExpressionFloat[]|\Google\Protobuf\Internal\RepeatedField $score
     *     @type \Eolymp\Wellknown\ExpressionFloat[]|\Google\Protobuf\Internal\RepeatedField $penalty
     *     @type \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $started_at
     *     @type \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $complete_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ParticipantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMemberId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->member_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 8;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 3;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionFloat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScore($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionFloat::class);
        $this->score = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat penalty = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat penalty = 5;</code>
     * @param \Eolymp\Wellknown\ExpressionFloat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPenalty($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionFloat::class);
        $this->penalty = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp started_at = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp started_at = 6;</code>
     * @param \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStartedAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->started_at = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp complete_at = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompleteAt()
    {
        return $this->complete_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp complete_at = 7;</code>
     * @param \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompleteAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->complete_at = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Judge\ListParticipantsInput_Filter::class);

