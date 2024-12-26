<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/problem_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ExportProblemOutput</code>
 */
class ExportProblemOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string snapshot_url = 1;</code>
     */
    protected $snapshot_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snapshot_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string snapshot_url = 1;</code>
     * @return string
     */
    public function getSnapshotUrl()
    {
        return $this->snapshot_url;
    }

    /**
     * Generated from protobuf field <code>string snapshot_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshotUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_url = $var;

        return $this;
    }

}
