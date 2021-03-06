<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/annotations/resource.proto

namespace Eolymp\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.api.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * optionally, name of the field containing object ID (id by default)
     *
     * Generated from protobuf field <code>string id_field = 22073;</code>
     */
    protected $id_field = '';
    /**
     * resource type
     *
     * Generated from protobuf field <code>string type = 22071;</code>
     */
    protected $type = '';
    /**
     * optionally, parent type
     *
     * Generated from protobuf field <code>string parent = 22072;</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id_field
     *           optionally, name of the field containing object ID (id by default)
     *     @type string $type
     *           resource type
     *     @type string $parent
     *           optionally, parent type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Annotations\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * optionally, name of the field containing object ID (id by default)
     *
     * Generated from protobuf field <code>string id_field = 22073;</code>
     * @return string
     */
    public function getIdField()
    {
        return $this->id_field;
    }

    /**
     * optionally, name of the field containing object ID (id by default)
     *
     * Generated from protobuf field <code>string id_field = 22073;</code>
     * @param string $var
     * @return $this
     */
    public function setIdField($var)
    {
        GPBUtil::checkString($var, True);
        $this->id_field = $var;

        return $this;
    }

    /**
     * resource type
     *
     * Generated from protobuf field <code>string type = 22071;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * resource type
     *
     * Generated from protobuf field <code>string type = 22071;</code>
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
     * optionally, parent type
     *
     * Generated from protobuf field <code>string parent = 22072;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * optionally, parent type
     *
     * Generated from protobuf field <code>string parent = 22072;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

