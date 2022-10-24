<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/universe.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.DescribeAuthOutput</code>
 */
class DescribeAuthOutput extends \Google\Protobuf\Internal\Message
{
    protected $auth;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Universe\Authentication\OAuth2 $oauth2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Universe::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Authentication.OAuth2 oauth2 = 1;</code>
     * @return \Eolymp\Universe\Authentication\OAuth2
     */
    public function getOauth2()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Authentication.OAuth2 oauth2 = 1;</code>
     * @param \Eolymp\Universe\Authentication\OAuth2 $var
     * @return $this
     */
    public function setOauth2($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Authentication_OAuth2::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAuth()
    {
        return $this->whichOneof("auth");
    }

}

