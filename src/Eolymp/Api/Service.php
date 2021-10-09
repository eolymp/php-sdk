<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/annotations/service.proto

namespace Eolymp\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.api.Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * service endpoints require a space (tenant)
     *
     * Generated from protobuf field <code>bool space = 1;</code>
     */
    protected $space = false;
    /**
     * service is internal and not available over HTTP
     *
     * Generated from protobuf field <code>bool internal = 2;</code>
     */
    protected $internal = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $space
     *           service endpoints require a space (tenant)
     *     @type bool $internal
     *           service is internal and not available over HTTP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Annotations\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * service endpoints require a space (tenant)
     *
     * Generated from protobuf field <code>bool space = 1;</code>
     * @return bool
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * service endpoints require a space (tenant)
     *
     * Generated from protobuf field <code>bool space = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkBool($var);
        $this->space = $var;

        return $this;
    }

    /**
     * service is internal and not available over HTTP
     *
     * Generated from protobuf field <code>bool internal = 2;</code>
     * @return bool
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * service is internal and not available over HTTP
     *
     * Generated from protobuf field <code>bool internal = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setInternal($var)
    {
        GPBUtil::checkBool($var);
        $this->internal = $var;

        return $this;
    }

}

