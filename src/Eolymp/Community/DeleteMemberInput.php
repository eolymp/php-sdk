<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/member_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DeleteMemberInput</code>
 */
class DeleteMemberInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>bool force_delete = 2;</code>
     */
    protected $force_delete = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $member_id
     *     @type bool $force_delete
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\MemberService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
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
     * Generated from protobuf field <code>bool force_delete = 2;</code>
     * @return bool
     */
    public function getForceDelete()
    {
        return $this->force_delete;
    }

    /**
     * Generated from protobuf field <code>bool force_delete = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForceDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->force_delete = $var;

        return $this;
    }

}

