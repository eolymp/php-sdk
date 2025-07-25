<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/wellknown/expression.proto

namespace Eolymp\Wellknown;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExpressionID specifies match criteria for unique identifier
 *
 * Generated from protobuf message <code>eolymp.wellknown.ExpressionID</code>
 */
class ExpressionID extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionID.Type is = 1;</code>
     */
    protected $is = 0;
    /**
     * Generated from protobuf field <code>string value = 2;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $is
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionID.Type is = 1;</code>
     * @return int
     */
    public function getIs()
    {
        return $this->is;
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.ExpressionID.Type is = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIs($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Wellknown\ExpressionID\Type::class);
        $this->is = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

