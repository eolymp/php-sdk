<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ListSolutionsInput</code>
 */
class ListSolutionsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     */
    protected $version = 0;
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
     * Generated from protobuf field <code>.eolymp.atlas.ListSolutionsInput.Filter filters = 40;</code>
     */
    protected $filters = null;
    /**
     * Generated from protobuf field <code>.eolymp.atlas.ListSolutionsInput.Sortable sort = 50;</code>
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
     *     @type string $problem_id
     *     @type int $version
     *           request data for specific problem version
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type \Eolymp\Atlas\ListSolutionsInput\Filter $filters
     *           data filters
     *     @type int $sort
     *     @type int $order
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\SolutionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

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
     * Generated from protobuf field <code>.eolymp.atlas.ListSolutionsInput.Filter filters = 40;</code>
     * @return \Eolymp\Atlas\ListSolutionsInput\Filter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.atlas.ListSolutionsInput.Filter filters = 40;</code>
     * @param \Eolymp\Atlas\ListSolutionsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\ListSolutionsInput_Filter::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.ListSolutionsInput.Sortable sort = 50;</code>
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.ListSolutionsInput.Sortable sort = 50;</code>
     * @param int $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\ListSolutionsInput_Sortable::class);
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

