<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace Eolymp\Typewriter\Block;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Block.Table</code>
 */
class Table extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Table.Header header = 1;</code>
     */
    protected $header = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Block.Table.Row children = 10;</code>
     */
    private $children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $header
     *     @type \Eolymp\Typewriter\Block\Table\Row[]|\Google\Protobuf\Internal\RepeatedField $children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Block::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Table.Header header = 1;</code>
     * @return int
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Table.Header header = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_Table_Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Block.Table.Row children = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Block.Table.Row children = 10;</code>
     * @param \Eolymp\Typewriter\Block\Table\Row[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Typewriter\Block\Table\Row::class);
        $this->children = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Table::class, \Eolymp\Typewriter\Block_Table::class);

