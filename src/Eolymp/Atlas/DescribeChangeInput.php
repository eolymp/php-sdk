<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeChangeInput</code>
 */
class DescribeChangeInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string change_id = 1;</code>
     */
    protected $change_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $change_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string change_id = 1;</code>
     * @return string
     */
    public function getChangeId()
    {
        return $this->change_id;
    }

    /**
     * Generated from protobuf field <code>string change_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChangeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->change_id = $var;

        return $this;
    }

}

