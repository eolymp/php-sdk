<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace Eolymp\Typewriter\Block;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Block.Layout</code>
 */
class Layout extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Direction direction = 1;</code>
     */
    protected $direction = 0;
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment align_items = 10;</code>
     */
    protected $align_items = 0;
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment align_content = 11;</code>
     */
    protected $align_content = 0;
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment justify_items = 12;</code>
     */
    protected $justify_items = 0;
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment justify_content = 13;</code>
     */
    protected $justify_content = 0;
    /**
     * Generated from protobuf field <code>uint32 gap = 20;</code>
     */
    protected $gap = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 padding = 21;</code>
     */
    private $padding;
    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Container children = 100;</code>
     */
    private $children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $direction
     *     @type int $align_items
     *     @type int $align_content
     *     @type int $justify_items
     *     @type int $justify_content
     *     @type int $gap
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $padding
     *     @type \Eolymp\Typewriter\Container[]|\Google\Protobuf\Internal\RepeatedField $children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Block::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Direction direction = 1;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Direction direction = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_Layout_Direction::class);
        $this->direction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment align_items = 10;</code>
     * @return int
     */
    public function getAlignItems()
    {
        return $this->align_items;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment align_items = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setAlignItems($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_Layout_Alignment::class);
        $this->align_items = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment align_content = 11;</code>
     * @return int
     */
    public function getAlignContent()
    {
        return $this->align_content;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment align_content = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAlignContent($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_Layout_Alignment::class);
        $this->align_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment justify_items = 12;</code>
     * @return int
     */
    public function getJustifyItems()
    {
        return $this->justify_items;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment justify_items = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setJustifyItems($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_Layout_Alignment::class);
        $this->justify_items = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment justify_content = 13;</code>
     * @return int
     */
    public function getJustifyContent()
    {
        return $this->justify_content;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout.Alignment justify_content = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setJustifyContent($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Typewriter\Block_Layout_Alignment::class);
        $this->justify_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gap = 20;</code>
     * @return int
     */
    public function getGap()
    {
        return $this->gap;
    }

    /**
     * Generated from protobuf field <code>uint32 gap = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setGap($var)
    {
        GPBUtil::checkUint32($var);
        $this->gap = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 padding = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 padding = 21;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPadding($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->padding = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Container children = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.typewriter.Container children = 100;</code>
     * @param \Eolymp\Typewriter\Container[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Typewriter\Container::class);
        $this->children = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Layout::class, \Eolymp\Typewriter\Block_Layout::class);
