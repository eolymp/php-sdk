<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/universe.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribeSpaceOutput</code>
 */
class DescribeSpaceOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.universe.Space space = 1;</code>
     */
    protected $space = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Universe\Space $space
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Universe::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space space = 1;</code>
     * @return \Eolymp\Universe\Space
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Space space = 1;</code>
     * @param \Eolymp\Universe\Space $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Space::class);
        $this->space = $var;

        return $this;
    }

}
