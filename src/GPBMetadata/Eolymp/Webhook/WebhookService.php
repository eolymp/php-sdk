<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/webhook/webhook_service.proto

namespace GPBMetadata\Eolymp\Webhook;

class WebhookService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Webhook\Webhook::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$eolymp/webhook/webhook_service.protoeolymp.webhook"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/webhook/webhook.proto">
CreateWebhookInput(
webhook (2.eolymp.webhook.Webhook")
CreateWebhookOutput

webhook_id (	"�
UpdateWebhookInput,
patch (2.eolymp.webhook.Webhook.Patch

webhook_id (	(
webhook (2.eolymp.webhook.Webhook"
UpdateWebhookOutput"(
DeleteWebhookInput

webhook_id (	"
DeleteWebhookOutput"*
DescribeWebhookInput

webhook_id (	"A
DescribeWebhookOutput(
webhook (2.eolymp.webhook.Webhook"1
ListWebhooksInput
size (
offset
 ("K
ListWebhooksOutput
total (&
items (2.eolymp.webhook.Webhook"&
TestWebhookInput

webhook_id (	"5
TestWebhookOutput
status (
response (	2�
WebhookService�
CreateWebhook".eolymp.webhook.CreateWebhookInput#.eolymp.webhook.CreateWebhookOutput"=��
��
  �@��
��
��
webhook:webhook:write���"	/webhooks�
UpdateWebhook".eolymp.webhook.UpdateWebhookInput#.eolymp.webhook.UpdateWebhookOutput"J��
��
  �@��
��
��
webhook:webhook:write���"/webhooks/{webhook_id}�
DeleteWebhook".eolymp.webhook.DeleteWebhookInput#.eolymp.webhook.DeleteWebhookOutput"J��
��
  �@��
��
��
webhook:webhook:write���*/webhooks/{webhook_id}�
DescribeWebhook$.eolymp.webhook.DescribeWebhookInput%.eolymp.webhook.DescribeWebhookOutput"I��
��
  �@��
��
��
webhook:webhook:read���/webhooks/{webhook_id}�
ListWebhooks!.eolymp.webhook.ListWebhooksInput".eolymp.webhook.ListWebhooksOutput"<��
��
  �@��
��
��
webhook:webhook:read���	/webhooks�
TestWebhook .eolymp.webhook.TestWebhookInput!.eolymp.webhook.TestWebhookOutput"O��
��
  �@��
��
��
webhook:webhook:write���"/webhooks/{webhook_id}/testB1Z/github.com/eolymp/go-sdk/eolymp/webhook;webhookbproto3'
        , true);

        static::$is_initialized = true;
    }
}

