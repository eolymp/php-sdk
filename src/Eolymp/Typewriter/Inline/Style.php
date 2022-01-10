<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/inline.proto

namespace Eolymp\Typewriter\Inline;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.Inline.Style</code>
 */
class Style extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool bold = 1;</code>
     */
    protected $bold = false;
    /**
     * Generated from protobuf field <code>bool italic = 2;</code>
     */
    protected $italic = false;
    /**
     * Generated from protobuf field <code>bool underline = 3;</code>
     */
    protected $underline = false;
    /**
     * Generated from protobuf field <code>bool strikethrough = 4;</code>
     */
    protected $strikethrough = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $bold
     *     @type bool $italic
     *     @type bool $underline
     *     @type bool $strikethrough
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Inline::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool bold = 1;</code>
     * @return bool
     */
    public function getBold()
    {
        return $this->bold;
    }

    /**
     * Generated from protobuf field <code>bool bold = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBold($var)
    {
        GPBUtil::checkBool($var);
        $this->bold = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool italic = 2;</code>
     * @return bool
     */
    public function getItalic()
    {
        return $this->italic;
    }

    /**
     * Generated from protobuf field <code>bool italic = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setItalic($var)
    {
        GPBUtil::checkBool($var);
        $this->italic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool underline = 3;</code>
     * @return bool
     */
    public function getUnderline()
    {
        return $this->underline;
    }

    /**
     * Generated from protobuf field <code>bool underline = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUnderline($var)
    {
        GPBUtil::checkBool($var);
        $this->underline = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool strikethrough = 4;</code>
     * @return bool
     */
    public function getStrikethrough()
    {
        return $this->strikethrough;
    }

    /**
     * Generated from protobuf field <code>bool strikethrough = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setStrikethrough($var)
    {
        GPBUtil::checkBool($var);
        $this->strikethrough = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Style::class, \Eolymp\Typewriter\Inline_Style::class);

