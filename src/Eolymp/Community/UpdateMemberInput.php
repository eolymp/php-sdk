<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.UpdateMemberInput</code>
 */
class UpdateMemberInput extends \Google\Protobuf\Internal\Message
{
    /**
     * defines member props to be updated, empty means update everything
     *
     * Generated from protobuf field <code>repeated .eolymp.community.UpdateMemberInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * list of account props to be updated, empty means update everything
     *
     * Generated from protobuf field <code>repeated string patch_account_props = 4;</code>
     */
    private $patch_account_props;
    /**
     * list of attribute keys to be updated, empty means update everything and remove attributes not set in member.attributes
     *
     * Generated from protobuf field <code>repeated string patch_attribute_keys = 5;</code>
     */
    private $patch_attribute_keys;
    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 3;</code>
     */
    protected $member = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $patch
     *           defines member props to be updated, empty means update everything
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $patch_account_props
     *           list of account props to be updated, empty means update everything
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $patch_attribute_keys
     *           list of attribute keys to be updated, empty means update everything and remove attributes not set in member.attributes
     *     @type string $member_id
     *     @type \Eolymp\Community\Member $member
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\MemberService::initOnce();
        parent::__construct($data);
    }

    /**
     * defines member props to be updated, empty means update everything
     *
     * Generated from protobuf field <code>repeated .eolymp.community.UpdateMemberInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * defines member props to be updated, empty means update everything
     *
     * Generated from protobuf field <code>repeated .eolymp.community.UpdateMemberInput.Patch patch = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Community\UpdateMemberInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * list of account props to be updated, empty means update everything
     *
     * Generated from protobuf field <code>repeated string patch_account_props = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatchAccountProps()
    {
        return $this->patch_account_props;
    }

    /**
     * list of account props to be updated, empty means update everything
     *
     * Generated from protobuf field <code>repeated string patch_account_props = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatchAccountProps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->patch_account_props = $arr;

        return $this;
    }

    /**
     * list of attribute keys to be updated, empty means update everything and remove attributes not set in member.attributes
     *
     * Generated from protobuf field <code>repeated string patch_attribute_keys = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatchAttributeKeys()
    {
        return $this->patch_attribute_keys;
    }

    /**
     * list of attribute keys to be updated, empty means update everything and remove attributes not set in member.attributes
     *
     * Generated from protobuf field <code>repeated string patch_attribute_keys = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatchAttributeKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->patch_attribute_keys = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 3;</code>
     * @return \Eolymp\Community\Member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member member = 3;</code>
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

