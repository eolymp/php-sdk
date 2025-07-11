<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/violation_service.proto

namespace Eolymp\Judge\ListViolationsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListViolationsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 3;</code>
     */
    private $status;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 5;</code>
     */
    private $type;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString summary = 4;</code>
     */
    private $summary;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool automatic = 10;</code>
     */
    private $automatic;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID participant_id = 6;</code>
     */
    private $participant_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID submission_id = 8;</code>
     */
    private $submission_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID created_by = 7;</code>
     */
    private $created_by;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID confirmed_by = 9;</code>
     */
    private $confirmed_by;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $status
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $type
     *     @type array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $summary
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $automatic
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $participant_id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $submission_id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $created_by
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $confirmed_by
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ViolationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

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
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 5;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString summary = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString summary = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSummary($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->summary = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool automatic = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutomatic()
    {
        return $this->automatic;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool automatic = 10;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutomatic($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->automatic = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID participant_id = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID participant_id = 6;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->participant_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID submission_id = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubmissionId()
    {
        return $this->submission_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID submission_id = 8;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubmissionId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->submission_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID created_by = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID created_by = 7;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreatedBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->created_by = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID confirmed_by = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfirmedBy()
    {
        return $this->confirmed_by;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID confirmed_by = 9;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfirmedBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->confirmed_by = $arr;

        return $this;
    }

}

