<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.CreateCategoryInput</code>
 */
class CreateCategoryInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Category category = 1;</code>
     */
    protected $category = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Category $category
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Category category = 1;</code>
     * @return \Eolymp\Atlas\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Category category = 1;</code>
     * @param \Eolymp\Atlas\Category $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Category::class);
        $this->category = $var;

        return $this;
    }

}

