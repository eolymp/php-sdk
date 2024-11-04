<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/language_service.proto

namespace Eolymp\Executor\ListRuntimeInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.ListRuntimeInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID lang = 2;</code>
     */
    private $lang;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID version = 3;</code>
     */
    private $version;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 4;</code>
     */
    private $name;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool deprecated = 5;</code>
     */
    private $deprecated;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 6;</code>
     */
    private $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $lang
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $version
     *     @type array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $name
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $deprecated
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\LanguageService::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID lang = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID lang = 2;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLang($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->lang = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID version = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID version = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersion($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->version = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool deprecated = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool deprecated = 5;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->deprecated = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 6;</code>
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
class_alias(Filter::class, \Eolymp\Executor\ListRuntimeInput_Filter::class);

