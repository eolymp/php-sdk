<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/runtime/runtime.proto

namespace Eolymp\Runtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.runtime.Runtime</code>
 */
class Runtime extends \Google\Protobuf\Internal\Message
{
    /**
     * Runtime identifier, for example: csharp:5.20.1-mono
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Language identifier, for example: csharp
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     */
    protected $lang = '';
    /**
     * Runtime version, follows docker style version numbers, for example: 5.20.1-mono
     *
     * Generated from protobuf field <code>string version = 3;</code>
     */
    protected $version = '';
    /**
     * Runtime friendly name (without language name), for example: Mono 5.20.
     *
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * Deprecated runtime, means language has newer runtime version
     *
     * Generated from protobuf field <code>bool deprecated = 12;</code>
     */
    protected $deprecated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Runtime identifier, for example: csharp:5.20.1-mono
     *     @type string $lang
     *           Language identifier, for example: csharp
     *     @type string $version
     *           Runtime version, follows docker style version numbers, for example: 5.20.1-mono
     *     @type string $name
     *           Runtime friendly name (without language name), for example: Mono 5.20.
     *     @type bool $deprecated
     *           Deprecated runtime, means language has newer runtime version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Runtime\Runtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Runtime identifier, for example: csharp:5.20.1-mono
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Runtime identifier, for example: csharp:5.20.1-mono
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
     * Language identifier, for example: csharp
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Language identifier, for example: csharp
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

    /**
     * Runtime version, follows docker style version numbers, for example: 5.20.1-mono
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Runtime version, follows docker style version numbers, for example: 5.20.1-mono
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Runtime friendly name (without language name), for example: Mono 5.20.
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Runtime friendly name (without language name), for example: Mono 5.20.
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
     * Deprecated runtime, means language has newer runtime version
     *
     * Generated from protobuf field <code>bool deprecated = 12;</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Deprecated runtime, means language has newer runtime version
     *
     * Generated from protobuf field <code>bool deprecated = 12;</code>
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

