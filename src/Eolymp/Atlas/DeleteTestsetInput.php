<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DeleteTestsetInput</code>
 */
class DeleteTestsetInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string testset_id = 1;</code>
     */
    protected $testset_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $testset_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string testset_id = 1;</code>
     * @return string
     */
    public function getTestsetId()
    {
        return $this->testset_id;
    }

    /**
     * Generated from protobuf field <code>string testset_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTestsetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->testset_id = $var;

        return $this;
    }

}

