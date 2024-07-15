<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/achievement_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.ListAchievementsInput</code>
 */
class ListAchievementsInput extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.eolymp.community.ListAchievementsInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $offset
     *     @type int $size
     *     @type \Eolymp\Community\ListAchievementsInput\Filter $filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AchievementService::initOnce();
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
     * Generated from protobuf field <code>.eolymp.community.ListAchievementsInput.Filter filters = 40;</code>
     * @return \Eolymp\Community\ListAchievementsInput\Filter|null
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
     * Generated from protobuf field <code>.eolymp.community.ListAchievementsInput.Filter filters = 40;</code>
     * @param \Eolymp\Community\ListAchievementsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\ListAchievementsInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

}
