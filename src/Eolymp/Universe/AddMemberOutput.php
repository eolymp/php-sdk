<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/universe.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.AddMemberOutput</code>
 */
class AddMemberOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    protected $member_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $member_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Universe::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

}

