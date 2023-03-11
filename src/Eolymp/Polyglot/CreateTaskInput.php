<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/polyglot/polyglot.proto

namespace Eolymp\Polyglot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.polyglot.CreateTaskInput</code>
 */
class CreateTaskInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>map<string, string> inputs = 2;</code>
     */
    private $inputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type array|\Google\Protobuf\Internal\MapField $inputs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Polyglot\Polyglot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> inputs = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>map<string, string> inputs = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->inputs = $arr;

        return $this;
    }

}

