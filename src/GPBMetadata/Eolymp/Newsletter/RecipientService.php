<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/recipient_service.proto

namespace GPBMetadata\Eolymp\Newsletter;

class RecipientService
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
        \GPBMetadata\Eolymp\Newsletter\Recipient::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)eolymp/newsletter/recipient_service.protoeolymp.newsletter"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto!eolymp/newsletter/recipient.proto"G
CreateRecipientInput/
	recipient
 (2.eolymp.newsletter.Recipient"-
CreateRecipientOutput
recipient_id (	"5
ImportRecipientsInput
group_id (	H B
source"0
ImportRecipientsOutput
imported_total (	",
RemoveRecipientInput
recipient_id (	"
RemoveRecipientOutput"3
ListRecipientsInput
offset
 (
size ("R
ListRecipientsOutput
total (+
items (2.eolymp.newsletter.Recipient".
DescribeRecipientInput
recipient_id (	"J
DescribeRecipientOutput/
	recipient (2.eolymp.newsletter.Recipient2�
RecipientService�
DescribeRecipient).eolymp.newsletter.DescribeRecipientInput*.eolymp.newsletter.DescribeRecipientOutput"T��
��
  �@��
2��
��
newsletter:newsletter:write���/recipients/{recipient_id}�
ImportRecipients(.eolymp.newsletter.ImportRecipientsInput).eolymp.newsletter.ImportRecipientsOutput"M��
��
  �@��
2��
��
newsletter:newsletter:write���"/imports/recipients�
ListRecipients&.eolymp.newsletter.ListRecipientsInput\'.eolymp.newsletter.ListRecipientsOutput"E��
��
  �@��
2��
��
newsletter:newsletter:write���/recipients�
CreateRecipient\'.eolymp.newsletter.CreateRecipientInput(.eolymp.newsletter.CreateRecipientOutput"E��
��
  �@��
2��
��
newsletter:newsletter:write���"/recipients�
RemoveRecipient\'.eolymp.newsletter.RemoveRecipientInput(.eolymp.newsletter.RemoveRecipientOutput"T��
��
  �@��
2��
��
newsletter:newsletter:write���*/recipients/{recipient_id}B7Z5github.com/eolymp/go-sdk/eolymp/newsletter;newsletterbproto3'
        , true);

        static::$is_initialized = true;
    }
}

