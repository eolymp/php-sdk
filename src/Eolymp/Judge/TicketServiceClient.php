<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Judge;

class TicketServiceClient {

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
     * @param CreateTicketInput $input message
     * @param array $context request parameters
     *
     * @return CreateTicketOutput output message
     */
    public function CreateTicket(CreateTicketInput $input, array $context = [])
    {
        $path = "/tickets";

        $context['name'] = "eolymp.judge.TicketService/CreateTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTicketOutput::class, $context);
    }

    /**
     * @param UpdateTicketInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTicketOutput output message
     */
    public function UpdateTicket(UpdateTicketInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.judge.TicketService/UpdateTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateTicketOutput::class, $context);
    }

    /**
     * ReadTicket marks ticket as read by participant (sets is_read flag to true).
     *
     * @param ReadTicketInput $input message
     * @param array $context request parameters
     *
     * @return ReadTicketOutput output message
     */
    public function ReadTicket(ReadTicketInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId())."/read";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.judge.TicketService/ReadTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ReadTicketOutput::class, $context);
    }

    /**
     * @param DeleteTicketInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTicketOutput output message
     */
    public function DeleteTicket(DeleteTicketInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.judge.TicketService/DeleteTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTicketOutput::class, $context);
    }

    /**
     * @param DescribeTicketInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTicketOutput output message
     */
    public function DescribeTicket(DescribeTicketInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.judge.TicketService/DescribeTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTicketOutput::class, $context);
    }

    /**
     * ListTickets fetches tickets matching criteria in the input parameter.
     *
     * @param ListTicketsInput $input message
     * @param array $context request parameters
     *
     * @return ListTicketsOutput output message
     */
    public function ListTickets(ListTicketsInput $input, array $context = [])
    {
        $path = "/tickets";

        $context['name'] = "eolymp.judge.TicketService/ListTickets";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTicketsOutput::class, $context);
    }

    /**
     * ReplyTicket allows to add reply to a ticket. If reply is added by participant it sets is_read and needs_reply to
     * true, otherwise, if reply added by contest administrator, this method sets these flags to false.
     *
     * @param ReplyTicketInput $input message
     * @param array $context request parameters
     *
     * @return ReplyTicketOutput output message
     */
    public function ReplyTicket(ReplyTicketInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId())."/replies";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.judge.TicketService/ReplyTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ReplyTicketOutput::class, $context);
    }

    /**
     * ListReplies fetches replies for a particular ticket.
     *
     * @param ListRepliesInput $input message
     * @param array $context request parameters
     *
     * @return ListRepliesOutput output message
     */
    public function ListReplies(ListRepliesInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId())."/replies";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.judge.TicketService/ListReplies";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListRepliesOutput::class, $context);
    }

    /**
     * DeleteReply allows author to delete his own reply.
     *
     * @param DescribeReplyInput $input message
     * @param array $context request parameters
     *
     * @return DescribeReplyOutput output message
     */
    public function DescribeReply(DescribeReplyInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId())."/replies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");
        $input->setReplyId("");

        $context['name'] = "eolymp.judge.TicketService/DescribeReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeReplyOutput::class, $context);
    }

    /**
     * DeleteReply allows author to delete his own reply.
     *
     * @param DeleteReplyInput $input message
     * @param array $context request parameters
     *
     * @return DeleteReplyOutput output message
     */
    public function DeleteReply(DeleteReplyInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId())."/replies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");
        $input->setReplyId("");

        $context['name'] = "eolymp.judge.TicketService/DeleteReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteReplyOutput::class, $context);
    }

    /**
     * UpdateReply allows author to update his own reply.
     *
     * @param UpdateReplyInput $input message
     * @param array $context request parameters
     *
     * @return UpdateReplyOutput output message
     */
    public function UpdateReply(UpdateReplyInput $input, array $context = [])
    {
        $path = "/tickets/".rawurlencode($input->getTicketId())."/replies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");
        $input->setReplyId("");

        $context['name'] = "eolymp.judge.TicketService/UpdateReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateReplyOutput::class, $context);
    }

}
