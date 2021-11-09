<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/events.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.RebuildScoreboardEvent</code>
 */
class RebuildScoreboardEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     */
    protected $space_id = '';
    /**
     * Generated from protobuf field <code>string scoreboard_id = 2;</code>
     */
    protected $scoreboard_id = '';
    /**
     * Generated from protobuf field <code>string activity_id = 3;</code>
     */
    protected $activity_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $space_id
     *     @type string $scoreboard_id
     *     @type string $activity_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Events::initOnce();
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
     * Generated from protobuf field <code>string scoreboard_id = 2;</code>
     * @return string
     */
    public function getScoreboardId()
    {
        return $this->scoreboard_id;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScoreboardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->scoreboard_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string activity_id = 3;</code>
     * @return string
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * Generated from protobuf field <code>string activity_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setActivityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activity_id = $var;

        return $this;
    }

}

