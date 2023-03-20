<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/file.proto

namespace Eolymp\Drive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.drive.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * File path
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';
    /**
     * Entity tag
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     */
    protected $etag = '';
    /**
     * SHA-256 checksum of the file
     *
     * Generated from protobuf field <code>string checksum_sha256 = 7;</code>
     */
    protected $checksum_sha256 = '';
    /**
     * Size of the data
     *
     * Generated from protobuf field <code>uint32 size = 4;</code>
     */
    protected $size = 0;
    /**
     * File mime type
     *
     * Generated from protobuf field <code>string type = 5;</code>
     */
    protected $type = '';
    /**
     * If true means file is being uploaded using multipart upload API, reset to false once CompleteMultipartUpload is complete
     *
     * Generated from protobuf field <code>bool incomplete = 8;</code>
     */
    protected $incomplete = false;
    /**
     * File access control level
     *
     * Generated from protobuf field <code>.eolymp.drive.File.Acl acl = 6;</code>
     */
    protected $acl = 0;
    /**
     * Generated from protobuf field <code>string created_by = 12;</code>
     */
    protected $created_by = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 10;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 11;</code>
     */
    protected $updated_at = null;
    /**
     * Generated from protobuf field <code>map<string, string> attributes = 20;</code>
     */
    private $attributes;
    /**
     * Generated from protobuf field <code>string url = 100;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $path
     *           File path
     *     @type string $etag
     *           Entity tag
     *     @type string $checksum_sha256
     *           SHA-256 checksum of the file
     *     @type int $size
     *           Size of the data
     *     @type string $type
     *           File mime type
     *     @type bool $incomplete
     *           If true means file is being uploaded using multipart upload API, reset to false once CompleteMultipartUpload is complete
     *     @type int $acl
     *           File access control level
     *     @type string $created_by
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *     @type string $url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Drive\File::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * File path
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * File path
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Entity tag
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Entity tag
     *
     * Generated from protobuf field <code>string etag = 3;</code>
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
     * SHA-256 checksum of the file
     *
     * Generated from protobuf field <code>string checksum_sha256 = 7;</code>
     * @return string
     */
    public function getChecksumSha256()
    {
        return $this->checksum_sha256;
    }

    /**
     * SHA-256 checksum of the file
     *
     * Generated from protobuf field <code>string checksum_sha256 = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setChecksumSha256($var)
    {
        GPBUtil::checkString($var, True);
        $this->checksum_sha256 = $var;

        return $this;
    }

    /**
     * Size of the data
     *
     * Generated from protobuf field <code>uint32 size = 4;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Size of the data
     *
     * Generated from protobuf field <code>uint32 size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * File mime type
     *
     * Generated from protobuf field <code>string type = 5;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * File mime type
     *
     * Generated from protobuf field <code>string type = 5;</code>
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
     * If true means file is being uploaded using multipart upload API, reset to false once CompleteMultipartUpload is complete
     *
     * Generated from protobuf field <code>bool incomplete = 8;</code>
     * @return bool
     */
    public function getIncomplete()
    {
        return $this->incomplete;
    }

    /**
     * If true means file is being uploaded using multipart upload API, reset to false once CompleteMultipartUpload is complete
     *
     * Generated from protobuf field <code>bool incomplete = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncomplete($var)
    {
        GPBUtil::checkBool($var);
        $this->incomplete = $var;

        return $this;
    }

    /**
     * File access control level
     *
     * Generated from protobuf field <code>.eolymp.drive.File.Acl acl = 6;</code>
     * @return int
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * File access control level
     *
     * Generated from protobuf field <code>.eolymp.drive.File.Acl acl = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAcl($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Drive\File_Acl::class);
        $this->acl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_by = 12;</code>
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Generated from protobuf field <code>string created_by = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_by = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> attributes = 20;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>map<string, string> attributes = 20;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 100;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

