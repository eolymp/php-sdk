<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Solution</code>
 */
class Solution extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * solution name
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * programming language
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     */
    protected $runtime = '';
    /**
     * source code
     *
     * Generated from protobuf field <code>string source = 11;</code>
     */
    protected $source = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Type type = 20;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           unique identifier
     *     @type string $name
     *           solution name
     *     @type string $runtime
     *           programming language
     *     @type string $source
     *           source code
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Solution::initOnce();
        parent::__construct($data);
    }

    /**
     * unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * solution name
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * solution name
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * programming language
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * programming language
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * source code
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * source code
     *
     * Generated from protobuf field <code>string source = 11;</code>
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
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Type type = 20;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Type type = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Solution_Type::class);
        $this->type = $var;

        return $this;
    }

}

