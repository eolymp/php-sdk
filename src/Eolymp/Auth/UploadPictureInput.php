<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/account_service.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.UploadPictureInput</code>
 */
class UploadPictureInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string filename = 1;</code>
     */
    protected $filename = '';
    /**
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>uint32 offset_x = 10;</code>
     */
    protected $offset_x = 0;
    /**
     * Generated from protobuf field <code>uint32 offset_y = 11;</code>
     */
    protected $offset_y = 0;
    /**
     * Generated from protobuf field <code>uint32 size = 12;</code>
     */
    protected $size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filename
     *     @type string $data
     *     @type int $offset_x
     *     @type int $offset_y
     *     @type int $size
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string filename = 1;</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Generated from protobuf field <code>string filename = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 offset_x = 10;</code>
     * @return int
     */
    public function getOffsetX()
    {
        return $this->offset_x;
    }

    /**
     * Generated from protobuf field <code>uint32 offset_x = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOffsetX($var)
    {
        GPBUtil::checkUint32($var);
        $this->offset_x = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 offset_y = 11;</code>
     * @return int
     */
    public function getOffsetY()
    {
        return $this->offset_y;
    }

    /**
     * Generated from protobuf field <code>uint32 offset_y = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setOffsetY($var)
    {
        GPBUtil::checkUint32($var);
        $this->offset_y = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 size = 12;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>uint32 size = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->size = $var;

        return $this;
    }

}

