<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/inline.proto

namespace Eolymp\Typewriter\Inline;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Inline.Text</code>
 */
class Text extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string str = 1;</code>
     */
    protected $str = '';
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Inline.Style style = 2;</code>
     */
    protected $style = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $str
     *     @type \Eolymp\Typewriter\Inline\Style $style
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Inline::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string str = 1;</code>
     * @return string
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Generated from protobuf field <code>string str = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->str = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Inline.Style style = 2;</code>
     * @return \Eolymp\Typewriter\Inline\Style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Inline.Style style = 2;</code>
     * @param \Eolymp\Typewriter\Inline\Style $var
     * @return $this
     */
    public function setStyle($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Inline_Style::class);
        $this->style = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Text::class, \Eolymp\Typewriter\Inline_Text::class);

