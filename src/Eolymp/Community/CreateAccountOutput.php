<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.CreateAccountOutput</code>
 */
class CreateAccountOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>string identity_issuer = 10;</code>
     */
    protected $identity_issuer = '';
    /**
     * Generated from protobuf field <code>string identity_subject = 11;</code>
     */
    protected $identity_subject = '';
    /**
     * Generated from protobuf field <code>string hint = 100;</code>
     */
    protected $hint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $member_id
     *     @type string $identity_issuer
     *     @type string $identity_subject
     *     @type string $hint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
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
     * Generated from protobuf field <code>string identity_issuer = 10;</code>
     * @return string
     */
    public function getIdentityIssuer()
    {
        return $this->identity_issuer;
    }

    /**
     * Generated from protobuf field <code>string identity_issuer = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentityIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_issuer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity_subject = 11;</code>
     * @return string
     */
    public function getIdentitySubject()
    {
        return $this->identity_subject;
    }

    /**
     * Generated from protobuf field <code>string identity_subject = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentitySubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_subject = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hint = 100;</code>
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Generated from protobuf field <code>string hint = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->hint = $var;

        return $this;
    }

}

