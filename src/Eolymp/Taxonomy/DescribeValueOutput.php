<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/enum_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.DescribeValueOutput</code>
 */
class DescribeValueOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Value value = 1;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Taxonomy\Value $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\EnumService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Value value = 1;</code>
     * @return \Eolymp\Taxonomy\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Value value = 1;</code>
     * @param \Eolymp\Taxonomy\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Taxonomy\Value::class);
        $this->value = $var;

        return $this;
    }

}

