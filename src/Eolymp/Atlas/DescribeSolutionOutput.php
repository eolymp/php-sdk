<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeSolutionOutput</code>
 */
class DescribeSolutionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution solution = 1;</code>
     */
    protected $solution = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Solution $solution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution solution = 1;</code>
     * @return \Eolymp\Atlas\Solution
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution solution = 1;</code>
     * @param \Eolymp\Atlas\Solution $var
     * @return $this
     */
    public function setSolution($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Solution::class);
        $this->solution = $var;

        return $this;
    }

}

