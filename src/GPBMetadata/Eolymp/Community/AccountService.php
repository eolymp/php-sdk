<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace GPBMetadata\Eolymp\Community;

class AccountService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Community\EmailType::initOnce();
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&eolymp/community/account_service.protoeolymp.community"eolymp/annotations/ratelimit.proto!eolymp/community/email_type.protoeolymp/community/member.proto"O
CreateAccountInput(
member (2.eolymp.community.Member
captchad (	"6
CreateAccountOutput
	member_id (	
hintd (	"
DescribeAccountInput"�
DescribeAccountOutput(
member (2.eolymp.community.Member&
team (2.eolymp.community.Member.
extra� (2.eolymp.community.Member.Extra"�
UpdateAccountInput9
patch (2*.eolymp.community.UpdateAccountInput.Patch
current_password (	(
member
 (2.eolymp.community.Member"�
Patch
ALL 
USER_NICKNAMEe

USER_EMAILf
USER_PASSWORDg
	USER_NAMEh
USER_PICTUREi
USER_BIRTHDAYj
USER_COUNTRYk
	USER_CITYl
USER_PREFERENCESm
USER_PREFERENCES_LOCALE�
USER_PREFERENCES_TIMEZONE�
USER_PREFERENCES_RUNTIME�
USER_EMAIL_SUBSCRIPTIONSn

ATTRIBUTES�"#
UpdateAccountOutput
hint (	"f
UploadPictureInput
filename (	
data (
offset_x
 (
offset_y (
size ("*
UploadPictureOutput
picture_url (	"
DeleteAccountInput"
DeleteAccountOutput"
ResendVerificationInput"
ResendVerificationOutput"<
CompleteVerificationInput
code (	
	member_id (	"
CompleteVerificationOutput"D
StartRecoveryInput
email (	
locale (	
captchad (	"6
StartRecoveryOutput
hint (	
	member_id (	"I
CompleteRecoverInput
code (	
password (	
	member_id (	"
CompleteRecoverOutput"/
DescribeEmailSubscriptionInput
token (	"d
DescribeEmailSubscriptionOutput2
subscriptions (2.eolymp.community.EmailType
email (	"a
UpdateEmailSubscriptionInput
token (	2
subscriptions (2.eolymp.community.EmailType"
UpdateEmailSubscriptionOutput2�
AccountService}
CreateAccount$.eolymp.community.CreateAccountInput%.eolymp.community.CreateAccountOutput"��
��
   A��
2���
"/account�
DescribeAccount&.eolymp.community.DescribeAccountInput\'.eolymp.community.DescribeAccountOutput"��
��
   A��
2���
/account}
UpdateAccount$.eolymp.community.UpdateAccountInput%.eolymp.community.UpdateAccountOutput"��
��
  �?��
���
/account�
UploadPicture$.eolymp.community.UploadPictureInput%.eolymp.community.UploadPictureOutput"\'��
��
  �?��
���"/account/picture}
DeleteAccount$.eolymp.community.DeleteAccountInput%.eolymp.community.DeleteAccountOutput"��
��
  �?��

���
*/account�
ResendVerification).eolymp.community.ResendVerificationInput*.eolymp.community.ResendVerificationOutput"3��
��
  �?��
���"/account/verification/resend�
CompleteVerification+.eolymp.community.CompleteVerificationInput,.eolymp.community.CompleteVerificationOutput"5��
��
  �?��
��� "/account/verification/complete�
StartRecovery$.eolymp.community.StartRecoveryInput%.eolymp.community.StartRecoveryOutput".��
��
   @��
���"/account/recovery/start�
CompleteRecovery&.eolymp.community.CompleteRecoverInput\'.eolymp.community.CompleteRecoverOutput"1��
��
   A��
2���"/account/recovery/complete�
DescribeEmailSubscription0.eolymp.community.DescribeEmailSubscriptionInput1.eolymp.community.DescribeEmailSubscriptionOutput"2��
��
  �@��
���/account/email-subscription�
UpdateEmailSubscription..eolymp.community.UpdateEmailSubscriptionInput/.eolymp.community.UpdateEmailSubscriptionOutput"2��
��
  �?��
���"/account/email-subscriptionB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

