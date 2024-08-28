<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/script.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Script</code>
 */
class Script extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Secret means code and configuration must not be exposed to users
     *
     * Generated from protobuf field <code>bool secret = 7;</code>
     */
    protected $secret = false;
    /**
     * The runtime to execute the script
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     */
    protected $runtime = '';
    /**
     * Source code for script
     *
     * Generated from protobuf field <code>string source_url = 11;</code>
     */
    protected $source_url = '';
    /**
     * Additional files placed into workdir during compilation and execution
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.File files = 20;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type bool $secret
     *           Secret means code and configuration must not be exposed to users
     *     @type string $runtime
     *           The runtime to execute the script
     *     @type string $source_url
     *           Source code for script
     *     @type array<\Eolymp\Executor\File>|\Google\Protobuf\Internal\RepeatedField $files
     *           Additional files placed into workdir during compilation and execution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Script::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Secret means code and configuration must not be exposed to users
     *
     * Generated from protobuf field <code>bool secret = 7;</code>
     * @return bool
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Secret means code and configuration must not be exposed to users
     *
     * Generated from protobuf field <code>bool secret = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkBool($var);
        $this->secret = $var;

        return $this;
    }

    /**
     * The runtime to execute the script
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * The runtime to execute the script
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Source code for script
     *
     * Generated from protobuf field <code>string source_url = 11;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * Source code for script
     *
     * Generated from protobuf field <code>string source_url = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_url = $var;

        return $this;
    }

    /**
     * Additional files placed into workdir during compilation and execution
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.File files = 20;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Additional files placed into workdir during compilation and execution
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.File files = 20;</code>
     * @param array<\Eolymp\Executor\File>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\File::class);
        $this->files = $arr;

        return $this;
    }

}
