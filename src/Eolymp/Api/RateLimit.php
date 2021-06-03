<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/annotations/ratelimit.proto

namespace Eolymp\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.api.RateLimit</code>
 */
class RateLimit extends \Google\Protobuf\Internal\Message
{
    /**
     * number of requests per second
     *
     * Generated from protobuf field <code>float limit = 22062;</code>
     */
    protected $limit = 0.0;
    /**
     * allowed burst per second
     *
     * Generated from protobuf field <code>int32 burst = 22063;</code>
     */
    protected $burst = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $limit
     *           number of requests per second
     *     @type int $burst
     *           allowed burst per second
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        parent::__construct($data);
    }

    /**
     * number of requests per second
     *
     * Generated from protobuf field <code>float limit = 22062;</code>
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * number of requests per second
     *
     * Generated from protobuf field <code>float limit = 22062;</code>
     * @param float $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkFloat($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * allowed burst per second
     *
     * Generated from protobuf field <code>int32 burst = 22063;</code>
     * @return int
     */
    public function getBurst()
    {
        return $this->burst;
    }

    /**
     * allowed burst per second
     *
     * Generated from protobuf field <code>int32 burst = 22063;</code>
     * @param int $var
     * @return $this
     */
    public function setBurst($var)
    {
        GPBUtil::checkInt32($var);
        $this->burst = $var;

        return $this;
    }

}

