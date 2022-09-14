<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.UpdateProfileOutput</code>
 */
class UpdateProfileOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email_confirmation_hint = 1;</code>
     */
    protected $email_confirmation_hint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email_confirmation_hint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Cognito::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email_confirmation_hint = 1;</code>
     * @return string
     */
    public function getEmailConfirmationHint()
    {
        return $this->email_confirmation_hint;
    }

    /**
     * Generated from protobuf field <code>string email_confirmation_hint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailConfirmationHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_confirmation_hint = $var;

        return $this;
    }

}

