<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/keeper/keeper.proto

namespace Eolymp\Keeper\CompleteMultipartUploadInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.keeper.CompleteMultipartUploadInput.Part</code>
 */
class Part extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 number = 1;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    protected $etag = '';
    /**
     * Generated from protobuf field <code>string checksum_sha1 = 10;</code>
     */
    protected $checksum_sha1 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $number
     *     @type string $etag
     *     @type string $checksum_sha1
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Keeper\Keeper::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 number = 1;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Generated from protobuf field <code>string etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string checksum_sha1 = 10;</code>
     * @return string
     */
    public function getChecksumSha1()
    {
        return $this->checksum_sha1;
    }

    /**
     * Generated from protobuf field <code>string checksum_sha1 = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setChecksumSha1($var)
    {
        GPBUtil::checkString($var, True);
        $this->checksum_sha1 = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Part::class, \Eolymp\Keeper\CompleteMultipartUploadInput_Part::class);

