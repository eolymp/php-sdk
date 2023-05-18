<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.UpdateVerifierInput</code>
 */
class UpdateVerifierInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier verifier = 2;</code>
     */
    protected $verifier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type \Eolymp\Executor\Verifier $verifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TestingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier verifier = 2;</code>
     * @return \Eolymp\Executor\Verifier
     */
    public function getVerifier()
    {
        return $this->verifier;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Verifier verifier = 2;</code>
     * @param \Eolymp\Executor\Verifier $var
     * @return $this
     */
    public function setVerifier($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Verifier::class);
        $this->verifier = $var;

        return $this;
    }

}

