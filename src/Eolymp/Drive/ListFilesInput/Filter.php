<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/drive.proto

namespace Eolymp\Drive\ListFilesInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.drive.ListFilesInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString path = 3;</code>
     */
    private $path;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum etag = 4;</code>
     */
    private $etag;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt size = 5;</code>
     */
    private $size;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 6;</code>
     */
    private $type;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp created_at = 7;</code>
     */
    private $created_at;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp updated_at = 8;</code>
     */
    private $updated_at;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $path
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $etag
     *     @type \Eolymp\Wellknown\ExpressionInt[]|\Google\Protobuf\Internal\RepeatedField $size
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $type
     *     @type \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $created_at
     *     @type \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $updated_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Drive\Drive::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString path = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString path = 3;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->path = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum etag = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum etag = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEtag($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->etag = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt size = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt size = 5;</code>
     * @param \Eolymp\Wellknown\ExpressionInt[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSize($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->size = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 6;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp created_at = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp created_at = 7;</code>
     * @param \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->created_at = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp updated_at = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp updated_at = 8;</code>
     * @param \Eolymp\Wellknown\ExpressionTimestamp[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->updated_at = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Drive\ListFilesInput_Filter::class);

