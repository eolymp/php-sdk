<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/events.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.MemberDeletedEvent</code>
 */
class MemberDeletedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 1;</code>
     */
    protected $member = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Community\Member $member
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 1;</code>
     * @return \Eolymp\Community\Member|null
     */
    public function getMember()
    {
        return $this->member;
    }

    public function hasMember()
    {
        return isset($this->member);
    }

    public function clearMember()
    {
        unset($this->member);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 1;</code>
     * @param \Eolymp\Community\Member $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Member::class);
        $this->member = $var;

        return $this;
    }

}

