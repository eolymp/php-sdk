<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.UpdateAnnouncementInput</code>
 */
class UpdateAnnouncementInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string announcement_id = 1;</code>
     */
    protected $announcement_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Announcement announcement = 2;</code>
     */
    protected $announcement = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $announcement_id
     *     @type \Eolymp\Judge\Announcement $announcement
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string announcement_id = 1;</code>
     * @return string
     */
    public function getAnnouncementId()
    {
        return $this->announcement_id;
    }

    /**
     * Generated from protobuf field <code>string announcement_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnouncementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->announcement_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Announcement announcement = 2;</code>
     * @return \Eolymp\Judge\Announcement
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Announcement announcement = 2;</code>
     * @param \Eolymp\Judge\Announcement $var
     * @return $this
     */
    public function setAnnouncement($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Announcement::class);
        $this->announcement = $var;

        return $this;
    }

}

