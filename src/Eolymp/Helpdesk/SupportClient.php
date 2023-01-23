<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Helpdesk;

class SupportClient {

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
        $path = "/helpdesk/tickets";

        $context['name'] = "eolymp.helpdesk.Support/CreateTicket";
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
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/UpdateTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTicketOutput::class, $context);
    }

    /**
     * @param DeleteTicketInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTicketOutput output message
     */
    public function DeleteTicket(DeleteTicketInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/DeleteTicket";
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
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/DescribeTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTicketOutput::class, $context);
    }

    /**
     * @param ListTicketsInput $input message
     * @param array $context request parameters
     *
     * @return ListTicketsOutput output message
     */
    public function ListTickets(ListTicketsInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets";

        $context['name'] = "eolymp.helpdesk.Support/ListTickets";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTicketsOutput::class, $context);
    }

    /**
     * @param ApproveTicketInput $input message
     * @param array $context request parameters
     *
     * @return ApproveTicketOutput output message
     */
    public function ApproveTicket(ApproveTicketInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/approve";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/ApproveTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ApproveTicketOutput::class, $context);
    }

    /**
     * @param RejectTicketInput $input message
     * @param array $context request parameters
     *
     * @return RejectTicketOutput output message
     */
    public function RejectTicket(RejectTicketInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/reject";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/RejectTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, RejectTicketOutput::class, $context);
    }

    /**
     * @param CloseTicketInput $input message
     * @param array $context request parameters
     *
     * @return CloseTicketOutput output message
     */
    public function CloseTicket(CloseTicketInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/close";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/CloseTicket";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CloseTicketOutput::class, $context);
    }

    /**
     * @param AddCommentInput $input message
     * @param array $context request parameters
     *
     * @return AddCommentOutput output message
     */
    public function AddComment(AddCommentInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/comments";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/AddComment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, AddCommentOutput::class, $context);
    }

    /**
     * @param UpdateCommentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateCommentOutput output message
     */
    public function UpdateComment(UpdateCommentInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/comments/".rawurlencode($input->getCommentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");
        $input->setCommentId("");

        $context['name'] = "eolymp.helpdesk.Support/UpdateComment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateCommentOutput::class, $context);
    }

    /**
     * @param DeleteCommentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteCommentOutput output message
     */
    public function DeleteComment(DeleteCommentInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/comments/".rawurlencode($input->getCommentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");
        $input->setCommentId("");

        $context['name'] = "eolymp.helpdesk.Support/DeleteComment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteCommentOutput::class, $context);
    }

    /**
     * @param ListCommentsInput $input message
     * @param array $context request parameters
     *
     * @return ListCommentsOutput output message
     */
    public function ListComments(ListCommentsInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/comments";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");

        $context['name'] = "eolymp.helpdesk.Support/ListComments";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListCommentsOutput::class, $context);
    }

    /**
     * @param DescribeCommentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCommentOutput output message
     */
    public function DescribeComment(DescribeCommentInput $input, array $context = [])
    {
        $path = "/helpdesk/tickets/".rawurlencode($input->getTicketId())."/comments/".rawurlencode($input->getCommentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTicketId("");
        $input->setCommentId("");

        $context['name'] = "eolymp.helpdesk.Support/DescribeComment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeCommentOutput::class, $context);
    }

    /**
     * @param CreateAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return CreateAutoReplyOutput output message
     */
    public function CreateAutoReply(CreateAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/autoreplies";

        $context['name'] = "eolymp.helpdesk.Support/CreateAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAutoReplyOutput::class, $context);
    }

    /**
     * @param UpdateAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAutoReplyOutput output message
     */
    public function UpdateAutoReply(UpdateAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/autoreplies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setReplyId("");

        $context['name'] = "eolymp.helpdesk.Support/UpdateAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateAutoReplyOutput::class, $context);
    }

    /**
     * @param DeleteAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAutoReplyOutput output message
     */
    public function DeleteAutoReply(DeleteAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/autoreplies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setReplyId("");

        $context['name'] = "eolymp.helpdesk.Support/DeleteAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAutoReplyOutput::class, $context);
    }

    /**
     * @param ListAutoRepliesInput $input message
     * @param array $context request parameters
     *
     * @return ListAutoRepliesOutput output message
     */
    public function ListAutoReplys(ListAutoRepliesInput $input, array $context = [])
    {
        $path = "/helpdesk/autoreplies";

        $context['name'] = "eolymp.helpdesk.Support/ListAutoReplys";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAutoRepliesOutput::class, $context);
    }

    /**
     * @param DescribeAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAutoReplyOutput output message
     */
    public function DescribeAutoReply(DescribeAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/autoreplies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setReplyId("");

        $context['name'] = "eolymp.helpdesk.Support/DescribeAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeAutoReplyOutput::class, $context);
    }

}
