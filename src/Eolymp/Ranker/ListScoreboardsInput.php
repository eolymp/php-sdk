<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/ranker/scoreboard_service.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.ListScoreboardsInput</code>
 */
class ListScoreboardsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 offset = 10;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>.eolymp.ranker.ListScoreboardsInput.Filter filters = 40;</code>
     */
    protected $filters = null;
    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $offset
     *     @type int $size
     *     @type \Eolymp\Ranker\ListScoreboardsInput\Filter $filters
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\ScoreboardService::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>.eolymp.ranker.ListScoreboardsInput.Filter filters = 40;</code>
     * @return \Eolymp\Ranker\ListScoreboardsInput\Filter|null
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
     * Generated from protobuf field <code>.eolymp.ranker.ListScoreboardsInput.Filter filters = 40;</code>
     * @param \Eolymp\Ranker\ListScoreboardsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ranker\ListScoreboardsInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Ranker\Scoreboard\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

