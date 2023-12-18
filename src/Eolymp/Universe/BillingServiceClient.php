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
     * @param DescribeCurrentPlanInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCurrentPlanOutput output message
     */
    public function DescribeCurrentPlan(DescribeCurrentPlanInput $input, array $context = [])
    {
        $path = "/billing/plan";

        $context['name'] = "eolymp.universe.BillingService/DescribeCurrentPlan";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeCurrentPlanOutput::class, $context);
    }

    /**
     * @param UpdateCurrentPlanInput $input message
     * @param array $context request parameters
     *
     * @return UpdateCurrentPlanOutput output message
     */
    public function UpdateCurrentPlan(UpdateCurrentPlanInput $input, array $context = [])
    {
        $path = "/billing/plan";

        $context['name'] = "eolymp.universe.BillingService/UpdateCurrentPlan";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateCurrentPlanOutput::class, $context);
    }

    /**
     * @param CancelCurrentPlanInput $input message
     * @param array $context request parameters
     *
     * @return CancelCurrentPlanOutput output message
     */
    public function CancelCurrentPlan(CancelCurrentPlanInput $input, array $context = [])
    {
        $path = "/billing/plan";

        $context['name'] = "eolymp.universe.BillingService/CancelCurrentPlan";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, CancelCurrentPlanOutput::class, $context);
    }

}
