<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/interactor.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Interactor provides configuration for program which would interact with task during execution
 *
 * Generated from protobuf message <code>eolymp.executor.Interactor</code>
 */
class Interactor extends \Google\Protobuf\Internal\Message
{
    /**
     * Verifier type (see types enumeration for details)
     *
     * Generated from protobuf field <code>.eolymp.executor.Interactor.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Programming language in which interactor is written
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     */
    protected $lang = '';
    /**
     * Source code for interactor
     *
     * Generated from protobuf field <code>string source = 3;</code>
     */
    protected $source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Verifier type (see types enumeration for details)
     *     @type string $lang
     *           Programming language in which interactor is written
     *     @type string $source
     *           Source code for interactor
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Interactor::initOnce();
        parent::__construct($data);
    }

    /**
     * Verifier type (see types enumeration for details)
     *
     * Generated from protobuf field <code>.eolymp.executor.Interactor.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Verifier type (see types enumeration for details)
     *
     * Generated from protobuf field <code>.eolymp.executor.Interactor.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Executor\Interactor_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Programming language in which interactor is written
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Programming language in which interactor is written
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

    /**
     * Source code for interactor
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Source code for interactor
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}

