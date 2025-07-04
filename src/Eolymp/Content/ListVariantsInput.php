<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/content/content_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.ListVariantsInput</code>
 */
class ListVariantsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fragment_id = 2;</code>
     */
    protected $fragment_id = '';
    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     */
    protected $size = 0;
    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.content.ListVariantsInput.Filter filters = 40;</code>
     */
    protected $filters = null;
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
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type \Eolymp\Content\ListVariantsInput\Filter $filters
     *           data filters
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\ContentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 2;</code>
     * @return string
     */
    public function getFragmentId()
    {
        return $this->fragment_id;
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 2;</code>
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
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.content.ListVariantsInput.Filter filters = 40;</code>
     * @return \Eolymp\Content\ListVariantsInput\Filter|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.content.ListVariantsInput.Filter filters = 40;</code>
     * @param \Eolymp\Content\ListVariantsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Content\ListVariantsInput\Filter::class);
        $this->filters = $var;

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
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Content\Variant\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

