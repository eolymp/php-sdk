<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.RenderStatementInput</code>
 */
class RenderStatementInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string statement_id = 2;</code>
     */
    protected $statement_id = '';
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
     *     @type string $problem_id
     *     @type string $statement_id
     *     @type int $version
     *           request data for specific problem version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string statement_id = 2;</code>
     * @return string
     */
    public function getStatementId()
    {
        return $this->statement_id;
    }

    /**
     * Generated from protobuf field <code>string statement_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStatementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->statement_id = $var;

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

