<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/reward/achievement_service.proto

namespace Eolymp\Reward;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.reward.CreateAchievementInput</code>
 */
class CreateAchievementInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.reward.Achievement achievement = 1;</code>
     */
    protected $achievement = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Reward\Achievement $achievement
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Reward\AchievementService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.reward.Achievement achievement = 1;</code>
     * @return \Eolymp\Reward\Achievement|null
     */
    public function getAchievement()
    {
        return $this->achievement;
    }

    public function hasAchievement()
    {
        return isset($this->achievement);
    }

    public function clearAchievement()
    {
        unset($this->achievement);
    }

    /**
     * Generated from protobuf field <code>.eolymp.reward.Achievement achievement = 1;</code>
     * @param \Eolymp\Reward\Achievement $var
     * @return $this
     */
    public function setAchievement($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Reward\Achievement::class);
        $this->achievement = $var;

        return $this;
    }

}
