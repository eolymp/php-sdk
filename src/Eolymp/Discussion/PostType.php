<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/post_type.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.PostType</code>
 */
class PostType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool hidden = 3;</code>
     */
    protected $hidden = false;
    /**
     * Generated from protobuf field <code>int32 order = 10;</code>
     */
    protected $order = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.PostType.Variant variants = 100;</code>
     */
    private $variants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type bool $hidden
     *     @type int $order
     *     @type array<\Eolymp\Discussion\PostType\Variant>|\Google\Protobuf\Internal\RepeatedField $variants
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostType::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Generated from protobuf field <code>bool hidden = 3;</code>
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Generated from protobuf field <code>bool hidden = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 order = 10;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Generated from protobuf field <code>int32 order = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.PostType.Variant variants = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.PostType.Variant variants = 100;</code>
     * @param array<\Eolymp\Discussion\PostType\Variant>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVariants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Discussion\PostType\Variant::class);
        $this->variants = $arr;

        return $this;
    }

}

