<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/helpdesk.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.ListPathsInput</code>
 */
class ListPathsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string locale = 1;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     */
    protected $render = false;
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
     * Generated from protobuf field <code>.eolymp.helpdesk.ListPathsInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $locale
     *     @type bool $render
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type \Eolymp\Helpdesk\ListPathsInput\Filter $filters
     *           data filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Helpdesk::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string locale = 1;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
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
     * Generated from protobuf field <code>.eolymp.helpdesk.ListPathsInput.Filter filters = 40;</code>
     * @return \Eolymp\Helpdesk\ListPathsInput\Filter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.helpdesk.ListPathsInput.Filter filters = 40;</code>
     * @param \Eolymp\Helpdesk\ListPathsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\ListPathsInput_Filter::class);
        $this->filters = $var;

        return $this;
    }

}

