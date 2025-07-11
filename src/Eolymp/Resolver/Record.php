<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/resolver/resolver.proto

namespace Eolymp\Resolver;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.resolver.Record</code>
 */
class Record extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.resolver.Record.Target target = 20;</code>
     */
    protected $target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Resolver\Record\Target $target
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Resolver\Resolver::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.resolver.Record.Target target = 20;</code>
     * @return \Eolymp\Resolver\Record\Target|null
     */
    public function getTarget()
    {
        return $this->target;
    }

    public function hasTarget()
    {
        return isset($this->target);
    }

    public function clearTarget()
    {
        unset($this->target);
    }

    /**
     * Generated from protobuf field <code>.eolymp.resolver.Record.Target target = 20;</code>
     * @param \Eolymp\Resolver\Record\Target $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Resolver\Record\Target::class);
        $this->target = $var;

        return $this;
    }

}

