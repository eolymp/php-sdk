<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/reward/achievement.proto

namespace Eolymp\Reward\Achievement;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.reward.Achievement.Translation</code>
 */
class Translation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>string name = 103;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content summary = 104;</code>
     */
    protected $summary = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $locale
     *     @type string $name
     *     @type \Eolymp\Ecm\Content $summary
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
     * Generated from protobuf field <code>string locale = 102;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 103;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 103;</code>
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
     * Generated from protobuf field <code>.eolymp.ecm.Content summary = 104;</code>
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
     * Generated from protobuf field <code>.eolymp.ecm.Content summary = 104;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->summary = $var;

        return $this;
    }

}

