<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge\Contest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Contest.Participation</code>
 */
class Participation extends \Google\Protobuf\Internal\Message
{
    /**
     * When participants join contests by themselves they participate unofficially.
     *
     * Generated from protobuf field <code>bool join_unofficially = 2;</code>
     */
    protected $join_unofficially = false;
    /**
     * Allow participants to solve problem after completing contest
     *
     * Generated from protobuf field <code>bool free_upsolve = 3;</code>
     */
    protected $free_upsolve = false;
    /**
     * Allow new participants to unofficially and virtually participate in contest after it's over
     *
     * Generated from protobuf field <code>bool virtual_upsolve = 4;</code>
     */
    protected $virtual_upsolve = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $join_unofficially
     *           When participants join contests by themselves they participate unofficially.
     *     @type bool $free_upsolve
     *           Allow participants to solve problem after completing contest
     *     @type bool $virtual_upsolve
     *           Allow new participants to unofficially and virtually participate in contest after it's over
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        parent::__construct($data);
    }

    /**
     * When participants join contests by themselves they participate unofficially.
     *
     * Generated from protobuf field <code>bool join_unofficially = 2;</code>
     * @return bool
     */
    public function getJoinUnofficially()
    {
        return $this->join_unofficially;
    }

    /**
     * When participants join contests by themselves they participate unofficially.
     *
     * Generated from protobuf field <code>bool join_unofficially = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setJoinUnofficially($var)
    {
        GPBUtil::checkBool($var);
        $this->join_unofficially = $var;

        return $this;
    }

    /**
     * Allow participants to solve problem after completing contest
     *
     * Generated from protobuf field <code>bool free_upsolve = 3;</code>
     * @return bool
     */
    public function getFreeUpsolve()
    {
        return $this->free_upsolve;
    }

    /**
     * Allow participants to solve problem after completing contest
     *
     * Generated from protobuf field <code>bool free_upsolve = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFreeUpsolve($var)
    {
        GPBUtil::checkBool($var);
        $this->free_upsolve = $var;

        return $this;
    }

    /**
     * Allow new participants to unofficially and virtually participate in contest after it's over
     *
     * Generated from protobuf field <code>bool virtual_upsolve = 4;</code>
     * @return bool
     */
    public function getVirtualUpsolve()
    {
        return $this->virtual_upsolve;
    }

    /**
     * Allow new participants to unofficially and virtually participate in contest after it's over
     *
     * Generated from protobuf field <code>bool virtual_upsolve = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setVirtualUpsolve($var)
    {
        GPBUtil::checkBool($var);
        $this->virtual_upsolve = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Participation::class, \Eolymp\Judge\Contest_Participation::class);

