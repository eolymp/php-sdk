<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/submission_service.proto

namespace Eolymp\Course\ListSubmissionsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.ListSubmissionsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID user_id = 3;</code>
     */
    private $user_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 9;</code>
     */
    private $member_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID material_id = 11;</code>
     */
    private $material_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp submitted_at = 4;</code>
     */
    private $submitted_at;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum runtime = 5;</code>
     */
    private $runtime;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 6;</code>
     */
    private $status;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum verdict = 10;</code>
     */
    private $verdict;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 7;</code>
     */
    private $score;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat percentage = 8;</code>
     */
    private $percentage;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $user_id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $member_id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $material_id
     *     @type array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $submitted_at
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $runtime
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $status
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $verdict
     *     @type array<\Eolymp\Wellknown\ExpressionFloat>|\Google\Protobuf\Internal\RepeatedField $score
     *     @type array<\Eolymp\Wellknown\ExpressionFloat>|\Google\Protobuf\Internal\RepeatedField $percentage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\SubmissionService::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID user_id = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID user_id = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->user_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID member_id = 9;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMemberId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->member_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID material_id = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMaterialId()
    {
        return $this->material_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID material_id = 11;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMaterialId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->material_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp submitted_at = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubmittedAt()
    {
        return $this->submitted_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp submitted_at = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubmittedAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->submitted_at = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum runtime = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum runtime = 5;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuntime($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->runtime = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 6;</code>
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum verdict = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVerdict()
    {
        return $this->verdict;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum verdict = 10;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVerdict($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->verdict = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 7;</code>
     * @param array<\Eolymp\Wellknown\ExpressionFloat>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScore($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionFloat::class);
        $this->score = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat percentage = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat percentage = 8;</code>
     * @param array<\Eolymp\Wellknown\ExpressionFloat>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPercentage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionFloat::class);
        $this->percentage = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Course\ListSubmissionsInput_Filter::class);

