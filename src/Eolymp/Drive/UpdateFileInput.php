<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/drive.proto

namespace Eolymp\Drive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.drive.UpdateFileInput</code>
 */
class UpdateFileInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file_id = 1;</code>
     */
    protected $file_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.drive.File file = 2;</code>
     */
    protected $file = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_id
     *     @type \Eolymp\Drive\File $file
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
     * Generated from protobuf field <code>.eolymp.drive.File file = 2;</code>
     * @return \Eolymp\Drive\File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>.eolymp.drive.File file = 2;</code>
     * @param \Eolymp\Drive\File $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Drive\File::class);
        $this->file = $var;

        return $this;
    }

}

