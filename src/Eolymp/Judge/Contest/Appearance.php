<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge\Contest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Contest.Appearance</code>
 */
class Appearance extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string logo_url = 3;</code>
     */
    protected $logo_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type string $logo_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 3;</code>
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_url = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Appearance::class, \Eolymp\Judge\Contest_Appearance::class);

