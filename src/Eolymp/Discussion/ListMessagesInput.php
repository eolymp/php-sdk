<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.ListMessagesInput</code>
 */
class ListMessagesInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool render = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.discussion.ListMessagesInput.Sortable sort = 50;</code>
     */
    protected $sort = 0;
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.Direction order = 51;</code>
     */
    protected $order = 0;
    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.discussion.ListMessagesInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $render
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type int $sort
     *     @type int $order
     *     @type \Eolymp\Discussion\ListMessagesInput\Filter $filters
     *           data filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool render = 1;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Generated from protobuf field <code>bool render = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.discussion.ListMessagesInput.Sortable sort = 50;</code>
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.ListMessagesInput.Sortable sort = 50;</code>
     * @param int $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Discussion\ListMessagesInput_Sortable::class);
        $this->sort = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.Direction order = 51;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Generated from protobuf field <code>.eolymp.wellknown.Direction order = 51;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Wellknown\Direction::class);
        $this->order = $var;

        return $this;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.discussion.ListMessagesInput.Filter filters = 40;</code>
     * @return \Eolymp\Discussion\ListMessagesInput\Filter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.discussion.ListMessagesInput.Filter filters = 40;</code>
     * @param \Eolymp\Discussion\ListMessagesInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\ListMessagesInput_Filter::class);
        $this->filters = $var;

        return $this;
    }

}

