<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/wellknown/expression.proto

namespace Eolymp\Wellknown;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExpressionTimestamp specifies match criteria for a timestamp
 *
 * Generated from protobuf message <code>eolymp.wellknown.ExpressionTimestamp</code>
 */
class ExpressionTimestamp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionTimestamp.Type is = 1;</code>
     */
    protected $is = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $is
     *     @type \Google\Protobuf\Timestamp $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionTimestamp.Type is = 1;</code>
     * @return int
     */
    public function getIs()
    {
        return $this->is;
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionTimestamp.Type is = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIs($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Wellknown\ExpressionTimestamp\Type::class);
        $this->is = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp value = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp value = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->value = $var;

        return $this;
    }

}

