<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/typewriter.proto

namespace Eolymp\Typewriter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.typewriter.UpdateFragmentInput</code>
 */
class UpdateFragmentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     */
    protected $fragment_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Fragment fragment = 2;</code>
     */
    protected $fragment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fragment_id
     *     @type \Eolymp\Typewriter\Fragment $fragment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Typewriter\Typewriter::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     * @return string
     */
    public function getFragmentId()
    {
        return $this->fragment_id;
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFragmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fragment_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Fragment fragment = 2;</code>
     * @return \Eolymp\Typewriter\Fragment
     */
    public function getFragment()
    {
        return $this->fragment;
    }

    /**
     * Generated from protobuf field <code>.eolymp.typewriter.Fragment fragment = 2;</code>
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

