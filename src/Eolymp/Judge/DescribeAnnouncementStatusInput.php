<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/announcement_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeAnnouncementStatusInput</code>
 */
class DescribeAnnouncementStatusInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string announcement_id = 2;</code>
     */
    protected $announcement_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $announcement_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\AnnouncementService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
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
     * Generated from protobuf field <code>string announcement_id = 2;</code>
     * @return string
     */
    public function getAnnouncementId()
    {
        return $this->announcement_id;
    }

    /**
     * Generated from protobuf field <code>string announcement_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnouncementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->announcement_id = $var;

        return $this;
    }

}

