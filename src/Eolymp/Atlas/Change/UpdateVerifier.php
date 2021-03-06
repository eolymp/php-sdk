<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/change.proto

namespace Eolymp\Atlas\Change;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Change.UpdateVerifier</code>
 */
class UpdateVerifier extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier before = 1;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier after = 2;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Executor\Verifier $before
     *     @type \Eolymp\Executor\Verifier $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Change::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier before = 1;</code>
     * @return \Eolymp\Executor\Verifier
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier before = 1;</code>
     * @param \Eolymp\Executor\Verifier $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Verifier::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier after = 2;</code>
     * @return \Eolymp\Executor\Verifier
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier after = 2;</code>
     * @param \Eolymp\Executor\Verifier $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Verifier::class);
        $this->after = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdateVerifier::class, \Eolymp\Atlas\Change_UpdateVerifier::class);

