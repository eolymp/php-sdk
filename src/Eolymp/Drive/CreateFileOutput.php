<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/drive.proto

namespace Eolymp\Drive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.drive.CreateFileOutput</code>
 */
class CreateFileOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file_id = 1;</code>
     */
    protected $file_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_id
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

}

