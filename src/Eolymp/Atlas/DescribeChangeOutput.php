<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeChangeOutput</code>
 */
class DescribeChangeOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Change change = 1;</code>
     */
    protected $change = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Change $change
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Change change = 1;</code>
     * @return \Eolymp\Atlas\Change
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Change change = 1;</code>
     * @param \Eolymp\Atlas\Change $var
     * @return $this
     */
    public function setChange($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Change::class);
        $this->change = $var;

        return $this;
    }

}

