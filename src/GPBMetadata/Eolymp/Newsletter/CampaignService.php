<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/campaign_service.proto

namespace GPBMetadata\Eolymp\Newsletter;

class CampaignService
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
        \GPBMetadata\Eolymp\Newsletter\Campaign::initOnce();
        \GPBMetadata\Eolymp\Newsletter\Recipient::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�9
(eolymp/newsletter/campaign_service.protoeolymp.newsletter"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto eolymp/newsletter/campaign.proto!eolymp/newsletter/recipient.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"D
CreateCampaignInput-
campaign (2.eolymp.newsletter.Campaign"+
CreateCampaignOutput
campaign_id (	"�
UpdateCampaignInput0
patch (2!.eolymp.newsletter.Campaign.Patch
campaign_id (	-
campaign (2.eolymp.newsletter.Campaign"
UpdateCampaignOutput"*
DeleteCampaignInput
campaign_id (	"
DeleteCampaignOutput"_
DescribeCampaignInput
campaign_id (	1
extra� (2!.eolymp.newsletter.Campaign.Extra"G
DescribeCampaignOutput-
campaign (2.eolymp.newsletter.Campaign"�
ListCampaignsInput
offset
 (
size (=
filters( (2,.eolymp.newsletter.ListCampaignsInput.Filter
search) (	8
sort2 (2*.eolymp.newsletter.ListCampaignsInput.Sort*
order3 (2.eolymp.wellknown.Direction
locale� (	1
extra� (2!.eolymp.newsletter.Campaign.Extrad
Filter*
id (2.eolymp.wellknown.ExpressionID.
type (2 .eolymp.wellknown.ExpressionEnum"
Sort

CREATED_AT "P
ListCampaignsOutput
total (*
items (2.eolymp.newsletter.Campaign"Z
TestCampaignInput
campaign_id (	
email (	
locale (	
	member_id (	"
TestCampaignOutput">
SendCampaignInput
campaign_id (	
recipient_id (	"
SendCampaignOutput"�
TranslateCampaignInput
campaign_id (	
source (	
target (	
target_automatic (
override_manual (")
TranslateCampaignOutput
job_id (	"k
CreateTranslationInput
campaign_id (	<
translation (2\'.eolymp.newsletter.Campaign.Translation"1
CreateTranslationOutput
translation_id (	"�
UpdateTranslationInput0
patch (2!.eolymp.newsletter.Campaign.Patch
campaign_id (	
translation_id (	<
translation (2\'.eolymp.newsletter.Campaign.Translation"
UpdateTranslationOutput"E
DeleteTranslationInput
campaign_id (	
translation_id (	"
DeleteTranslationOutput"G
DescribeTranslationInput
campaign_id (	
translation_id (	"Y
DescribeTranslationOutput<
translation (2\'.eolymp.newsletter.Campaign.Translation"�
ListTranslationsInput
campaign_id (	
offset
 (
size (@
filters( (2/.eolymp.newsletter.ListTranslationsInput.Filterf
Filter*
id (2.eolymp.wellknown.ExpressionID0
locale (2 .eolymp.wellknown.ExpressionEnum"_
ListTranslationsOutput
total (6
items (2\'.eolymp.newsletter.Campaign.Translation"�
CreateRecipientInput
campaign_id (	
	member_id (	K

parameters (27.eolymp.newsletter.CreateRecipientInput.ParametersEntry1
ParametersEntry
key (	
value (	:8"-
CreateRecipientOutput
recipient_id (	"�
ImportRecipientInput
campaign_id (	
all_members
 (H 
group_id (	H 

contest_id (	H K

parameters (27.eolymp.newsletter.ImportRecipientInput.ParametersEntry1
ParametersEntry
key (	
value (	:8B
source"
ImportRecipientOutput"A
DeleteRecipientInput
campaign_id (	
recipient_id (	"
DeleteRecipientOutput"�
ListRecipientsInput
campaign_id (	
offset
 (
size (>
filters( (2-.eolymp.newsletter.ListRecipientsInput.Filter�
Filter*
id (2.eolymp.wellknown.ExpressionID0
status (2 .eolymp.wellknown.ExpressionEnum1
	member_id (2.eolymp.wellknown.ExpressionID"R
ListRecipientsOutput
total (+
items (2.eolymp.newsletter.Recipient"C
DescribeRecipientInput
campaign_id (	
recipient_id (	"J
DescribeRecipientOutput/
	recipient (2.eolymp.newsletter.Recipient2�
CampaignService�
CreateCampaign&.eolymp.newsletter.CreateCampaignInput\'.eolymp.newsletter.CreateCampaignOutput"D��
��
  �?��
��
��
newsletter:newsletter:write���"
/campaigns�
UpdateCampaign&.eolymp.newsletter.UpdateCampaignInput\'.eolymp.newsletter.UpdateCampaignOutput"R��
��
   @��
��
��
newsletter:newsletter:write���/campaigns/{campaign_id}�
DeleteCampaign&.eolymp.newsletter.DeleteCampaignInput\'.eolymp.newsletter.DeleteCampaignOutput"R��
��
  �@��
2��
��
newsletter:newsletter:write���*/campaigns/{campaign_id}�
DescribeCampaign(.eolymp.newsletter.DescribeCampaignInput).eolymp.newsletter.DescribeCampaignOutput"0��
��
  �A��
����/campaigns/{campaign_id}�
ListCampaigns%.eolymp.newsletter.ListCampaignsInput&.eolymp.newsletter.ListCampaignsOutput"!��
��
  �A��
d���
/campaigns�
TestCampaign$.eolymp.newsletter.TestCampaignInput%.eolymp.newsletter.TestCampaignOutput"W��
��
  �?��
��
��
newsletter:newsletter:write���"/campaigns/{campaign_id}/test�
SendCampaign$.eolymp.newsletter.SendCampaignInput%.eolymp.newsletter.SendCampaignOutput"W��
��
  �?��
��
��
newsletter:newsletter:write���"/campaigns/{campaign_id}/send�
TranslateCampaign).eolymp.newsletter.TranslateCampaignInput*.eolymp.newsletter.TranslateCampaignOutput"\\��
��
  �?��
��
��
newsletter:newsletter:write���$""/campaigns/{campaign_id}/translate�
CreateTranslation).eolymp.newsletter.CreateTranslationInput*.eolymp.newsletter.CreateTranslationOutput"_��
��
  �@��
2��
��
newsletter:newsletter:write���\'"%/campaigns/{campaign_id}/translations�
UpdateTranslation).eolymp.newsletter.UpdateTranslationInput*.eolymp.newsletter.UpdateTranslationOutput"p��
��
  �@��
2��
��
newsletter:newsletter:write���86/campaigns/{campaign_id}/translations/{translation_id}�
DeleteTranslation).eolymp.newsletter.DeleteTranslationInput*.eolymp.newsletter.DeleteTranslationOutput"p��
��
  �@��
2��
��
newsletter:newsletter:write���8*6/campaigns/{campaign_id}/translations/{translation_id}�
DescribeTranslation+.eolymp.newsletter.DescribeTranslationInput,.eolymp.newsletter.DescribeTranslationOutput"p��
��
  �A��
���
��
newsletter:newsletter:read���86/campaigns/{campaign_id}/translations/{translation_id}�
ListTranslations(.eolymp.newsletter.ListTranslationsInput).eolymp.newsletter.ListTranslationsOutput"^��
��
  �A��
d��
��
newsletter:newsletter:read���\'%/campaigns/{campaign_id}/translations�
CreateRecipient\'.eolymp.newsletter.CreateRecipientInput(.eolymp.newsletter.CreateRecipientOutput"]��
��
  �@��
2��
��
newsletter:newsletter:write���%"#/campaigns/{campaign_id}/recipients�
ImportRecipient\'.eolymp.newsletter.ImportRecipientInput(.eolymp.newsletter.ImportRecipientOutput"d��
��
  �@��
2��
��
newsletter:newsletter:write���,"*/campaigns/{campaign_id}/recipients:import�
DeleteRecipient\'.eolymp.newsletter.DeleteRecipientInput(.eolymp.newsletter.DeleteRecipientOutput"l��
��
  �@��
2��
��
newsletter:newsletter:write���4*2/campaigns/{campaign_id}/recipients/{recipient_id}�
ListRecipients&.eolymp.newsletter.ListRecipientsInput\'.eolymp.newsletter.ListRecipientsOutput"]��
��
  �@��
2��
��
newsletter:newsletter:write���%#/campaigns/{campaign_id}/recipients�
DescribeRecipient).eolymp.newsletter.DescribeRecipientInput*.eolymp.newsletter.DescribeRecipientOutput"l��
��
  �@��
2��
��
newsletter:newsletter:write���42/campaigns/{campaign_id}/recipients/{recipient_id}B7Z5github.com/eolymp/go-sdk/eolymp/newsletter;newsletterbproto3'
        , true);

        static::$is_initialized = true;
    }
}

