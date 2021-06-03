<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListParticipantsInput</code>
 */
class ListParticipantsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>int32 offset = 10;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>.eolymp.judge.ListParticipantsInput.Filter filters = 40;</code>
     */
    protected $filters = null;
    /**
     * Generated from protobuf field <code>.eolymp.judge.ListParticipantsInput.Sortable sort = 50;</code>
     */
    protected $sort = 0;
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.Direction order = 51;</code>
     */
    protected $order = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type int $offset
     *     @type int $size
     *     @type \Eolymp\Judge\ListParticipantsInput\Filter $filters
     *     @type int $sort
     *     @type int $order
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

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
     * Generated from protobuf field <code>.eolymp.judge.ListParticipantsInput.Filter filters = 40;</code>
     * @return \Eolymp\Judge\ListParticipantsInput\Filter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.ListParticipantsInput.Filter filters = 40;</code>
     * @param \Eolymp\Judge\ListParticipantsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\ListParticipantsInput_Filter::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.ListParticipantsInput.Sortable sort = 50;</code>
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.ListParticipantsInput.Sortable sort = 50;</code>
     * @param int $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\ListParticipantsInput_Sortable::class);
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

}

