<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/scoreboard.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.Scoreboard</code>
 */
class Scoreboard extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier. This field is readonly, it's assigned automatically when scoreboard is returned.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A user friendly identifier for the scoreboard, used as part of the domain name for the scoreboard.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * A user friendly name for the scoreboard.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.eolymp.ranker.Format format = 10;</code>
     */
    protected $format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Unique identifier. This field is readonly, it's assigned automatically when scoreboard is returned.
     *     @type string $key
     *           A user friendly identifier for the scoreboard, used as part of the domain name for the scoreboard.
     *     @type string $name
     *           A user friendly name for the scoreboard.
     *     @type int $format
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier. This field is readonly, it's assigned automatically when scoreboard is returned.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier. This field is readonly, it's assigned automatically when scoreboard is returned.
     *
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
     * A user friendly identifier for the scoreboard, used as part of the domain name for the scoreboard.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * A user friendly identifier for the scoreboard, used as part of the domain name for the scoreboard.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * A user friendly name for the scoreboard.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A user friendly name for the scoreboard.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Generated from protobuf field <code>.eolymp.ranker.Format format = 10;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Format format = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Ranker\Format::class);
        $this->format = $var;

        return $this;
    }

}

