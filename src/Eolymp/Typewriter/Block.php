<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace Eolymp\Typewriter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    protected $node;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Typewriter\Block\Paragraph $paragraph
     *     @type \Eolymp\Typewriter\Block\Layout $layout
     *     @type \Eolymp\Typewriter\Block\Code $code
     *     @type \Eolymp\Typewriter\Block\Math $math
     *     @type \Eolymp\Typewriter\Block\Image $image
     *     @type \Eolymp\Typewriter\Block\Heading $heading
     *     @type \Eolymp\Typewriter\Block\PBList $list
     *     @type \Eolymp\Typewriter\Block\Embed $embed
     *     @type \Eolymp\Typewriter\Block\Comment $comment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Block::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Paragraph paragraph = 1;</code>
     * @return \Eolymp\Typewriter\Block\Paragraph
     */
    public function getParagraph()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Paragraph paragraph = 1;</code>
     * @param \Eolymp\Typewriter\Block\Paragraph $var
     * @return $this
     */
    public function setParagraph($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Paragraph::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout layout = 2;</code>
     * @return \Eolymp\Typewriter\Block\Layout
     */
    public function getLayout()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Layout layout = 2;</code>
     * @param \Eolymp\Typewriter\Block\Layout $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Layout::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Code code = 3;</code>
     * @return \Eolymp\Typewriter\Block\Code
     */
    public function getCode()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Code code = 3;</code>
     * @param \Eolymp\Typewriter\Block\Code $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Code::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Math math = 4;</code>
     * @return \Eolymp\Typewriter\Block\Math
     */
    public function getMath()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Math math = 4;</code>
     * @param \Eolymp\Typewriter\Block\Math $var
     * @return $this
     */
    public function setMath($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Math::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Image image = 5;</code>
     * @return \Eolymp\Typewriter\Block\Image
     */
    public function getImage()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Image image = 5;</code>
     * @param \Eolymp\Typewriter\Block\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Image::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Heading heading = 6;</code>
     * @return \Eolymp\Typewriter\Block\Heading
     */
    public function getHeading()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Heading heading = 6;</code>
     * @param \Eolymp\Typewriter\Block\Heading $var
     * @return $this
     */
    public function setHeading($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Heading::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.List list = 7;</code>
     * @return \Eolymp\Typewriter\Block\PBList
     */
    public function getList()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.List list = 7;</code>
     * @param \Eolymp\Typewriter\Block\PBList $var
     * @return $this
     */
    public function setList($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_List::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Embed embed = 8;</code>
     * @return \Eolymp\Typewriter\Block\Embed
     */
    public function getEmbed()
    {
        return $this->readOneof(8);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Embed embed = 8;</code>
     * @param \Eolymp\Typewriter\Block\Embed $var
     * @return $this
     */
    public function setEmbed($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Embed::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Comment comment = 1000;</code>
     * @return \Eolymp\Typewriter\Block\Comment
     */
    public function getComment()
    {
        return $this->readOneof(1000);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Block.Comment comment = 1000;</code>
     * @param \Eolymp\Typewriter\Block\Comment $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Block_Comment::class);
        $this->writeOneof(1000, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getNode()
    {
        return $this->whichOneof("node");
    }

}

