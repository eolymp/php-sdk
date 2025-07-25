<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/post_type_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.UpdatePostTypeInput</code>
 */
class UpdatePostTypeInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type_id = 1;</code>
     */
    protected $type_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.discussion.PostType type = 2;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type_id
     *     @type \Eolymp\Discussion\PostType $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostTypeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type_id = 1;</code>
     * @return string
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Generated from protobuf field <code>string type_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.PostType type = 2;</code>
     * @return \Eolymp\Discussion\PostType|null
     */
    public function getType()
    {
        return $this->type;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.PostType type = 2;</code>
     * @param \Eolymp\Discussion\PostType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\PostType::class);
        $this->type = $var;

        return $this;
    }

}

