<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/enum_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.CreateEnumInput</code>
 */
class CreateEnumInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Enum enum = 1;</code>
     */
    protected $enum = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Taxonomy\Enum $enum
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\EnumService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Enum enum = 1;</code>
     * @return \Eolymp\Taxonomy\Enum|null
     */
    public function getEnum()
    {
        return $this->enum;
    }

    public function hasEnum()
    {
        return isset($this->enum);
    }

    public function clearEnum()
    {
        unset($this->enum);
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Enum enum = 1;</code>
     * @param \Eolymp\Taxonomy\Enum $var
     * @return $this
     */
    public function setEnum($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Taxonomy\Enum::class);
        $this->enum = $var;

        return $this;
    }

}

