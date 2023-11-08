<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.UpdateAccountInput</code>
 */
class UpdateAccountInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.community.UpdateAccountInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string current_password = 2;</code>
     */
    protected $current_password = '';
    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 10;</code>
     */
    protected $member = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $patch
     *     @type string $current_password
     *     @type \Eolymp\Community\Member $member
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.UpdateAccountInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.UpdateAccountInput.Patch patch = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Community\UpdateAccountInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string current_password = 2;</code>
     * @return string
     */
    public function getCurrentPassword()
    {
        return $this->current_password;
    }

    /**
     * Generated from protobuf field <code>string current_password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->current_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 10;</code>
     * @return \Eolymp\Community\Member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 10;</code>
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

