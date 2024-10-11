<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/notify/notification_service.proto

namespace GPBMetadata\Eolymp\Notify;

class NotificationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Notify\Notification::initOnce();
        \GPBMetadata\Eolymp\Notify\Subscription::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(eolymp/notify/notification_service.protoeolymp.notify"eolymp/annotations/ratelimit.proto eolymp/notify/notification.proto eolymp/notify/subscription.proto"F
NotificationEvent1
notification (2.eolymp.notify.Notification"L
CreateNotificationInput1
notification (2.eolymp.notify.Notification"
CreateNotificationOutput"4
DescribeNotificationInput
notification_id (	"O
DescribeNotificationOutput1
notification (2.eolymp.notify.Notification"0
ReadNotificationInput
notification_id (	"
ReadNotificationOutput"2
DeleteNotificationInput
notification_id (	"
DeleteNotificationOutput"5
ListNotificationsInput
size (
after (	"T
ListNotificationsOutput
total (*
items (2.eolymp.notify.Notification".
DescribeSubscriptionsInput
space_id (	"Q
DescribeSubscriptionsOutput2
subscriptions (2.eolymp.notify.Subscription"`
UpdateSubscriptionsInput
space_id (	2
subscriptions (2.eolymp.notify.Subscription"
UpdateSubscriptionsOutput2�
NotificationServicev
CreateNotification&.eolymp.notify.CreateNotificationInput\'.eolymp.notify.CreateNotificationOutput"��
��
  �@��
2�
DescribeNotification(.eolymp.notify.DescribeNotificationInput).eolymp.notify.DescribeNotificationOutput"7��
��
  �@��
2���" /notifications/{notification_id}�
ReadNotification$.eolymp.notify.ReadNotificationInput%.eolymp.notify.ReadNotificationOutput"<��
��
  �@��
2���\'"%/notifications/{notification_id}/read�
DeleteNotification&.eolymp.notify.DeleteNotificationInput\'.eolymp.notify.DeleteNotificationOutput"7��
��
  �@��
2���"* /notifications/{notification_id}�
ListNotifications%.eolymp.notify.ListNotificationsInput&.eolymp.notify.ListNotificationsOutput"%��
��
  �@��
2���/notifications�
DescribeSubscriptions).eolymp.notify.DescribeSubscriptionsInput*.eolymp.notify.DescribeSubscriptionsOutput"7��
��
  �?��

���" /spaces/{space_id}/notifications�
UpdateSubscriptions\'.eolymp.notify.UpdateSubscriptionsInput(.eolymp.notify.UpdateSubscriptionsOutput"7��
��
  �?��

���"" /spaces/{space_id}/notificationsB/Z-github.com/eolymp/go-sdk/eolymp/notify;notifybproto3'
        , true);

        static::$is_initialized = true;
    }
}

