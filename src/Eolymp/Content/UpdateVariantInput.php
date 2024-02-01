<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/content_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.UpdateVariantInput</code>
 */
class UpdateVariantInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     */
    protected $fragment_id = '';
    /**
     * Generated from protobuf field <code>string variant_id = 2;</code>
     */
    protected $variant_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.content.Variant variant = 3;</code>
     */
    protected $variant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fragment_id
     *     @type string $variant_id
     *     @type \Eolymp\Content\Variant $variant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\ContentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     * @return string
     */
    public function getFragmentId()
    {
        return $this->fragment_id;
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFragmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fragment_id = $var;

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

    /**
     * Generated from protobuf field <code>.eolymp.content.Variant variant = 3;</code>
     * @return \Eolymp\Content\Variant
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Generated from protobuf field <code>.eolymp.content.Variant variant = 3;</code>
     * @param \Eolymp\Content\Variant $var
     * @return $this
     */
    public function setVariant($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Content\Variant::class);
        $this->variant = $var;

        return $this;
    }

}

