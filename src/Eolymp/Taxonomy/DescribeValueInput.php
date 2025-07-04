<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/taxonomy/enum_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.DescribeValueInput</code>
 */
class DescribeValueInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string enum_id = 1;</code>
     */
    protected $enum_id = '';
    /**
     * Generated from protobuf field <code>string value_id = 2;</code>
     */
    protected $value_id = '';
    /**
     * if set, system will use translations to translate value name, summary and keywords
     *
     * Generated from protobuf field <code>string locale = 100;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $enum_id
     *     @type string $value_id
     *     @type string $locale
     *           if set, system will use translations to translate value name, summary and keywords
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\EnumService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string enum_id = 1;</code>
     * @return string
     */
    public function getEnumId()
    {
        return $this->enum_id;
    }

    /**
     * Generated from protobuf field <code>string enum_id = 1;</code>
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
     * Generated from protobuf field <code>string value_id = 2;</code>
     * @return string
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * Generated from protobuf field <code>string value_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->value_id = $var;

        return $this;
    }

    /**
     * if set, system will use translations to translate value name, summary and keywords
     *
     * Generated from protobuf field <code>string locale = 100;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * if set, system will use translations to translate value name, summary and keywords
     *
     * Generated from protobuf field <code>string locale = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

}

