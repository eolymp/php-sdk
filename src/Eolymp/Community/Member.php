<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>bool disabled = 3;</code>
     */
    protected $disabled = false;
    /**
     * Generated from protobuf field <code>bool registered = 4;</code>
     */
    protected $registered = false;
    /**
     * Generated from protobuf field <code>bool staffed = 5;</code>
     */
    protected $staffed = false;
    /**
     * Generated from protobuf field <code>bool ghost = 7;</code>
     */
    protected $ghost = false;
    /**
     * Generated from protobuf field <code>.eolymp.community.Member.Status status = 6;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Member.User users = 10;</code>
     */
    private $users;
    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Member.Value values = 20;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type bool $disabled
     *     @type bool $registered
     *     @type bool $staffed
     *     @type bool $ghost
     *     @type int $status
     *     @type \Eolymp\Community\Member\User[]|\Google\Protobuf\Internal\RepeatedField $users
     *     @type \Eolymp\Community\Member\Value[]|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\Member::initOnce();
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
     * Generated from protobuf field <code>bool disabled = 3;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Generated from protobuf field <code>bool disabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool registered = 4;</code>
     * @return bool
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Generated from protobuf field <code>bool registered = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRegistered($var)
    {
        GPBUtil::checkBool($var);
        $this->registered = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool staffed = 5;</code>
     * @return bool
     */
    public function getStaffed()
    {
        return $this->staffed;
    }

    /**
     * Generated from protobuf field <code>bool staffed = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setStaffed($var)
    {
        GPBUtil::checkBool($var);
        $this->staffed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ghost = 7;</code>
     * @return bool
     */
    public function getGhost()
    {
        return $this->ghost;
    }

    /**
     * Generated from protobuf field <code>bool ghost = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setGhost($var)
    {
        GPBUtil::checkBool($var);
        $this->ghost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member.Status status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member.Status status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Community\Member_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Member.User users = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Member.User users = 10;</code>
     * @param \Eolymp\Community\Member\User[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Community\Member\User::class);
        $this->users = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Member.Value values = 20;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Member.Value values = 20;</code>
     * @param \Eolymp\Community\Member\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Community\Member\Value::class);
        $this->values = $arr;

        return $this;
    }

}

