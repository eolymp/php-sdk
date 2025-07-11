<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/course/student_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.ListStudentsInput</code>
 */
class ListStudentsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * pagination
     *
     * Generated from protobuf field <code>string after = 12;</code>
     */
    protected $after = '';
    /**
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
     * Generated from protobuf field <code>string search = 20;</code>
     */
    protected $search = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.ListStudentsInput.Filter filters = 40;</code>
     */
    protected $filters = null;
    /**
     * Generated from protobuf field <code>.eolymp.course.ListStudentsInput.Sortable sort = 50;</code>
     */
    protected $sort = 0;
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.Direction order = 51;</code>
     */
    protected $order = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Student.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $after
     *           pagination
     *     @type int $offset
     *     @type int $size
     *     @type string $search
     *           data filters
     *     @type \Eolymp\Course\ListStudentsInput\Filter $filters
     *     @type int $sort
     *     @type int $order
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\StudentService::initOnce();
        parent::__construct($data);
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>string after = 12;</code>
     * @return string
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>string after = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkString($var, True);
        $this->after = $var;

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
     * data filters
     *
     * Generated from protobuf field <code>string search = 20;</code>
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>string search = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->search = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ListStudentsInput.Filter filters = 40;</code>
     * @return \Eolymp\Course\ListStudentsInput\Filter|null
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
     * Generated from protobuf field <code>.eolymp.course.ListStudentsInput.Filter filters = 40;</code>
     * @param \Eolymp\Course\ListStudentsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\ListStudentsInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ListStudentsInput.Sortable sort = 50;</code>
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ListStudentsInput.Sortable sort = 50;</code>
     * @param int $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\ListStudentsInput\Sortable::class);
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
     * Generated from protobuf field <code>repeated .eolymp.course.Student.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Student.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Course\Student\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

