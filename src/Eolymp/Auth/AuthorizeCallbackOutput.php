<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/external_service.proto

namespace Eolymp\Auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.auth.AuthorizeCallbackOutput</code>
 */
class AuthorizeCallbackOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string redirect_uri = 1;</code>
     */
    protected $redirect_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $redirect_uri
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Auth\ExternalService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string redirect_uri = 1;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Generated from protobuf field <code>string redirect_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

}

