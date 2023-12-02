<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/events.proto

namespace Eolymp\Acl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.acl.PermissionChangeRecord</code>
 */
class PermissionChangeRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.acl.PermissionChangeRecord.Operation op = 1;</code>
     */
    protected $op = 0;
    /**
     * Generated from protobuf field <code>string space_id = 2;</code>
     */
    protected $space_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.acl.Permission permission = 3;</code>
     */
    protected $permission = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $op
     *     @type string $space_id
     *     @type \Eolymp\Acl\Permission $permission
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Acl\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.acl.PermissionChangeRecord.Operation op = 1;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>.eolymp.acl.PermissionChangeRecord.Operation op = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Acl\PermissionChangeRecord_Operation::class);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string space_id = 2;</code>
     * @return string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Generated from protobuf field <code>string space_id = 2;</code>
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
     * Generated from protobuf field <code>.eolymp.acl.Permission permission = 3;</code>
     * @return \Eolymp\Acl\Permission
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Generated from protobuf field <code>.eolymp.acl.Permission permission = 3;</code>
     * @param \Eolymp\Acl\Permission $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Acl\Permission::class);
        $this->permission = $var;

        return $this;
    }

}

