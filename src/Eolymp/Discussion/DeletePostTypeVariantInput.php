<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_type_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.DeletePostTypeVariantInput</code>
 */
class DeletePostTypeVariantInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type_id = 1;</code>
     */
    protected $type_id = '';
    /**
     * Generated from protobuf field <code>string variant_id = 2;</code>
     */
    protected $variant_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type_id
     *     @type string $variant_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostTypeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type_id = 1;</code>
     * @return string
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Generated from protobuf field <code>string type_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string variant_id = 2;</code>
     * @return string
     */
    public function getVariantId()
    {
        return $this->variant_id;
    }

    /**
     * Generated from protobuf field <code>string variant_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVariantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->variant_id = $var;

        return $this;
    }

}

