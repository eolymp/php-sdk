<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/script.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Script provides configuration for an executable program
 *
 * Generated from protobuf message <code>eolymp.executor.Script</code>
 */
class Script extends \Google\Protobuf\Internal\Message
{
    /**
     * Script name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Programming language in which script is written
     *
     * Generated from protobuf field <code>string runtime = 2;</code>
     */
    protected $runtime = '';
    /**
     * Source code for script
     *
     * Generated from protobuf field <code>string source_url = 8;</code>
     */
    protected $source_url = '';
    /**
     * Additional files placed into workdir during compilation and execution
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.File files = 10;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Script name
     *     @type string $runtime
     *           Programming language in which script is written
     *     @type string $source_url
     *           Source code for script
     *     @type array<\Eolymp\Executor\File>|\Google\Protobuf\Internal\RepeatedField $files
     *           Additional files placed into workdir during compilation and execution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Script::initOnce();
        parent::__construct($data);
    }

    /**
     * Script name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Script name
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Programming language in which script is written
     *
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Programming language in which script is written
     *
     * Generated from protobuf field <code>string runtime = 2;</code>
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
     * Generated from protobuf field <code>string source_url = 8;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * Source code for script
     *
     * Generated from protobuf field <code>string source_url = 8;</code>
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
     * Generated from protobuf field <code>repeated .eolymp.executor.File files = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Additional files placed into workdir during compilation and execution
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.File files = 10;</code>
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
