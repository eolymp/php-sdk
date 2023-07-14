<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/forum_service.proto

namespace Eolymp\Discussion\ListForumsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.ListForumsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 1;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID parent_id = 3;</code>
     */
    private $parent_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $parent_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\ForumService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 2;</code>
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
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID parent_id = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID parent_id = 3;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParentId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->parent_id = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Discussion\ListForumsInput_Filter::class);
