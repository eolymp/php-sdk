<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/access_key_service.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.CreateAccessKeyInput</code>
 */
class CreateAccessKeyInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string scope = 2;</code>
     */
    protected $scope = '';
    /**
     * Generated from protobuf field <code>uint32 expires_in = 3;</code>
     */
    protected $expires_in = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $scope
     *     @type int $expires_in
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\AccessKeyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope = 2;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>string scope = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expires_in = 3;</code>
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * Generated from protobuf field <code>uint32 expires_in = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setExpiresIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->expires_in = $var;

        return $this;
    }

}

