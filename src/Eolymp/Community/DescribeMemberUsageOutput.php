<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/member_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeMemberUsageOutput</code>
 */
class DescribeMemberUsageOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 total_members = 1;</code>
     */
    protected $total_members = 0;
    /**
     * Generated from protobuf field <code>uint32 active_members = 2;</code>
     */
    protected $active_members = 0;
    /**
     * Generated from protobuf field <code>uint32 new_members = 3;</code>
     */
    protected $new_members = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_members
     *     @type int $active_members
     *     @type int $new_members
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\MemberService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 total_members = 1;</code>
     * @return int
     */
    public function getTotalMembers()
    {
        return $this->total_members;
    }

    /**
     * Generated from protobuf field <code>uint32 total_members = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalMembers($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_members = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 active_members = 2;</code>
     * @return int
     */
    public function getActiveMembers()
    {
        return $this->active_members;
    }

    /**
     * Generated from protobuf field <code>uint32 active_members = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveMembers($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_members = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 new_members = 3;</code>
     * @return int
     */
    public function getNewMembers()
    {
        return $this->new_members;
    }

    /**
     * Generated from protobuf field <code>uint32 new_members = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNewMembers($var)
    {
        GPBUtil::checkUint32($var);
        $this->new_members = $var;

        return $this;
    }

}

