<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/policy_service.proto

namespace Eolymp\Acl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.acl.CopyPoliciesInput</code>
 */
class CopyPoliciesInput extends \Google\Protobuf\Internal\Message
{
    /**
     * copy policies of given principal
     *
     * Generated from protobuf field <code>string src_principal = 1;</code>
     */
    protected $src_principal = '';
    /**
     * new principal
     *
     * Generated from protobuf field <code>string dst_principal = 2;</code>
     */
    protected $dst_principal = '';
    /**
     * copy policies of given resource
     *
     * Generated from protobuf field <code>string src_resource = 3;</code>
     */
    protected $src_resource = '';
    /**
     * new resource
     *
     * Generated from protobuf field <code>string dst_resource = 4;</code>
     */
    protected $dst_resource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $src_principal
     *           copy policies of given principal
     *     @type string $dst_principal
     *           new principal
     *     @type string $src_resource
     *           copy policies of given resource
     *     @type string $dst_resource
     *           new resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Acl\PolicyService::initOnce();
        parent::__construct($data);
    }

    /**
     * copy policies of given principal
     *
     * Generated from protobuf field <code>string src_principal = 1;</code>
     * @return string
     */
    public function getSrcPrincipal()
    {
        return $this->src_principal;
    }

    /**
     * copy policies of given principal
     *
     * Generated from protobuf field <code>string src_principal = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcPrincipal($var)
    {
        GPBUtil::checkString($var, True);
        $this->src_principal = $var;

        return $this;
    }

    /**
     * new principal
     *
     * Generated from protobuf field <code>string dst_principal = 2;</code>
     * @return string
     */
    public function getDstPrincipal()
    {
        return $this->dst_principal;
    }

    /**
     * new principal
     *
     * Generated from protobuf field <code>string dst_principal = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDstPrincipal($var)
    {
        GPBUtil::checkString($var, True);
        $this->dst_principal = $var;

        return $this;
    }

    /**
     * copy policies of given resource
     *
     * Generated from protobuf field <code>string src_resource = 3;</code>
     * @return string
     */
    public function getSrcResource()
    {
        return $this->src_resource;
    }

    /**
     * copy policies of given resource
     *
     * Generated from protobuf field <code>string src_resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->src_resource = $var;

        return $this;
    }

    /**
     * new resource
     *
     * Generated from protobuf field <code>string dst_resource = 4;</code>
     * @return string
     */
    public function getDstResource()
    {
        return $this->dst_resource;
    }

    /**
     * new resource
     *
     * Generated from protobuf field <code>string dst_resource = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDstResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->dst_resource = $var;

        return $this;
    }

}
