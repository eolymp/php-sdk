<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/enum_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.UpdateEnumInput</code>
 */
class UpdateEnumInput extends \Google\Protobuf\Internal\Message
{
    /**
     * patch defines which fields should be set, if empty ALL fields are set
     *
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.UpdateEnumInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * enum to update
     *
     * Generated from protobuf field <code>string enum_id = 2;</code>
     */
    protected $enum_id = '';
    /**
     * value to set (id field is ignored during update)
     *
     * Generated from protobuf field <code>.eolymp.taxonomy.Enum enum = 3;</code>
     */
    protected $enum = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $patch
     *           patch defines which fields should be set, if empty ALL fields are set
     *     @type string $enum_id
     *           enum to update
     *     @type \Eolymp\Taxonomy\Enum $enum
     *           value to set (id field is ignored during update)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\EnumService::initOnce();
        parent::__construct($data);
    }

    /**
     * patch defines which fields should be set, if empty ALL fields are set
     *
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.UpdateEnumInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * patch defines which fields should be set, if empty ALL fields are set
     *
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.UpdateEnumInput.Patch patch = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Taxonomy\UpdateEnumInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * enum to update
     *
     * Generated from protobuf field <code>string enum_id = 2;</code>
     * @return string
     */
    public function getEnumId()
    {
        return $this->enum_id;
    }

    /**
     * enum to update
     *
     * Generated from protobuf field <code>string enum_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEnumId($var)
    {
        GPBUtil::checkString($var, True);
        $this->enum_id = $var;

        return $this;
    }

    /**
     * value to set (id field is ignored during update)
     *
     * Generated from protobuf field <code>.eolymp.taxonomy.Enum enum = 3;</code>
     * @return \Eolymp\Taxonomy\Enum
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * value to set (id field is ignored during update)
     *
     * Generated from protobuf field <code>.eolymp.taxonomy.Enum enum = 3;</code>
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
