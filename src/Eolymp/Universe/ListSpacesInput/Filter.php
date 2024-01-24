<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space_service.proto

namespace Eolymp\Universe\ListSpacesInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.ListSpacesInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * free text search
     *
     * Generated from protobuf field <code>string query = 100;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID key = 2;</code>
     */
    private $key;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     */
    private $name;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool own = 4;</code>
     */
    private $own;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *           free text search
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $key
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $name
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $own
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\SpaceService::initOnce();
        parent::__construct($data);
    }

    /**
     * free text search
     *
     * Generated from protobuf field <code>string query = 100;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * free text search
     *
     * Generated from protobuf field <code>string query = 100;</code>
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
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID key = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID key = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKey($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->key = $arr;

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
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool own = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOwn()
    {
        return $this->own;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool own = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOwn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->own = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Universe\ListSpacesInput_Filter::class);

