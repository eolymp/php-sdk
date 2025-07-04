<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/attribute.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.Attribute</code>
 */
class Attribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 4;</code>
     */
    protected $id = '';
    /**
     * unique field identifier (should be unique within the form, not globally unique)
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * label, normally displayed above the field
     *
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * help message, normally displayed right below the field
     *
     * Generated from protobuf field <code>string help = 3;</code>
     */
    protected $help = '';
    /**
     * type of the field
     *
     * Generated from protobuf field <code>.eolymp.community.Attribute.Type type = 20;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>uint32 index = 21;</code>
     */
    protected $index = 0;
    /**
     * value is required (see field types for details)
     *
     * Generated from protobuf field <code>bool required = 31;</code>
     */
    protected $required = false;
    /**
     * only administrator can change the value (member can be set during registration)
     *
     * Generated from protobuf field <code>bool readonly = 33;</code>
     */
    protected $readonly = false;
    /**
     * field is hidden (only visible to admin), deprecated, use visibility instead
     *
     * Generated from protobuf field <code>bool hidden = 32;</code>
     */
    protected $hidden = false;
    /**
     * Generated from protobuf field <code>.eolymp.community.Attribute.Visibility visibility = 34;</code>
     */
    protected $visibility = 0;
    /**
     * validation
     *
     * Generated from protobuf field <code>string regexp = 100;</code>
     */
    protected $regexp = '';
    /**
     * min value validation (see field types for details)
     *
     * Generated from protobuf field <code>int32 min = 101;</code>
     */
    protected $min = 0;
    /**
     * max value validation (see field types for details)
     *
     * Generated from protobuf field <code>int32 max = 102;</code>
     */
    protected $max = 0;
    /**
     * possible choices validation (see field types for details)
     *
     * Generated from protobuf field <code>repeated string choices = 103;</code>
     */
    private $choices;
    /**
     * restrict region selector to a specific country
     *
     * Generated from protobuf field <code>string country = 104;</code>
     */
    protected $country = '';
    /**
     * additional constraints
     *
     * Generated from protobuf field <code>repeated string constraints = 105;</code>
     */
    private $constraints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $key
     *           unique field identifier (should be unique within the form, not globally unique)
     *     @type string $label
     *           label, normally displayed above the field
     *     @type string $help
     *           help message, normally displayed right below the field
     *     @type int $type
     *           type of the field
     *     @type int $index
     *     @type bool $required
     *           value is required (see field types for details)
     *     @type bool $readonly
     *           only administrator can change the value (member can be set during registration)
     *     @type bool $hidden
     *           field is hidden (only visible to admin), deprecated, use visibility instead
     *     @type int $visibility
     *     @type string $regexp
     *           validation
     *     @type int $min
     *           min value validation (see field types for details)
     *     @type int $max
     *           max value validation (see field types for details)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $choices
     *           possible choices validation (see field types for details)
     *     @type string $country
     *           restrict region selector to a specific country
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $constraints
     *           additional constraints
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\Attribute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * unique field identifier (should be unique within the form, not globally unique)
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * unique field identifier (should be unique within the form, not globally unique)
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * label, normally displayed above the field
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * label, normally displayed above the field
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * help message, normally displayed right below the field
     *
     * Generated from protobuf field <code>string help = 3;</code>
     * @return string
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * help message, normally displayed right below the field
     *
     * Generated from protobuf field <code>string help = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHelp($var)
    {
        GPBUtil::checkString($var, True);
        $this->help = $var;

        return $this;
    }

    /**
     * type of the field
     *
     * Generated from protobuf field <code>.eolymp.community.Attribute.Type type = 20;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * type of the field
     *
     * Generated from protobuf field <code>.eolymp.community.Attribute.Type type = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Community\Attribute\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 21;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * value is required (see field types for details)
     *
     * Generated from protobuf field <code>bool required = 31;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * value is required (see field types for details)
     *
     * Generated from protobuf field <code>bool required = 31;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * only administrator can change the value (member can be set during registration)
     *
     * Generated from protobuf field <code>bool readonly = 33;</code>
     * @return bool
     */
    public function getReadonly()
    {
        return $this->readonly;
    }

    /**
     * only administrator can change the value (member can be set during registration)
     *
     * Generated from protobuf field <code>bool readonly = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setReadonly($var)
    {
        GPBUtil::checkBool($var);
        $this->readonly = $var;

        return $this;
    }

    /**
     * field is hidden (only visible to admin), deprecated, use visibility instead
     *
     * Generated from protobuf field <code>bool hidden = 32;</code>
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * field is hidden (only visible to admin), deprecated, use visibility instead
     *
     * Generated from protobuf field <code>bool hidden = 32;</code>
     * @param bool $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Attribute.Visibility visibility = 34;</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Attribute.Visibility visibility = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Community\Attribute\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * validation
     *
     * Generated from protobuf field <code>string regexp = 100;</code>
     * @return string
     */
    public function getRegexp()
    {
        return $this->regexp;
    }

    /**
     * validation
     *
     * Generated from protobuf field <code>string regexp = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setRegexp($var)
    {
        GPBUtil::checkString($var, True);
        $this->regexp = $var;

        return $this;
    }

    /**
     * min value validation (see field types for details)
     *
     * Generated from protobuf field <code>int32 min = 101;</code>
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * min value validation (see field types for details)
     *
     * Generated from protobuf field <code>int32 min = 101;</code>
     * @param int $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkInt32($var);
        $this->min = $var;

        return $this;
    }

    /**
     * max value validation (see field types for details)
     *
     * Generated from protobuf field <code>int32 max = 102;</code>
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * max value validation (see field types for details)
     *
     * Generated from protobuf field <code>int32 max = 102;</code>
     * @param int $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkInt32($var);
        $this->max = $var;

        return $this;
    }

    /**
     * possible choices validation (see field types for details)
     *
     * Generated from protobuf field <code>repeated string choices = 103;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * possible choices validation (see field types for details)
     *
     * Generated from protobuf field <code>repeated string choices = 103;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChoices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->choices = $arr;

        return $this;
    }

    /**
     * restrict region selector to a specific country
     *
     * Generated from protobuf field <code>string country = 104;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * restrict region selector to a specific country
     *
     * Generated from protobuf field <code>string country = 104;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * additional constraints
     *
     * Generated from protobuf field <code>repeated string constraints = 105;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * additional constraints
     *
     * Generated from protobuf field <code>repeated string constraints = 105;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->constraints = $arr;

        return $this;
    }

}

