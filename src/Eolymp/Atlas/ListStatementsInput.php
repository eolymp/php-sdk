<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/statement_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ListStatementsInput</code>
 */
class ListStatementsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     */
    protected $render = false;
    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     */
    protected $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $render
     *     @type int $version
     *           request data for specific problem version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\StatementService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRender($var)
    {
        GPBUtil::checkBool($var);
        $this->render = $var;

        return $this;
    }

    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * request data for specific problem version
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

}

