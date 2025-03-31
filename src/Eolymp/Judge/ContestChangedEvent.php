<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ContestChangedEvent</code>
 */
class ContestChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest before = 1;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest after = 2;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Contest $before
     *     @type \Eolymp\Judge\Contest $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ContestService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest before = 1;</code>
     * @return \Eolymp\Judge\Contest|null
     */
    public function getBefore()
    {
        return $this->before;
    }

    public function hasBefore()
    {
        return isset($this->before);
    }

    public function clearBefore()
    {
        unset($this->before);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest before = 1;</code>
     * @param \Eolymp\Judge\Contest $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest after = 2;</code>
     * @return \Eolymp\Judge\Contest|null
     */
    public function getAfter()
    {
        return $this->after;
    }

    public function hasAfter()
    {
        return isset($this->after);
    }

    public function clearAfter()
    {
        unset($this->after);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest after = 2;</code>
     * @param \Eolymp\Judge\Contest $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest::class);
        $this->after = $var;

        return $this;
    }

}

