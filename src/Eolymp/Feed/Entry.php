<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/feed/entry.proto

namespace Eolymp\Feed;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.feed.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     */
    protected $timestamp = null;
    /**
     * Generated from protobuf field <code>map<string, string> attributes = 10;</code>
     */
    private $attributes;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 20;</code>
     */
    private $links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $type
     *     @type \Google\Protobuf\Timestamp $timestamp
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *     @type array<\Eolymp\Wellknown\Link>|\Google\Protobuf\Internal\RepeatedField $links
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Feed\Entry::initOnce();
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
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> attributes = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>map<string, string> attributes = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 20;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 20;</code>
     * @param array<\Eolymp\Wellknown\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\Link::class);
        $this->links = $arr;

        return $this;
    }

}

