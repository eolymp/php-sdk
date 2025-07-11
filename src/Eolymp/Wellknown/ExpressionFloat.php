<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/wellknown/expression.proto

namespace Eolymp\Wellknown;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExpressionFloat specifies match criteria for an floateger
 *
 * Generated from protobuf message <code>eolymp.wellknown.ExpressionFloat</code>
 */
class ExpressionFloat extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionFloat.Type is = 1;</code>
     */
    protected $is = 0;
    /**
     * Generated from protobuf field <code>float value = 2;</code>
     */
    protected $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $is
     *     @type float $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionFloat.Type is = 1;</code>
     * @return int
     */
    public function getIs()
    {
        return $this->is;
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionFloat.Type is = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIs($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Wellknown\ExpressionFloat\Type::class);
        $this->is = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float value = 2;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>float value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->value = $var;

        return $this;
    }

}

