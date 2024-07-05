<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/announcement.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Announcement</code>
 */
class Announcement extends \Google\Protobuf\Internal\Message
{
    /**
     * Announcement unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Contest where announcement was published.
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     */
    protected $contest_id = '';
    /**
     * Timestamp when announcement was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * Announcement subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
     */
    protected $subject = '';
    /**
     * Announcement content.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 11;</code>
     */
    protected $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Announcement unique identifier.
     *     @type string $contest_id
     *           Contest where announcement was published.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Timestamp when announcement was initially created.
     *     @type string $subject
     *           Announcement subject. Max 255 symbols.
     *     @type \Eolymp\Ecm\Content $message
     *           Announcement content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Announcement::initOnce();
        parent::__construct($data);
    }

    /**
     * Announcement unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Announcement unique identifier.
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
     * Contest where announcement was published.
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Contest where announcement was published.
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * Timestamp when announcement was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Timestamp when announcement was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Announcement subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Announcement subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Announcement content.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 11;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Announcement content.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 11;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->message = $var;

        return $this;
    }

}

