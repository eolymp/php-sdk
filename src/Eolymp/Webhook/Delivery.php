<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/webhook/delivery.proto

namespace Eolymp\Webhook;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.webhook.Delivery</code>
 */
class Delivery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string webhook_id = 2;</code>
     */
    protected $webhook_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 4;</code>
     */
    protected $timestamp = null;
    /**
     * Generated from protobuf field <code>.eolymp.webhook.Webhook.Event event = 10;</code>
     */
    protected $event = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any payload = 11;</code>
     */
    protected $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $webhook_id
     *     @type \Google\Protobuf\Timestamp $timestamp
     *     @type int $event
     *     @type \Google\Protobuf\Any $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Webhook\Delivery::initOnce();
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
     * Generated from protobuf field <code>string webhook_id = 2;</code>
     * @return string
     */
    public function getWebhookId()
    {
        return $this->webhook_id;
    }

    /**
     * Generated from protobuf field <code>string webhook_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWebhookId($var)
    {
        GPBUtil::checkString($var, True);
        $this->webhook_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.webhook.Webhook.Event event = 10;</code>
     * @return int
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>.eolymp.webhook.Webhook.Event event = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Webhook\Webhook\Event::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any payload = 11;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any payload = 11;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->payload = $var;

        return $this;
    }

}

