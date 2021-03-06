<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/universe.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.ListPermissionsInput</code>
 */
class ListPermissionsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     */
    protected $space_id = '';
    /**
     * Generated from protobuf field <code>int32 offset = 10;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>.eolymp.universe.ListPermissionsInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $space_id
     *     @type int $offset
     *     @type int $size
     *     @type \Eolymp\Universe\ListPermissionsInput\Filter $filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Universe::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     * @return string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->space_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
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
     * Generated from protobuf field <code>.eolymp.universe.ListPermissionsInput.Filter filters = 40;</code>
     * @return \Eolymp\Universe\ListPermissionsInput\Filter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.ListPermissionsInput.Filter filters = 40;</code>
     * @param \Eolymp\Universe\ListPermissionsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\ListPermissionsInput_Filter::class);
        $this->filters = $var;

        return $this;
    }

}

