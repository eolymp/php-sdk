<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.CompleteRecoverInput</code>
 */
class CompleteRecoverInput extends \Google\Protobuf\Internal\Message
{
    /**
     * secret from the email sent during StartRecovery
     *
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * new password for the user
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *           secret from the email sent during StartRecovery
     *     @type string $password
     *           new password for the user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * secret from the email sent during StartRecovery
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * secret from the email sent during StartRecovery
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * new password for the user
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * new password for the user
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

