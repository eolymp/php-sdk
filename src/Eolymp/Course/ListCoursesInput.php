<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.ListCoursesInput</code>
 */
class ListCoursesInput extends \Google\Protobuf\Internal\Message
{
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
     * Generated from protobuf field <code>.eolymp.course.ListCoursesInput.Filter filters = 40;</code>
     */
    protected $filters = null;
    /**
     * Generated from protobuf field <code>.eolymp.course.ListCoursesInput.Sortable sort = 50;</code>
     */
    protected $sort = 0;
    /**
     * Generated from protobuf field <code>.eolymp.wellknown.Direction order = 51;</code>
     */
    protected $order = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Course.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type \Eolymp\Course\ListCoursesInput\Filter $filters
     *           data filters
     *     @type int $sort
     *     @type int $order
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\CourseService::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>.eolymp.course.ListCoursesInput.Filter filters = 40;</code>
     * @return \Eolymp\Course\ListCoursesInput\Filter|null
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
     * Generated from protobuf field <code>.eolymp.course.ListCoursesInput.Filter filters = 40;</code>
     * @param \Eolymp\Course\ListCoursesInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Course\ListCoursesInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ListCoursesInput.Sortable sort = 50;</code>
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.ListCoursesInput.Sortable sort = 50;</code>
     * @param int $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\ListCoursesInput\Sortable::class);
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
     * Generated from protobuf field <code>repeated .eolymp.course.Course.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Course.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Course\Course\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

