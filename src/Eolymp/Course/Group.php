<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/group.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Group</code>
 */
class Group extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>bool inactive = 4;</code>
     */
    protected $inactive = false;
    /**
     * assign all modules
     *
     * Generated from protobuf field <code>bool assign_all = 5;</code>
     */
    protected $assign_all = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type bool $inactive
     *     @type bool $assign_all
     *           assign all modules
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Group::initOnce();
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
     * Generated from protobuf field <code>bool inactive = 4;</code>
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Generated from protobuf field <code>bool inactive = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setInactive($var)
    {
        GPBUtil::checkBool($var);
        $this->inactive = $var;

        return $this;
    }

    /**
     * assign all modules
     *
     * Generated from protobuf field <code>bool assign_all = 5;</code>
     * @return bool
     */
    public function getAssignAll()
    {
        return $this->assign_all;
    }

    /**
     * assign all modules
     *
     * Generated from protobuf field <code>bool assign_all = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAssignAll($var)
    {
        GPBUtil::checkBool($var);
        $this->assign_all = $var;

        return $this;
    }

}

