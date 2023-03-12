<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/acl.proto

namespace Eolymp\Acl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.acl.Grant</code>
 */
class Grant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string role = 2;</code>
     */
    protected $role = '';
    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>repeated string entitlements = 4;</code>
     */
    private $entitlements;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $role
     *     @type string $user_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $entitlements
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Acl\Acl::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string role = 2;</code>
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Generated from protobuf field <code>string role = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string entitlements = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    /**
     * Generated from protobuf field <code>repeated string entitlements = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntitlements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->entitlements = $arr;

        return $this;
    }

}

