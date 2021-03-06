<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/change.proto

namespace Eolymp\Atlas\Change;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Change.GrantPermission</code>
 */
class GrantPermission extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Permission after = 2;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Permission $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Change::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Permission after = 2;</code>
     * @return \Eolymp\Atlas\Permission
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Permission after = 2;</code>
     * @param \Eolymp\Atlas\Permission $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Permission::class);
        $this->after = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GrantPermission::class, \Eolymp\Atlas\Change_GrantPermission::class);

