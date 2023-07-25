<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.CreateAccountInput</code>
 */
class CreateAccountInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string nickname = 1;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>.eolymp.community.User user = 2;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Attribute.Value attributes = 3;</code>
     */
    private $attributes;
    /**
     * captcha challenge
     *
     * Generated from protobuf field <code>string captcha = 100;</code>
     */
    protected $captcha = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $nickname
     *     @type \Eolymp\Community\User $user
     *     @type \Eolymp\Community\Attribute\Value[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *     @type string $captcha
     *           captcha challenge
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string nickname = 1;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.User user = 2;</code>
     * @return \Eolymp\Community\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.User user = 2;</code>
     * @param \Eolymp\Community\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Attribute.Value attributes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Attribute.Value attributes = 3;</code>
     * @param \Eolymp\Community\Attribute\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Community\Attribute\Value::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * captcha challenge
     *
     * Generated from protobuf field <code>string captcha = 100;</code>
     * @return string
     */
    public function getCaptcha()
    {
        return $this->captcha;
    }

    /**
     * captcha challenge
     *
     * Generated from protobuf field <code>string captcha = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setCaptcha($var)
    {
        GPBUtil::checkString($var, True);
        $this->captcha = $var;

        return $this;
    }

}

