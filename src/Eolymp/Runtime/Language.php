<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/runtime/language.proto

namespace Eolymp\Runtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.runtime.Language</code>
 */
class Language extends \Google\Protobuf\Internal\Message
{
    /**
     * Language unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Human friendly name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.eolymp.runtime.Language.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * Deprecated, means this language should be avoided
     *
     * Generated from protobuf field <code>bool deprecated = 11;</code>
     */
    protected $deprecated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Language unique identifier
     *     @type string $name
     *           Human friendly name
     *     @type int $type
     *     @type bool $deprecated
     *           Deprecated, means this language should be avoided
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Runtime\Language::initOnce();
        parent::__construct($data);
    }

    /**
     * Language unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Language unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
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
     * Human friendly name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Human friendly name
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.runtime.Language.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.runtime.Language.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Runtime\Language\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Deprecated, means this language should be avoided
     *
     * Generated from protobuf field <code>bool deprecated = 11;</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Deprecated, means this language should be avoided
     *
     * Generated from protobuf field <code>bool deprecated = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;

        return $this;
    }

}

