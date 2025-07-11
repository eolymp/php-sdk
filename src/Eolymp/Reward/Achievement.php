<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/reward/achievement.proto

namespace Eolymp\Reward;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.reward.Achievement</code>
 */
class Achievement extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>uint32 value = 2;</code>
     */
    protected $value = 0;
    /**
     * Generated from protobuf field <code>uint32 rarity = 3;</code>
     */
    protected $rarity = 0;
    /**
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string image_url = 12;</code>
     */
    protected $image_url = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content summary = 11;</code>
     */
    protected $summary = null;
    /**
     * Generated from protobuf field <code>string cursor = 100;</code>
     */
    protected $cursor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $value
     *     @type int $rarity
     *     @type string $name
     *     @type string $image_url
     *     @type \Eolymp\Ecm\Content $summary
     *     @type string $cursor
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Reward\Achievement::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 value = 2;</code>
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>uint32 value = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rarity = 3;</code>
     * @return int
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Generated from protobuf field <code>uint32 rarity = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRarity($var)
    {
        GPBUtil::checkUint32($var);
        $this->rarity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_url = 12;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>string image_url = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content summary = 11;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    public function hasSummary()
    {
        return isset($this->summary);
    }

    public function clearSummary()
    {
        unset($this->summary);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content summary = 11;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->summary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cursor = 100;</code>
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * Generated from protobuf field <code>string cursor = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->cursor = $var;

        return $this;
    }

}

