<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/problem.proto

namespace Eolymp\Judge\Problem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * attachment to the problem statement
 *
 * Generated from protobuf message <code>eolymp.judge.Problem.Attachment</code>
 */
class Attachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string link = 4;</code>
     */
    protected $link = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $link
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Problem::initOnce();
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
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
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
     * Generated from protobuf field <code>string link = 4;</code>
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Generated from protobuf field <code>string link = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->link = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Attachment::class, \Eolymp\Judge\Problem_Attachment::class);

