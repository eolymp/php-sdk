<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.CreateProblemInput</code>
 */
class CreateProblemInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem problem = 1;</code>
     */
    protected $problem = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Problem $problem
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem problem = 1;</code>
     * @return \Eolymp\Atlas\Problem
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem problem = 1;</code>
     * @param \Eolymp\Atlas\Problem $var
     * @return $this
     */
    public function setProblem($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Problem::class);
        $this->problem = $var;

        return $this;
    }

}

