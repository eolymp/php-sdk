<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/verifier.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Verifier provides configuration on how to verify answers
 *
 * Generated from protobuf message <code>eolymp.executor.Verifier</code>
 */
class Verifier extends \Google\Protobuf\Internal\Message
{
    /**
     * Verifier type (see types enumeration for details)
     *
     * Generated from protobuf field <code>.eolymp.executor.Verifier.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Programming language for PROGRAM verifier
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     */
    protected $lang = '';
    /**
     * Source code for PROGRAM verifier
     *
     * Generated from protobuf field <code>string source = 3;</code>
     */
    protected $source = '';
    /**
     * Precision for TOKEN verifier
     *
     * Generated from protobuf field <code>int32 precision = 4;</code>
     */
    protected $precision = 0;
    /**
     * Case sensitivity option for TOKEN verifier
     *
     * Generated from protobuf field <code>bool case_sensitive = 5;</code>
     */
    protected $case_sensitive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Verifier type (see types enumeration for details)
     *     @type string $lang
     *           Programming language for PROGRAM verifier
     *     @type string $source
     *           Source code for PROGRAM verifier
     *     @type int $precision
     *           Precision for TOKEN verifier
     *     @type bool $case_sensitive
     *           Case sensitivity option for TOKEN verifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Verifier::initOnce();
        parent::__construct($data);
    }

    /**
     * Verifier type (see types enumeration for details)
     *
     * Generated from protobuf field <code>.eolymp.executor.Verifier.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Verifier type (see types enumeration for details)
     *
     * Generated from protobuf field <code>.eolymp.executor.Verifier.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Executor\Verifier_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Programming language for PROGRAM verifier
     *
     * Generated from protobuf field <code>string lang = 2;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Programming language for PROGRAM verifier
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
     * Source code for PROGRAM verifier
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Source code for PROGRAM verifier
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

    /**
     * Precision for TOKEN verifier
     *
     * Generated from protobuf field <code>int32 precision = 4;</code>
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Precision for TOKEN verifier
     *
     * Generated from protobuf field <code>int32 precision = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkInt32($var);
        $this->precision = $var;

        return $this;
    }

    /**
     * Case sensitivity option for TOKEN verifier
     *
     * Generated from protobuf field <code>bool case_sensitive = 5;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * Case sensitivity option for TOKEN verifier
     *
     * Generated from protobuf field <code>bool case_sensitive = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;

        return $this;
    }

}

