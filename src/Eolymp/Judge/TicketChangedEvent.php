<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.TicketChangedEvent</code>
 */
class TicketChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string scope = 10;</code>
     */
    protected $scope = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket before = 1;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket after = 2;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *     @type \Eolymp\Judge\Ticket $before
     *     @type \Eolymp\Judge\Ticket $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\TicketService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string scope = 10;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>string scope = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket before = 1;</code>
     * @return \Eolymp\Judge\Ticket|null
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
     * Generated from protobuf field <code>.eolymp.judge.Ticket before = 1;</code>
     * @param \Eolymp\Judge\Ticket $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Ticket::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket after = 2;</code>
     * @return \Eolymp\Judge\Ticket|null
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
     * Generated from protobuf field <code>.eolymp.judge.Ticket after = 2;</code>
     * @param \Eolymp\Judge\Ticket $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Ticket::class);
        $this->after = $var;

        return $this;
    }

}

