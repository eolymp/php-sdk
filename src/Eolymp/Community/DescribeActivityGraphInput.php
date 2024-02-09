<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/activity_graph_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeActivityGraphInput</code>
 */
class DescribeActivityGraphInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp after = 1;</code>
     */
    protected $after = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp before = 2;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>string metric = 3;</code>
     */
    protected $metric = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $after
     *     @type \Google\Protobuf\Timestamp $before
     *     @type string $metric
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\ActivityGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp after = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp after = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->after = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp before = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp before = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string metric = 3;</code>
     * @return string
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * Generated from protobuf field <code>string metric = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric = $var;

        return $this;
    }

}

