<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Universe;

class BillingServiceClient {

    /** @var string base URL */
    private $url;

    /** @var callable RPC client */
    private $invoker;

    /**
     * @param string   $url     defines base URL for service
     * @param callable $invoker provides transport implementation for calls
     */
    public function __construct($url, $invoker)
    {
        $this->url = $url;
        $this->invoker = $invoker;
    }

    /**
     * @param DescribeBillingInformationInput $input message
     * @param array $context request parameters
     *
     * @return DescribeBillingInformationOutput output message
     */
    public function DescribeBillingInformation(DescribeBillingInformationInput $input, array $context = [])
    {
        $path = "/billing/info";

        $context['name'] = "eolymp.universe.BillingService/DescribeBillingInformation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeBillingInformationOutput::class, $context);
    }

    /**
     * @param UpdateBillingInformationInput $input message
     * @param array $context request parameters
     *
     * @return UpdateBillingInformationOutput output message
     */
    public function UpdateBillingInformation(UpdateBillingInformationInput $input, array $context = [])
    {
        $path = "/billing/info";

        $context['name'] = "eolymp.universe.BillingService/UpdateBillingInformation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateBillingInformationOutput::class, $context);
    }

    /**
     * @param DescribeSubscriptionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSubscriptionOutput output message
     */
    public function DescribeSubscription(DescribeSubscriptionInput $input, array $context = [])
    {
        $path = "/billing/subscription";

        $context['name'] = "eolymp.universe.BillingService/DescribeSubscription";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeSubscriptionOutput::class, $context);
    }

    /**
     * @param CreateSubscriptionInput $input message
     * @param array $context request parameters
     *
     * @return CreateSubscriptionOutput output message
     */
    public function CreateSubscription(CreateSubscriptionInput $input, array $context = [])
    {
        $path = "/billing/subscription";

        $context['name'] = "eolymp.universe.BillingService/CreateSubscription";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateSubscriptionOutput::class, $context);
    }

    /**
     * @param UpdateSubscriptionInput $input message
     * @param array $context request parameters
     *
     * @return UpdateSubscriptionOutput output message
     */
    public function UpdateSubscription(UpdateSubscriptionInput $input, array $context = [])
    {
        $path = "/billing/subscription";

        $context['name'] = "eolymp.universe.BillingService/UpdateSubscription";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateSubscriptionOutput::class, $context);
    }

    /**
     * @param CancelSubscriptionInput $input message
     * @param array $context request parameters
     *
     * @return CancelSubscriptionOutput output message
     */
    public function CancelSubscription(CancelSubscriptionInput $input, array $context = [])
    {
        $path = "/billing/subscription";

        $context['name'] = "eolymp.universe.BillingService/CancelSubscription";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, CancelSubscriptionOutput::class, $context);
    }

    /**
     * @param StartSubscriptionTrialInput $input message
     * @param array $context request parameters
     *
     * @return StartSubscriptionTrialOutput output message
     */
    public function StartSubscriptionTrial(StartSubscriptionTrialInput $input, array $context = [])
    {
        $path = "/billing/trial/start";

        $context['name'] = "eolymp.universe.BillingService/StartSubscriptionTrial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, StartSubscriptionTrialOutput::class, $context);
    }

    /**
     * @param EndSubscriptionTrialInput $input message
     * @param array $context request parameters
     *
     * @return EndSubscriptionTrialOutput output message
     */
    public function EndSubscriptionTrial(EndSubscriptionTrialInput $input, array $context = [])
    {
        $path = "/billing/trial/end";

        $context['name'] = "eolymp.universe.BillingService/EndSubscriptionTrial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, EndSubscriptionTrialOutput::class, $context);
    }

    /**
     * @param SimulateSubscriptionInput $input message
     * @param array $context request parameters
     *
     * @return SimulateSubscriptionOutput output message
     */
    public function SimulateSubscription(SimulateSubscriptionInput $input, array $context = [])
    {
        $path = "/billing/subscription/simulate";

        $context['name'] = "eolymp.universe.BillingService/SimulateSubscription";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, SimulateSubscriptionOutput::class, $context);
    }

    /**
     * @param CreatePortalLinkInput $input message
     * @param array $context request parameters
     *
     * @return CreatePortalLinkOutput output message
     */
    public function CreatePortalLink(CreatePortalLinkInput $input, array $context = [])
    {
        $path = "/billing/portal-link";

        $context['name'] = "eolymp.universe.BillingService/CreatePortalLink";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreatePortalLinkOutput::class, $context);
    }

    /**
     * @param UpcomingInvoiceInput $input message
     * @param array $context request parameters
     *
     * @return UpcomingInvoiceOutput output message
     */
    public function UpcomingInvoice(UpcomingInvoiceInput $input, array $context = [])
    {
        $path = "/billing/upcoming";

        $context['name'] = "eolymp.universe.BillingService/UpcomingInvoice";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpcomingInvoiceOutput::class, $context);
    }

    /**
     * @param DescribeInvoiceInput $input message
     * @param array $context request parameters
     *
     * @return DescribeInvoiceOutput output message
     */
    public function DescribeInvoice(DescribeInvoiceInput $input, array $context = [])
    {
        $path = "/billing/invoice/".rawurlencode($input->getInvoiceId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setInvoiceId("");

        $context['name'] = "eolymp.universe.BillingService/DescribeInvoice";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, DescribeInvoiceOutput::class, $context);
    }

    /**
     * @param PayInvoiceInput $input message
     * @param array $context request parameters
     *
     * @return PayInvoiceOutput output message
     */
    public function PayInvoice(PayInvoiceInput $input, array $context = [])
    {
        $path = "/billing/invoice/".rawurlencode($input->getInvoiceId())."/pay";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setInvoiceId("");

        $context['name'] = "eolymp.universe.BillingService/PayInvoice";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, PayInvoiceOutput::class, $context);
    }

    /**
     * @param ListInvoicesInput $input message
     * @param array $context request parameters
     *
     * @return ListInvoicesOutput output message
     */
    public function ListInvoices(ListInvoicesInput $input, array $context = [])
    {
        $path = "/billing/invoices";

        $context['name'] = "eolymp.universe.BillingService/ListInvoices";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ListInvoicesOutput::class, $context);
    }

    /**
     * @param ListAvailablePlansInput $input message
     * @param array $context request parameters
     *
     * @return ListAvailablePlansOutput output message
     */
    public function ListAvailablePlans(ListAvailablePlansInput $input, array $context = [])
    {
        $path = "/billing/plans";

        $context['name'] = "eolymp.universe.BillingService/ListAvailablePlans";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ListAvailablePlansOutput::class, $context);
    }

}
