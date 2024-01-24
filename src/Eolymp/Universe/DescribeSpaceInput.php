<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribeSpaceInput</code>
 */
class DescribeSpaceInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     */
    protected $space_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $space_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\SpaceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     * @return string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->space_id = $var;

        return $this;
    }

}

