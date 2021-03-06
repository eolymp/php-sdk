<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge\ListTicketsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListTicketsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID contest_id = 2;</code>
     */
    private $contest_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID participant_id = 3;</code>
     */
    private $participant_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read_by_participant = 4;</code>
     */
    private $is_read_by_participant;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read_by_owner = 5;</code>
     */
    private $is_read_by_owner;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_open = 6;</code>
     */
    private $is_open;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool own = 7;</code>
     */
    private $own;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $contest_id
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $participant_id
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_read_by_participant
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_read_by_owner
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_open
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $own
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID contest_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID contest_id = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContestId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->contest_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID participant_id = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID participant_id = 3;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->participant_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read_by_participant = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsReadByParticipant()
    {
        return $this->is_read_by_participant;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read_by_participant = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsReadByParticipant($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_read_by_participant = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read_by_owner = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsReadByOwner()
    {
        return $this->is_read_by_owner;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read_by_owner = 5;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsReadByOwner($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_read_by_owner = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_open = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_open = 6;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsOpen($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_open = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool own = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOwn()
    {
        return $this->own;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool own = 7;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOwn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->own = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Judge\ListTicketsInput_Filter::class);

