<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/community.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeIdentityProviderOutput</code>
 */
class DescribeIdentityProviderOutput extends \Google\Protobuf\Internal\Message
{
    protected $provider;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $local
     *     @type \Eolymp\Community\IdentityProvider\OIDC $oidc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\Community::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool local = 1;</code>
     * @return bool
     */
    public function getLocal()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>bool local = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocal($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.IdentityProvider.OIDC oidc = 3;</code>
     * @return \Eolymp\Community\IdentityProvider\OIDC
     */
    public function getOidc()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.IdentityProvider.OIDC oidc = 3;</code>
     * @param \Eolymp\Community\IdentityProvider\OIDC $var
     * @return $this
     */
    public function setOidc($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\IdentityProvider_OIDC::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->whichOneof("provider");
    }

}

