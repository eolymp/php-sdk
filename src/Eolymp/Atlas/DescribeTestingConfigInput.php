<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/testing_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeTestingConfigInput</code>
 */
class DescribeTestingConfigInput extends \Google\Protobuf\Internal\Message
{
    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     */
    protected $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $version
     *           request data for specific problem version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TestingService::initOnce();
        parent::__construct($data);
    }

    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

}

