<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/attribute_service.proto

namespace Eolymp\Community\ListAttributesInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.ListAttributesInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum key = 2;</code>
     */
    private $key;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool hidden = 3;</code>
     */
    private $hidden;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool required = 4;</code>
     */
    private $required;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 5;</code>
     */
    private $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $key
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $hidden
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $required
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AttributeService::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum key = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum key = 2;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKey($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->key = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool hidden = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool hidden = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHidden($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->hidden = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool required = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool required = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequired($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->required = $arr;

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

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Community\ListAttributesInput_Filter::class);

