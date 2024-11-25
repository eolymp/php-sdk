<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/webhook/webhook_service.proto

namespace Eolymp\Webhook;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.webhook.CreateWebhookInput</code>
 */
class CreateWebhookInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.webhook.Webhook webhook = 1;</code>
     */
    protected $webhook = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Webhook\Webhook $webhook
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Webhook\WebhookService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.webhook.Webhook webhook = 1;</code>
     * @return \Eolymp\Webhook\Webhook|null
     */
    public function getWebhook()
    {
        return $this->webhook;
    }

    public function hasWebhook()
    {
        return isset($this->webhook);
    }

    public function clearWebhook()
    {
        unset($this->webhook);
    }

    /**
     * Generated from protobuf field <code>.eolymp.webhook.Webhook webhook = 1;</code>
     * @param \Eolymp\Webhook\Webhook $var
     * @return $this
     */
    public function setWebhook($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Webhook\Webhook::class);
        $this->webhook = $var;

        return $this;
    }

}

