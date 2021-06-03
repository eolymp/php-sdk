<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.UpdateEmailOutput</code>
 */
class UpdateEmailOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * email confirmation hint is a string added to the email subject, so it's easier to find for user
     *
     * Generated from protobuf field <code>string email_confirmation_hint = 2;</code>
     */
    protected $email_confirmation_hint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email_confirmation_hint
     *           email confirmation hint is a string added to the email subject, so it's easier to find for user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Cognito::initOnce();
        parent::__construct($data);
    }

    /**
     * email confirmation hint is a string added to the email subject, so it's easier to find for user
     *
     * Generated from protobuf field <code>string email_confirmation_hint = 2;</code>
     * @return string
     */
    public function getEmailConfirmationHint()
    {
        return $this->email_confirmation_hint;
    }

    /**
     * email confirmation hint is a string added to the email subject, so it's easier to find for user
     *
     * Generated from protobuf field <code>string email_confirmation_hint = 2;</code>
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

