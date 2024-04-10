<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/checker.proto

namespace Eolymp\Executor\Checker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * File defines additional file which might be placed into work directory during compilation or execution
 *
 * Generated from protobuf message <code>eolymp.executor.Checker.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * Path where file should be placed (always relative to the workdir)
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    protected $path = '';
    /**
     * URL to download source file
     *
     * Generated from protobuf field <code>string source_url = 3;</code>
     */
    protected $source_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Path where file should be placed (always relative to the workdir)
     *     @type string $source_url
     *           URL to download source file
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Checker::initOnce();
        parent::__construct($data);
    }

    /**
     * Path where file should be placed (always relative to the workdir)
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path where file should be placed (always relative to the workdir)
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * URL to download source file
     *
     * Generated from protobuf field <code>string source_url = 3;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * URL to download source file
     *
     * Generated from protobuf field <code>string source_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_url = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(File::class, \Eolymp\Executor\Checker_File::class);
