<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.UpdateTagInput</code>
 */
class UpdateTagInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tag_id = 1;</code>
     */
    protected $tag_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Tag tag = 2;</code>
     */
    protected $tag = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag_id
     *     @type \Eolymp\Atlas\Tag $tag
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tag_id = 1;</code>
     * @return string
     */
    public function getTagId()
    {
        return $this->tag_id;
    }

    /**
     * Generated from protobuf field <code>string tag_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTagId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Tag tag = 2;</code>
     * @return \Eolymp\Atlas\Tag
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Tag tag = 2;</code>
     * @param \Eolymp\Atlas\Tag $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Tag::class);
        $this->tag = $var;

        return $this;
    }

}

