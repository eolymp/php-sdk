<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/billing_service.proto

namespace GPBMetadata\Eolymp\Universe;

class BillingService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Commerce\Invoice::initOnce();
        \GPBMetadata\Eolymp\Universe\Billing::initOnce();
        \GPBMetadata\Eolymp\Universe\Plan::initOnce();
        $pool->internalAddGeneratedFile(
            '
�"
%eolymp/universe/billing_service.protoeolymp.universe"eolymp/annotations/ratelimit.protoeolymp/commerce/invoice.protoeolymp/universe/billing.protoeolymp/universe/plan.proto"!
DescribeBillingInformationInput"V
 DescribeBillingInformationOutput2
info (2$.eolymp.universe.Billing.Information"S
UpdateBillingInformationInput2
info (2$.eolymp.universe.Billing.Information" 
UpdateBillingInformationOutput"
DescribeSubscriptionInput"�
DescribeSubscriptionOutput6
current (2%.eolymp.universe.Billing.Subscription7
upcoming (2%.eolymp.universe.Billing.Subscription"M
CreateSubscriptionInput
plan_id (	

variant_id (	
seats ("0
CreateSubscriptionOutput
checkout_url (	"M
UpdateSubscriptionInput
plan_id (	

variant_id (	
seats ("
UpdateSubscriptionOutput"
CancelSubscriptionInput"
CancelSubscriptionOutput"B
StartSubscriptionTrialInput
plan_id (	

variant_id (	"
StartSubscriptionTrialOutput"
EndSubscriptionTrialInput"
EndSubscriptionTrialOutput"_
SimulateSubscriptionInput
plan_id (	

variant_id (	
seats (
coupon
 (	"n
SimulateSubscriptionOutput%
due (2.eolymp.commerce.Invoice)
invoice (2.eolymp.commerce.Invoice"K
CreatePortalLinkInput
flow (	
back_url (	

return_url (	"-
CreatePortalLinkOutput
portal_link (	"
UpcomingInvoiceInput"B
UpcomingInvoiceOutput)
invoice (2.eolymp.commerce.Invoice"*
DescribeInvoiceInput

invoice_id (	"B
DescribeInvoiceOutput)
invoice (2.eolymp.commerce.Invoice"%
PayInvoiceInput

invoice_id (	"(
PayInvoiceOutput
checkout_url (	"@
ListInvoicesInput
size (
after (	
before (	"L
ListInvoicesOutput
total (\'
items (2.eolymp.commerce.Invoice"�
ListAvailablePlansInput
offset
 (
size (
localee (	
currencyf (	+
extra� (2.eolymp.universe.Plan.Extra"O
ListAvailablePlansOutput
total ($
items (2.eolymp.universe.Plan2�
BillingService�
DescribeBillingInformation0.eolymp.universe.DescribeBillingInformationInput1.eolymp.universe.DescribeBillingInformationOutput"$��
��
  �@��
2���/billing/info�
UpdateBillingInformation..eolymp.universe.UpdateBillingInformationInput/.eolymp.universe.UpdateBillingInformationOutput"$��
��
  �@��
2���/billing/info�
DescribeSubscription*.eolymp.universe.DescribeSubscriptionInput+.eolymp.universe.DescribeSubscriptionOutput",��
��
  �@��
2���/billing/subscription�
CreateSubscription(.eolymp.universe.CreateSubscriptionInput).eolymp.universe.CreateSubscriptionOutput",��
��
  �@��
2���"/billing/subscription�
UpdateSubscription(.eolymp.universe.UpdateSubscriptionInput).eolymp.universe.UpdateSubscriptionOutput",��
��
  �@��
2���/billing/subscription�
CancelSubscription(.eolymp.universe.CancelSubscriptionInput).eolymp.universe.CancelSubscriptionOutput",��
��
  �@��
2���*/billing/subscription�
StartSubscriptionTrial,.eolymp.universe.StartSubscriptionTrialInput-.eolymp.universe.StartSubscriptionTrialOutput"+��
��
  �@��
2���"/billing/trial/start�
EndSubscriptionTrial*.eolymp.universe.EndSubscriptionTrialInput+.eolymp.universe.EndSubscriptionTrialOutput")��
��
  �@��
2���"/billing/trial/end�
SimulateSubscription*.eolymp.universe.SimulateSubscriptionInput+.eolymp.universe.SimulateSubscriptionOutput"5��
��
  �@��
2��� "/billing/subscription/simulate�
CreatePortalLink&.eolymp.universe.CreatePortalLinkInput\'.eolymp.universe.CreatePortalLinkOutput"+��
��
  �@��
2���"/billing/portal-link�
UpcomingInvoice%.eolymp.universe.UpcomingInvoiceInput&.eolymp.universe.UpcomingInvoiceOutput"(��
��
  �@��
2���"/billing/upcoming�
DescribeInvoice%.eolymp.universe.DescribeInvoiceInput&.eolymp.universe.DescribeInvoiceOutput"4��
��
  �@��
2���"/billing/invoice/{invoice_id}�

PayInvoice .eolymp.universe.PayInvoiceInput!.eolymp.universe.PayInvoiceOutput"8��
��
  �?��

���#"!/billing/invoice/{invoice_id}/pay�
ListInvoices".eolymp.universe.ListInvoicesInput#.eolymp.universe.ListInvoicesOutput"(��
��
  �@��
2���"/billing/invoices�
ListAvailablePlans(.eolymp.universe.ListAvailablePlansInput).eolymp.universe.ListAvailablePlansOutput"%��
��
  �@��
2���"/billing/plansB3Z1github.com/eolymp/go-sdk/eolymp/universe;universebproto3'
        , true);

        static::$is_initialized = true;
    }
}

