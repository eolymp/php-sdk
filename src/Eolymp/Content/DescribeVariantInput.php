<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/content_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.DescribeVariantInput</code>
 */
class DescribeVariantInput extends \Google\Protobuf\Internal\Message
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
     * deprecated: use extra instead
     *
     * Generated from protobuf field <code>bool render = 3;</code>
     */
    protected $render = false;
    /**
     * Generated from protobuf field <code>repeated .eolymp.content.Variant.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fragment_id
     *     @type string $variant_id
     *     @type bool $render
     *           deprecated: use extra instead
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $extra
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
     * deprecated: use extra instead
     *
     * Generated from protobuf field <code>bool render = 3;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * deprecated: use extra instead
     *
     * Generated from protobuf field <code>bool render = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRender($var)
    {
        GPBUtil::checkBool($var);
        $this->render = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.content.Variant.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.content.Variant.Extra extra = 1123;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Content\Variant\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

