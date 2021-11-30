<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace Eolymp\Typewriter\Block;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Block.Heading</code>
 */
class Heading extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Inline children = 10;</code>
     */
    private $children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type \Eolymp\Typewriter\Inline[]|\Google\Protobuf\Internal\RepeatedField $children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Block::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Inline children = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Inline children = 10;</code>
     * @param \Eolymp\Typewriter\Inline[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Typewriter\Inline::class);
        $this->children = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Heading::class, \Eolymp\Typewriter\Block_Heading::class);

