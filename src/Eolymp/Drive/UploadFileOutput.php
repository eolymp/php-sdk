<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/drive.proto

namespace Eolymp\Drive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.drive.UploadFileOutput</code>
 */
class UploadFileOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file_id = 1;</code>
     */
    protected $file_id = '';
    /**
     * Generated from protobuf field <code>string file_url = 2;</code>
     */
    protected $file_url = '';
    /**
     * Generated from protobuf field <code>string file_checksum = 3;</code>
     */
    protected $file_checksum = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_id
     *     @type string $file_url
     *     @type string $file_checksum
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Drive\Drive::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string file_id = 1;</code>
     * @return string
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * Generated from protobuf field <code>string file_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string file_url = 2;</code>
     * @return string
     */
    public function getFileUrl()
    {
        return $this->file_url;
    }

    /**
     * Generated from protobuf field <code>string file_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string file_checksum = 3;</code>
     * @return string
     */
    public function getFileChecksum()
    {
        return $this->file_checksum;
    }

    /**
     * Generated from protobuf field <code>string file_checksum = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFileChecksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_checksum = $var;

        return $this;
    }

}

