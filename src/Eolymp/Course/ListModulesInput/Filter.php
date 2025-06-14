<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/course/module_service.proto

namespace Eolymp\Course\ListModulesInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.ListModulesInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool draft = 2;</code>
     */
    private $draft;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool extra = 3;</code>
     */
    private $extra;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool graded = 4;</code>
     */
    private $graded;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt weight = 5;</code>
     */
    private $weight;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $draft
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $extra
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $graded
     *     @type array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $weight
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ModuleService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool draft = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool draft = 2;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDraft($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->draft = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool extra = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool extra = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->extra = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool graded = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGraded()
    {
        return $this->graded;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool graded = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGraded($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->graded = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt weight = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt weight = 5;</code>
     * @param array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeight($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->weight = $arr;

        return $this;
    }

}

