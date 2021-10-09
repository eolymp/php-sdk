<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/universe.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribePermissionInput</code>
 */
class DescribePermissionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     */
    protected $space_id = '';
    /**
     * Generated from protobuf field <code>string user_id = 2;</code>
     */
    protected $user_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $space_id
     *     @type string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Universe::initOnce();
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

    /**
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

}

