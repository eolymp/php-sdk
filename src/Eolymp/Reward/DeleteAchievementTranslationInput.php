<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/reward/achievement_service.proto

namespace Eolymp\Reward;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.reward.DeleteAchievementTranslationInput</code>
 */
class DeleteAchievementTranslationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string achievement_id = 1;</code>
     */
    protected $achievement_id = '';
    /**
     * Generated from protobuf field <code>string translation_id = 2;</code>
     */
    protected $translation_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $achievement_id
     *     @type string $translation_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Reward\AchievementService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string achievement_id = 1;</code>
     * @return string
     */
    public function getAchievementId()
    {
        return $this->achievement_id;
    }

    /**
     * Generated from protobuf field <code>string achievement_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAchievementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->achievement_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string translation_id = 2;</code>
     * @return string
     */
    public function getTranslationId()
    {
        return $this->translation_id;
    }

    /**
     * Generated from protobuf field <code>string translation_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTranslationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->translation_id = $var;

        return $this;
    }

}
