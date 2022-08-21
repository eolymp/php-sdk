<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.LookupCodeTemplateInput</code>
 */
class LookupCodeTemplateInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_ern = 1;</code>
     */
    protected $problem_ern = '';
    /**
     * Generated from protobuf field <code>string runtime = 2;</code>
     */
    protected $runtime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_ern
     *     @type string $runtime
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_ern = 1;</code>
     * @return string
     */
    public function getProblemErn()
    {
        return $this->problem_ern;
    }

    /**
     * Generated from protobuf field <code>string problem_ern = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_ern = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

}
