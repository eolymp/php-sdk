<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Judge;

class JudgeClient {

    /** @var callable RPC client */
    private $invoker;

    /**
     * @param callable $invoker for RPC calls
     */
    public function __construct($invoker)
    {
        $this->invoker = $invoker;
    }

    /**
     * @param CreateContestInput $input message
     * @param array $context request parameters
     *
     * @return CreateContestOutput output message
     */
    public function CreateContest(CreateContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CreateContest", $input, CreateContestOutput::class, $context);
    }

    /**
     * @param DeleteContestInput $input message
     * @param array $context request parameters
     *
     * @return DeleteContestOutput output message
     */
    public function DeleteContest(DeleteContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DeleteContest", $input, DeleteContestOutput::class, $context);
    }

    /**
     * @param UpdateContestInput $input message
     * @param array $context request parameters
     *
     * @return UpdateContestOutput output message
     */
    public function UpdateContest(UpdateContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/UpdateContest", $input, UpdateContestOutput::class, $context);
    }

    /**
     * LookupContest fetches basic (possibly incomplete) contest information. Right now this method is very similar to
     * DescribeContest, but looks up contest by domain name (key). Its purpose is different than DescribeContest, as
     * it attempts to "probe" contest rather than fetch complete information.
     *
     * This is first API call made by contest-ui just to check if domain name can be resolved into Contest ID.
     *
     * @param LookupContestInput $input message
     * @param array $context request parameters
     *
     * @return LookupContestOutput output message
     */
    public function LookupContest(LookupContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/LookupContest", $input, LookupContestOutput::class, $context);
    }

    /**
     * @param DescribeContestInput $input message
     * @param array $context request parameters
     *
     * @return DescribeContestOutput output message
     */
    public function DescribeContest(DescribeContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeContest", $input, DescribeContestOutput::class, $context);
    }

    /**
     * @param ListContestsInput $input message
     * @param array $context request parameters
     *
     * @return ListContestsOutput output message
     */
    public function ListContests(ListContestsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListContests", $input, ListContestsOutput::class, $context);
    }

    /**
     * Force-starts scheduled contest, this call also automatically changes starts_at to current time and adjusts
     * ends_at to match original date range of the contest.
     *
     * @param OpenContestInput $input message
     * @param array $context request parameters
     *
     * @return OpenContestOutput output message
     */
    public function OpenContest(OpenContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/OpenContest", $input, OpenContestOutput::class, $context);
    }

    /**
     * Force-finishes open contest, this method automatically changes ends_at to current time.
     *
     * @param CloseContestInput $input message
     * @param array $context request parameters
     *
     * @return CloseContestOutput output message
     */
    public function CloseContest(CloseContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CloseContest", $input, CloseContestOutput::class, $context);
    }

    /**
     * ConfigureRegistrationForm allows to configure registration form for the contest.
     *
     * @param ConfigureRegistrationFormInput $input message
     * @param array $context request parameters
     *
     * @return ConfigureRegistrationFormOutput output message
     */
    public function ConfigureRegistrationForm(ConfigureRegistrationFormInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ConfigureRegistrationForm", $input, ConfigureRegistrationFormOutput::class, $context);
    }

    /**
     * DescribeRegistrationForm allows fetch registration form for the contest.
     *
     * @param DescribeRegistrationFormInput $input message
     * @param array $context request parameters
     *
     * @return DescribeRegistrationFormOutput output message
     */
    public function DescribeRegistrationForm(DescribeRegistrationFormInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeRegistrationForm", $input, DescribeRegistrationFormOutput::class, $context);
    }

    /**
     * ConfigureRuntime allows to configure which runtimes will be available during contest.
     * All available runtimes can be retrieved using `executor.ListRuntime` method.
     *
     * @param ConfigureRuntimeInput $input message
     * @param array $context request parameters
     *
     * @return ConfigureRuntimeOutput output message
     */
    public function ConfigureRuntime(ConfigureRuntimeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ConfigureRuntime", $input, ConfigureRuntimeOutput::class, $context);
    }

    /**
     * DescribeRegistrationForm allows fetch registration form for the contest.
     *
     * @param DescribeRuntimeInput $input message
     * @param array $context request parameters
     *
     * @return DescribeRuntimeOutput output message
     */
    public function DescribeRuntime(DescribeRuntimeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeRuntime", $input, DescribeRuntimeOutput::class, $context);
    }

    /**
     * ConfigureAppearance allows to configure contest website appearance.
     *
     * @param ConfigureAppearanceInput $input message
     * @param array $context request parameters
     *
     * @return ConfigureAppearanceOutput output message
     */
    public function ConfigureAppearance(ConfigureAppearanceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ConfigureAppearance", $input, ConfigureAppearanceOutput::class, $context);
    }

    /**
     * DescribeAppearance allows fetch contest website appearance.
     *
     * @param DescribeAppearanceInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAppearanceOutput output message
     */
    public function DescribeAppearance(DescribeAppearanceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeAppearance", $input, DescribeAppearanceOutput::class, $context);
    }

    /**
     * SubmitRegistration allows participant to submit registration form data.
     *
     * @param SubmitRegistrationInput $input message
     * @param array $context request parameters
     *
     * @return SubmitRegistrationOutput output message
     */
    public function SubmitRegistration(SubmitRegistrationInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/SubmitRegistration", $input, SubmitRegistrationOutput::class, $context);
    }

    /**
     * DescribeRegistration allows participant to submit registration form data.
     *
     * @param DescribeRegistrationInput $input message
     * @param array $context request parameters
     *
     * @return DescribeRegistrationOutput output message
     */
    public function DescribeRegistration(DescribeRegistrationInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeRegistration", $input, DescribeRegistrationOutput::class, $context);
    }

    /**
     * ImportProblem from Atlas (problem catalog)
     *
     * @param ImportProblemInput $input message
     * @param array $context request parameters
     *
     * @return ImportProblemOutput output message
     */
    public function ImportProblem(ImportProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ImportProblem", $input, ImportProblemOutput::class, $context);
    }

    /**
     * SyncProblem with Atlas (problem catalog)
     *
     * @param SyncProblemInput $input message
     * @param array $context request parameters
     *
     * @return SyncProblemOutput output message
     */
    public function SyncProblem(SyncProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/SyncProblem", $input, SyncProblemOutput::class, $context);
    }

    /**
     * @param UpdateProblemInput $input message
     * @param array $context request parameters
     *
     * @return UpdateProblemOutput output message
     */
    public function UpdateProblem(UpdateProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/UpdateProblem", $input, UpdateProblemOutput::class, $context);
    }

    /**
     * @param ListProblemsInput $input message
     * @param array $context request parameters
     *
     * @return ListProblemsOutput output message
     */
    public function ListProblems(ListProblemsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListProblems", $input, ListProblemsOutput::class, $context);
    }

    /**
     * @param DescribeProblemInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemOutput output message
     */
    public function DescribeProblem(DescribeProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeProblem", $input, DescribeProblemOutput::class, $context);
    }

    /**
     * Return code template for problem
     *
     * @param DescribeCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCodeTemplateOutput output message
     */
    public function DescribeCodeTemplate(DescribeCodeTemplateInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeCodeTemplate", $input, DescribeCodeTemplateOutput::class, $context);
    }

    /**
     * @param ListStatementsInput $input message
     * @param array $context request parameters
     *
     * @return ListStatementsOutput output message
     */
    public function ListStatements(ListStatementsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListStatements", $input, ListStatementsOutput::class, $context);
    }

    /**
     * @param ListAttachmentsInput $input message
     * @param array $context request parameters
     *
     * @return ListAttachmentsOutput output message
     */
    public function ListAttachments(ListAttachmentsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListAttachments", $input, ListAttachmentsOutput::class, $context);
    }

    /**
     * @param ListExamplesInput $input message
     * @param array $context request parameters
     *
     * @return ListExamplesOutput output message
     */
    public function ListExamples(ListExamplesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListExamples", $input, ListExamplesOutput::class, $context);
    }

    /**
     * @param DeleteProblemInput $input message
     * @param array $context request parameters
     *
     * @return DeleteProblemOutput output message
     */
    public function DeleteProblem(DeleteProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DeleteProblem", $input, DeleteProblemOutput::class, $context);
    }

    /**
     * RetestProblem resets existing submissions for the problem and triggers testing process again.
     *
     * @param RetestProblemInput $input message
     * @param array $context request parameters
     *
     * @return RetestProblemOutput output message
     */
    public function RetestProblem(RetestProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/RetestProblem", $input, RetestProblemOutput::class, $context);
    }

    /**
     * @param AddParticipantInput $input message
     * @param array $context request parameters
     *
     * @return AddParticipantOutput output message
     */
    public function AddParticipant(AddParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/AddParticipant", $input, AddParticipantOutput::class, $context);
    }

    /**
     * @param EnableParticipantInput $input message
     * @param array $context request parameters
     *
     * @return EnableParticipantOutput output message
     */
    public function EnableParticipant(EnableParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/EnableParticipant", $input, EnableParticipantOutput::class, $context);
    }

    /**
     * @param DisableParticipantInput $input message
     * @param array $context request parameters
     *
     * @return DisableParticipantOutput output message
     */
    public function DisableParticipant(DisableParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DisableParticipant", $input, DisableParticipantOutput::class, $context);
    }

    /**
     * @param UpdateParticipantInput $input message
     * @param array $context request parameters
     *
     * @return UpdateParticipantOutput output message
     */
    public function UpdateParticipant(UpdateParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/UpdateParticipant", $input, UpdateParticipantOutput::class, $context);
    }

    /**
     * @param RemoveParticipantInput $input message
     * @param array $context request parameters
     *
     * @return RemoveParticipantOutput output message
     */
    public function RemoveParticipant(RemoveParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/RemoveParticipant", $input, RemoveParticipantOutput::class, $context);
    }

    /**
     * @param ListParticipantsInput $input message
     * @param array $context request parameters
     *
     * @return ListParticipantsOutput output message
     */
    public function ListParticipants(ListParticipantsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListParticipants", $input, ListParticipantsOutput::class, $context);
    }

    /**
     * @param DescribeParticipantInput $input message
     * @param array $context request parameters
     *
     * @return DescribeParticipantOutput output message
     */
    public function DescribeParticipant(DescribeParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeParticipant", $input, DescribeParticipantOutput::class, $context);
    }

    /**
     * IntrospectParticipant allows to fetch participant data for a currently authorized user.
     *
     * @param IntrospectParticipantInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectParticipantOutput output message
     */
    public function IntrospectParticipant(IntrospectParticipantInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/IntrospectParticipant", $input, IntrospectParticipantOutput::class, $context);
    }

    /**
     * Allows a participant (currently authorized user) to join (add himself to) a public contest.
     *
     * @param JoinContestInput $input message
     * @param array $context request parameters
     *
     * @return JoinContestOutput output message
     */
    public function JoinContest(JoinContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/JoinContest", $input, JoinContestOutput::class, $context);
    }

    /**
     * Allows a participant (currently authorized user) to start participating in the contest, see problems and submit solutions.
     *
     * @param StartContestInput $input message
     * @param array $context request parameters
     *
     * @return StartContestOutput output message
     */
    public function StartContest(StartContestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/StartContest", $input, StartContestOutput::class, $context);
    }

    /**
     * Verify if passcode is required for the contest and if authenticated token has entered the passcode.
     *
     * @param VerifyPasscodeInput $input message
     * @param array $context request parameters
     *
     * @return VerifyPasscodeOutput output message
     */
    public function VerifyPasscode(VerifyPasscodeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/VerifyPasscode", $input, VerifyPasscodeOutput::class, $context);
    }

    /**
     * Enter passcode marks current session as one authenticated by passcode.
     *
     * @param EnterPasscodeInput $input message
     * @param array $context request parameters
     *
     * @return EnterPasscodeOutput output message
     */
    public function EnterPasscode(EnterPasscodeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/EnterPasscode", $input, EnterPasscodeOutput::class, $context);
    }

    /**
     * Set a new passcode to the participant, if passcode was not set it will be now required
     *
     * @param ResetPasscodeInput $input message
     * @param array $context request parameters
     *
     * @return ResetPasscodeOutput output message
     */
    public function ResetPasscode(ResetPasscodeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ResetPasscode", $input, ResetPasscodeOutput::class, $context);
    }

    /**
     * Remove passcode from participant and allow her to enter contest without passcode.
     *
     * @param RemovePasscodeInput $input message
     * @param array $context request parameters
     *
     * @return RemovePasscodeOutput output message
     */
    public function RemovePasscode(RemovePasscodeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/RemovePasscode", $input, RemovePasscodeOutput::class, $context);
    }

    /**
     * Creates submissions and triggers test process.
     *
     * @param CreateSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return CreateSubmissionOutput output message
     */
    public function CreateSubmission(CreateSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CreateSubmission", $input, CreateSubmissionOutput::class, $context);
    }

    /**
     * @param ListSubmissionsInput $input message
     * @param array $context request parameters
     *
     * @return ListSubmissionsOutput output message
     */
    public function ListSubmissions(ListSubmissionsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListSubmissions", $input, ListSubmissionsOutput::class, $context);
    }

    /**
     * @param DescribeSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSubmissionOutput output message
     */
    public function DescribeSubmission(DescribeSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeSubmission", $input, DescribeSubmissionOutput::class, $context);
    }

    /**
     * Resets submission results and triggers testing process.
     *
     * @param RetestSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return RetestSubmissionOutput output message
     */
    public function RetestSubmission(RetestSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/RetestSubmission", $input, RetestSubmissionOutput::class, $context);
    }

    /**
     * Create a new ticket
     *
     * @param CreateTicketInput $input message
     * @param array $context request parameters
     *
     * @return CreateTicketOutput output message
     */
    public function CreateTicket(CreateTicketInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CreateTicket", $input, CreateTicketOutput::class, $context);
    }

    /**
     * Mark ticket as Closed
     *
     * @param CloseTicketInput $input message
     * @param array $context request parameters
     *
     * @return CloseTicketOutput output message
     */
    public function CloseTicket(CloseTicketInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CloseTicket", $input, CloseTicketOutput::class, $context);
    }

    /**
     * Mark ticket as Open
     *
     * @param OpenTicketInput $input message
     * @param array $context request parameters
     *
     * @return OpenTicketOutput output message
     */
    public function OpenTicket(OpenTicketInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/OpenTicket", $input, OpenTicketOutput::class, $context);
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
        return call_user_func($this->invoker, "eolymp.judge.Judge/ReadTicket", $input, ReadTicketOutput::class, $context);
    }

    /**
     * @param DeleteTicketInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTicketOutput output message
     */
    public function DeleteTicket(DeleteTicketInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DeleteTicket", $input, DeleteTicketOutput::class, $context);
    }

    /**
     * @param DescribeTicketInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTicketOutput output message
     */
    public function DescribeTicket(DescribeTicketInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeTicket", $input, DescribeTicketOutput::class, $context);
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
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListTickets", $input, ListTicketsOutput::class, $context);
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
        return call_user_func($this->invoker, "eolymp.judge.Judge/ReplyTicket", $input, ReplyTicketOutput::class, $context);
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
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListReplies", $input, ListRepliesOutput::class, $context);
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
        return call_user_func($this->invoker, "eolymp.judge.Judge/DeleteReply", $input, DeleteReplyOutput::class, $context);
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
        return call_user_func($this->invoker, "eolymp.judge.Judge/UpdateReply", $input, UpdateReplyOutput::class, $context);
    }

    /**
     * Create announcement for a contest
     *
     * @param CreateAnnouncementInput $input message
     * @param array $context request parameters
     *
     * @return CreateAnnouncementOutput output message
     */
    public function CreateAnnouncement(CreateAnnouncementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CreateAnnouncement", $input, CreateAnnouncementOutput::class, $context);
    }

    /**
     * Update existing announcement in a contest
     *
     * @param UpdateAnnouncementInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAnnouncementOutput output message
     */
    public function UpdateAnnouncement(UpdateAnnouncementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/UpdateAnnouncement", $input, UpdateAnnouncementOutput::class, $context);
    }

    /**
     * Delete announcement
     *
     * @param DeleteAnnouncementInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAnnouncementOutput output message
     */
    public function DeleteAnnouncement(DeleteAnnouncementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DeleteAnnouncement", $input, DeleteAnnouncementOutput::class, $context);
    }

    /**
     * Mark announcement as read by authenticated participant
     *
     * @param ReadAnnouncementInput $input message
     * @param array $context request parameters
     *
     * @return ReadAnnouncementOutput output message
     */
    public function ReadAnnouncement(ReadAnnouncementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ReadAnnouncement", $input, ReadAnnouncementOutput::class, $context);
    }

    /**
     * Describe announcement
     *
     * @param DescribeAnnouncementInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAnnouncementOutput output message
     */
    public function DescribeAnnouncement(DescribeAnnouncementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeAnnouncement", $input, DescribeAnnouncementOutput::class, $context);
    }

    /**
     * Describe announcement status
     *
     * @param DescribeAnnouncementStatusInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAnnouncementStatusOutput output message
     */
    public function DescribeAnnouncementStatus(DescribeAnnouncementStatusInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeAnnouncementStatus", $input, DescribeAnnouncementStatusOutput::class, $context);
    }

    /**
     * List announcements of a contest
     *
     * @param ListAnnouncementsInput $input message
     * @param array $context request parameters
     *
     * @return ListAnnouncementsOutput output message
     */
    public function ListAnnouncements(ListAnnouncementsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListAnnouncements", $input, ListAnnouncementsOutput::class, $context);
    }

    /**
     * Create scoreboard for a contest
     *
     * @param CreateScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return CreateScoreboardOutput output message
     */
    public function CreateScoreboard(CreateScoreboardInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/CreateScoreboard", $input, CreateScoreboardOutput::class, $context);
    }

    /**
     * Update existing scoreboard in a contest
     *
     * @param UpdateScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return UpdateScoreboardOutput output message
     */
    public function UpdateScoreboard(UpdateScoreboardInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/UpdateScoreboard", $input, UpdateScoreboardOutput::class, $context);
    }

    /**
     * Rebuild scoreboard
     *
     * @param RebuildScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return RebuildScoreboardOutput output message
     */
    public function RebuildScoreboard(RebuildScoreboardInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/RebuildScoreboard", $input, RebuildScoreboardOutput::class, $context);
    }

    /**
     * Delete scoreboard
     *
     * @param DeleteScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return DeleteScoreboardOutput output message
     */
    public function DeleteScoreboard(DeleteScoreboardInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DeleteScoreboard", $input, DeleteScoreboardOutput::class, $context);
    }

    /**
     * Describe scoreboard
     *
     * @param DescribeScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardOutput output message
     */
    public function DescribeScoreboard(DescribeScoreboardInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeScoreboard", $input, DescribeScoreboardOutput::class, $context);
    }

    /**
     * Describe scoreboard
     *
     * @param DescribeDefaultScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return DescribeDefaultScoreboardOutput output message
     */
    public function DescribeDefaultScoreboard(DescribeDefaultScoreboardInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeDefaultScoreboard", $input, DescribeDefaultScoreboardOutput::class, $context);
    }

    /**
     * @param ListScoreboardsInput $input message
     * @param array $context request parameters
     *
     * @return ListScoreboardsOutput output message
     */
    public function ListScoreboards(ListScoreboardsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListScoreboards", $input, ListScoreboardsOutput::class, $context);
    }

    /**
     * @param DescribeScoreboardHeaderInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardHeaderOutput output message
     */
    public function DescribeScoreboardHeader(DescribeScoreboardHeaderInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeScoreboardHeader", $input, DescribeScoreboardHeaderOutput::class, $context);
    }

    /**
     * @param DescribeScoreboardFooterInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardFooterOutput output message
     */
    public function DescribeScoreboardFooter(DescribeScoreboardFooterInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeScoreboardFooter", $input, DescribeScoreboardFooterOutput::class, $context);
    }

    /**
     * @param DescribeScoreboardRowInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardRowOutput output message
     */
    public function DescribeScoreboardRow(DescribeScoreboardRowInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeScoreboardRow", $input, DescribeScoreboardRowOutput::class, $context);
    }

    /**
     * @param DescribeDefaultScoreboardRowInput $input message
     * @param array $context request parameters
     *
     * @return DescribeDefaultScoreboardRowOutput output message
     */
    public function DescribeDefaultScoreboardRow(DescribeDefaultScoreboardRowInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/DescribeDefaultScoreboardRow", $input, DescribeDefaultScoreboardRowOutput::class, $context);
    }

    /**
     * @param ListScoreboardRowsInput $input message
     * @param array $context request parameters
     *
     * @return ListScoreboardRowsOutput output message
     */
    public function ListScoreboardRows(ListScoreboardRowsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListScoreboardRows", $input, ListScoreboardRowsOutput::class, $context);
    }

    /**
     * @param ListDefaultScoreboardRowsInput $input message
     * @param array $context request parameters
     *
     * @return ListDefaultScoreboardRowsOutput output message
     */
    public function ListDefaultScoreboardRows(ListDefaultScoreboardRowsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListDefaultScoreboardRows", $input, ListDefaultScoreboardRowsOutput::class, $context);
    }

    /**
     * Lists entitlements granted to authenticated user.
     *
     * @param ListEntitlementsInput $input message
     * @param array $context request parameters
     *
     * @return ListEntitlementsOutput output message
     */
    public function ListEntitlements(ListEntitlementsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListEntitlements", $input, ListEntitlementsOutput::class, $context);
    }

    /**
     * @param ListActivitiesInput $input message
     * @param array $context request parameters
     *
     * @return ListActivitiesOutput output message
     */
    public function ListActivities(ListActivitiesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.judge.Judge/ListActivities", $input, ListActivitiesOutput::class, $context);
    }

}
