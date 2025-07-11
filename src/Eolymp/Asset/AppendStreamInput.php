<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/asset/asset_service.proto

namespace Eolymp\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.asset.AppendStreamInput</code>
 */
class AppendStreamInput extends \Google\Protobuf\Internal\Message
{
    /**
     * stream_id given by StartStream API
     *
     * Generated from protobuf field <code>string stream_id = 1;</code>
     */
    protected $stream_id = '';
    /**
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>bytes data = 100;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $stream_id
     *           stream_id given by StartStream API
     *     @type int $offset
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Asset\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * stream_id given by StartStream API
     *
     * Generated from protobuf field <code>string stream_id = 1;</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * stream_id given by StartStream API
     *
     * Generated from protobuf field <code>string stream_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 100;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

