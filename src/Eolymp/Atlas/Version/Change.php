<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/version.proto

namespace Eolymp\Atlas\Version;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Version.Change</code>
 */
class Change extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Version.Operation op = 1;</code>
     */
    protected $op = 0;
    /**
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $op
     *     @type string $path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Version.Operation op = 1;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Version.Operation op = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Version\Operation::class);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Change::class, \Eolymp\Atlas\Version_Change::class);

