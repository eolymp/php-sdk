<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace Eolymp\Typewriter\Block;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Block.List</code>
 */
class PBList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.List.Style style = 1;</code>
     */
    protected $style = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Block.List.Item children = 10;</code>
     */
    private $children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $style
     *     @type \Eolymp\Typewriter\Block\PBList\Item[]|\Google\Protobuf\Internal\RepeatedField $children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Block::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.List.Style style = 1;</code>
     * @return int
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.List.Style style = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStyle($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_List_Style::class);
        $this->style = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Block.List.Item children = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Block.List.Item children = 10;</code>
     * @param \Eolymp\Typewriter\Block\PBList\Item[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Typewriter\Block\PBList\Item::class);
        $this->children = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PBList::class, \Eolymp\Typewriter\Block_List::class);

