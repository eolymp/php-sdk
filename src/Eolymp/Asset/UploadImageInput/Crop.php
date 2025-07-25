<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/asset/asset_service.proto

namespace Eolymp\Asset\UploadImageInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.asset.UploadImageInput.Crop</code>
 */
class Crop extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 top = 1;</code>
     */
    protected $top = 0;
    /**
     * Generated from protobuf field <code>uint32 right = 2;</code>
     */
    protected $right = 0;
    /**
     * Generated from protobuf field <code>uint32 bottom = 3;</code>
     */
    protected $bottom = 0;
    /**
     * Generated from protobuf field <code>uint32 left = 4;</code>
     */
    protected $left = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $top
     *     @type int $right
     *     @type int $bottom
     *     @type int $left
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Asset\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 top = 1;</code>
     * @return int
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Generated from protobuf field <code>uint32 top = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTop($var)
    {
        GPBUtil::checkUint32($var);
        $this->top = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 right = 2;</code>
     * @return int
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Generated from protobuf field <code>uint32 right = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRight($var)
    {
        GPBUtil::checkUint32($var);
        $this->right = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bottom = 3;</code>
     * @return int
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * Generated from protobuf field <code>uint32 bottom = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBottom($var)
    {
        GPBUtil::checkUint32($var);
        $this->bottom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 left = 4;</code>
     * @return int
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Generated from protobuf field <code>uint32 left = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLeft($var)
    {
        GPBUtil::checkUint32($var);
        $this->left = $var;

        return $this;
    }

}

