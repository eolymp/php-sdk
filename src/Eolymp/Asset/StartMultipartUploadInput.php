<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/asset/asset_service.proto

namespace Eolymp\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.asset.StartMultipartUploadInput</code>
 */
class StartMultipartUploadInput extends \Google\Protobuf\Internal\Message
{
    /**
     * name might be used to infer file type and to set Content-Disposition header
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * mime type, if empty inferred from extension in the filename
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>repeated string keys = 3;</code>
     */
    private $keys;
    /**
     * time to live in seconds, 0 - forever
     *
     * Generated from protobuf field <code>uint32 ttl = 20;</code>
     */
    protected $ttl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name might be used to infer file type and to set Content-Disposition header
     *     @type string $type
     *           mime type, if empty inferred from extension in the filename
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $keys
     *     @type int $ttl
     *           time to live in seconds, 0 - forever
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Asset\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * name might be used to infer file type and to set Content-Disposition header
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name might be used to infer file type and to set Content-Disposition header
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * mime type, if empty inferred from extension in the filename
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * mime type, if empty inferred from extension in the filename
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string keys = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * Generated from protobuf field <code>repeated string keys = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->keys = $arr;

        return $this;
    }

    /**
     * time to live in seconds, 0 - forever
     *
     * Generated from protobuf field <code>uint32 ttl = 20;</code>
     * @return int
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * time to live in seconds, 0 - forever
     *
     * Generated from protobuf field <code>uint32 ttl = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkUint32($var);
        $this->ttl = $var;

        return $this;
    }

}

