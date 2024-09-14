<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/policy_service.proto

namespace Eolymp\Acl\ListPoliciesInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.acl.ListPoliciesInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 10;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID principal = 2;</code>
     */
    private $principal;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     */
    private $name;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum resource = 4;</code>
     */
    private $resource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $principal
     *     @type array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $name
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Acl\PolicyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 10;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID principal = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID principal = 2;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->principal = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum resource = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum resource = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResource($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->resource = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Acl\ListPoliciesInput_Filter::class);

