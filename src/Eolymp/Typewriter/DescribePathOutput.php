<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/typewriter.proto

namespace Eolymp\Typewriter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.DescribePathOutput</code>
 */
class DescribePathOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Fragment fragment = 1;</code>
     */
    protected $fragment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Typewriter\Fragment $fragment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Typewriter::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Fragment fragment = 1;</code>
     * @return \Eolymp\Typewriter\Fragment
     */
    public function getFragment()
    {
        return $this->fragment;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Fragment fragment = 1;</code>
     * @param \Eolymp\Typewriter\Fragment $var
     * @return $this
     */
    public function setFragment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Typewriter\Fragment::class);
        $this->fragment = $var;

        return $this;
    }

}

