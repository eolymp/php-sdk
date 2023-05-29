<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class AtlasClient {

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
     * @param CreateProblemInput $input message
     * @param array $context request parameters
     *
     * @return CreateProblemOutput output message
     */
    public function CreateProblem(CreateProblemInput $input, array $context = [])
    {
        $path = "/problems";

        $context['name'] = "eolymp.atlas.Atlas/CreateProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateProblemOutput::class, $context);
    }

    /**
     * @param DeleteProblemInput $input message
     * @param array $context request parameters
     *
     * @return DeleteProblemOutput output message
     */
    public function DeleteProblem(DeleteProblemInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/DeleteProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteProblemOutput::class, $context);
    }

    /**
     * @param ListProblemsInput $input message
     * @param array $context request parameters
     *
     * @return ListProblemsOutput output message
     */
    public function ListProblems(ListProblemsInput $input, array $context = [])
    {
        $path = "/problems";

        $context['name'] = "eolymp.atlas.Atlas/ListProblems";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListProblemsOutput::class, $context);
    }

    /**
     * @param DescribeProblemInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemOutput output message
     */
    public function DescribeProblem(DescribeProblemInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeProblemOutput::class, $context);
    }

    /**
     * @param UpdateProblemInput $input message
     * @param array $context request parameters
     *
     * @return UpdateProblemOutput output message
     */
    public function UpdateProblem(UpdateProblemInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateProblemOutput::class, $context);
    }

    /**
     * @param SetBookmarkInput $input message
     * @param array $context request parameters
     *
     * @return SetBookmarkOutput output message
     */
    public function SetBookmark(SetBookmarkInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/bookmark";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/SetBookmark";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, SetBookmarkOutput::class, $context);
    }

    /**
     * @param GetBookmarkInput $input message
     * @param array $context request parameters
     *
     * @return GetBookmarkOutput output message
     */
    public function GetBookmark(GetBookmarkInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/bookmark";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/GetBookmark";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, GetBookmarkOutput::class, $context);
    }

    /**
     * @param ListExamplesInput $input message
     * @param array $context request parameters
     *
     * @return ListExamplesOutput output message
     */
    public function ListExamples(ListExamplesInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/examples";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListExamples";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListExamplesOutput::class, $context);
    }

    /**
     * @param UpdateVerifierInput $input message
     * @param array $context request parameters
     *
     * @return UpdateVerifierOutput output message
     */
    public function UpdateVerifier(UpdateVerifierInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/verifier";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateVerifier";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateVerifierOutput::class, $context);
    }

    /**
     * @param DescribeVerifierInput $input message
     * @param array $context request parameters
     *
     * @return DescribeVerifierOutput output message
     */
    public function DescribeVerifier(DescribeVerifierInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/verifier";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeVerifier";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeVerifierOutput::class, $context);
    }

    /**
     * @param UpdateInteractorInput $input message
     * @param array $context request parameters
     *
     * @return UpdateInteractorOutput output message
     */
    public function UpdateInteractor(UpdateInteractorInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/interactor";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateInteractor";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateInteractorOutput::class, $context);
    }

    /**
     * @param DescribeInteractorInput $input message
     * @param array $context request parameters
     *
     * @return DescribeInteractorOutput output message
     */
    public function DescribeInteractor(DescribeInteractorInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/interactor";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeInteractor";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeInteractorOutput::class, $context);
    }

    /**
     * @param CreateStatementInput $input message
     * @param array $context request parameters
     *
     * @return CreateStatementOutput output message
     */
    public function CreateStatement(CreateStatementInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/statements";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/CreateStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, CreateStatementOutput::class, $context);
    }

    /**
     * @param UpdateStatementInput $input message
     * @param array $context request parameters
     *
     * @return UpdateStatementOutput output message
     */
    public function UpdateStatement(UpdateStatementInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/statements/".rawurlencode($input->getStatementId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setStatementId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateStatementOutput::class, $context);
    }

    /**
     * @param DeleteStatementInput $input message
     * @param array $context request parameters
     *
     * @return DeleteStatementOutput output message
     */
    public function DeleteStatement(DeleteStatementInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/statements/".rawurlencode($input->getStatementId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setStatementId("");

        $context['name'] = "eolymp.atlas.Atlas/DeleteStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteStatementOutput::class, $context);
    }

    /**
     * @param ListStatementsInput $input message
     * @param array $context request parameters
     *
     * @return ListStatementsOutput output message
     */
    public function ListStatements(ListStatementsInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/statements";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListStatements";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListStatementsOutput::class, $context);
    }

    /**
     * DescribeStatement returns statement.
     *
     * @param DescribeStatementInput $input message
     * @param array $context request parameters
     *
     * @return DescribeStatementOutput output message
     */
    public function DescribeStatement(DescribeStatementInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/statements/".rawurlencode($input->getStatementId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setStatementId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeStatementOutput::class, $context);
    }

    /**
     * LookupStatement finds a statement in one of the requested languages.
     *
     * @param LookupStatementInput $input message
     * @param array $context request parameters
     *
     * @return LookupStatementOutput output message
     */
    public function LookupStatement(LookupStatementInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/translate";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/LookupStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, LookupStatementOutput::class, $context);
    }

    /**
     * PreviewStatement renders unsaved statement.
     *
     * This method can be used to render statement before it has been saved.
     *
     * @param PreviewStatementInput $input message
     * @param array $context request parameters
     *
     * @return PreviewStatementOutput output message
     */
    public function PreviewStatement(PreviewStatementInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/renders";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/PreviewStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, PreviewStatementOutput::class, $context);
    }

    /**
     * @param CreateTestsetInput $input message
     * @param array $context request parameters
     *
     * @return CreateTestsetOutput output message
     */
    public function CreateTestset(CreateTestsetInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/CreateTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTestsetOutput::class, $context);
    }

    /**
     * @param UpdateTestsetInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTestsetOutput output message
     */
    public function UpdateTestset(UpdateTestsetInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTestsetOutput::class, $context);
    }

    /**
     * @param DeleteTestsetInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTestsetOutput output message
     */
    public function DeleteTestset(DeleteTestsetInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.Atlas/DeleteTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTestsetOutput::class, $context);
    }

    /**
     * @param ListTestsetsInput $input message
     * @param array $context request parameters
     *
     * @return ListTestsetsOutput output message
     */
    public function ListTestsets(ListTestsetsInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListTestsets";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTestsetsOutput::class, $context);
    }

    /**
     * @param DescribeTestsetInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTestsetOutput output message
     */
    public function DescribeTestset(DescribeTestsetInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTestsetOutput::class, $context);
    }

    /**
     * @param CreateTestInput $input message
     * @param array $context request parameters
     *
     * @return CreateTestOutput output message
     */
    public function CreateTest(CreateTestInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId())."/tests";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.Atlas/CreateTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTestOutput::class, $context);
    }

    /**
     * @param UpdateTestInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTestOutput output message
     */
    public function UpdateTest(UpdateTestInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId())."/tests/".rawurlencode($input->getTestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");
        $input->setTestId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTestOutput::class, $context);
    }

    /**
     * @param DeleteTestInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTestOutput output message
     */
    public function DeleteTest(DeleteTestInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId())."/tests/".rawurlencode($input->getTestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");
        $input->setTestId("");

        $context['name'] = "eolymp.atlas.Atlas/DeleteTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTestOutput::class, $context);
    }

    /**
     * @param ListTestsInput $input message
     * @param array $context request parameters
     *
     * @return ListTestsOutput output message
     */
    public function ListTests(ListTestsInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId())."/tests";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.Atlas/ListTests";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTestsOutput::class, $context);
    }

    /**
     * @param DescribeTestInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTestOutput output message
     */
    public function DescribeTest(DescribeTestInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/testsets/".rawurlencode($input->getTestsetId())."/tests/".rawurlencode($input->getTestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTestsetId("");
        $input->setTestId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTestOutput::class, $context);
    }

    /**
     * @param CreateCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return CreateCodeTemplateOutput output message
     */
    public function CreateCodeTemplate(CreateCodeTemplateInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/templates";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/CreateCodeTemplate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateCodeTemplateOutput::class, $context);
    }

    /**
     * @param UpdateCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return UpdateCodeTemplateOutput output message
     */
    public function UpdateCodeTemplate(UpdateCodeTemplateInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/templates/".rawurlencode($input->getTemplateId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTemplateId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateCodeTemplate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateCodeTemplateOutput::class, $context);
    }

    /**
     * @param DeleteCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return DeleteCodeTemplateOutput output message
     */
    public function DeleteCodeTemplate(DeleteCodeTemplateInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/templates/".rawurlencode($input->getTemplateId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTemplateId("");

        $context['name'] = "eolymp.atlas.Atlas/DeleteCodeTemplate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteCodeTemplateOutput::class, $context);
    }

    /**
     * @param ListCodeTemplatesInput $input message
     * @param array $context request parameters
     *
     * @return ListCodeTemplatesOutput output message
     */
    public function ListCodeTemplates(ListCodeTemplatesInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/templates";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListCodeTemplates";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListCodeTemplatesOutput::class, $context);
    }

    /**
     * @param DescribeCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCodeTemplateOutput output message
     */
    public function DescribeCodeTemplate(DescribeCodeTemplateInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/templates/".rawurlencode($input->getTemplateId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setTemplateId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeCodeTemplate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeCodeTemplateOutput::class, $context);
    }

    /**
     * @param LookupCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return LookupCodeTemplateOutput output message
     */
    public function LookupCodeTemplate(LookupCodeTemplateInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/template";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/LookupCodeTemplate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, LookupCodeTemplateOutput::class, $context);
    }

    /**
     * @param CreateAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return CreateAttachmentOutput output message
     */
    public function CreateAttachment(CreateAttachmentInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/attachments";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/CreateAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAttachmentOutput::class, $context);
    }

    /**
     * @param UpdateAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAttachmentOutput output message
     */
    public function UpdateAttachment(UpdateAttachmentInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/attachments/".rawurlencode($input->getAttachmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setAttachmentId("");

        $context['name'] = "eolymp.atlas.Atlas/UpdateAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateAttachmentOutput::class, $context);
    }

    /**
     * @param DeleteAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAttachmentOutput output message
     */
    public function DeleteAttachment(DeleteAttachmentInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/attachments/".rawurlencode($input->getAttachmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setAttachmentId("");

        $context['name'] = "eolymp.atlas.Atlas/DeleteAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAttachmentOutput::class, $context);
    }

    /**
     * @param ListAttachmentsInput $input message
     * @param array $context request parameters
     *
     * @return ListAttachmentsOutput output message
     */
    public function ListAttachments(ListAttachmentsInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/attachments";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListAttachments";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAttachmentsOutput::class, $context);
    }

    /**
     * @param DescribeAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAttachmentOutput output message
     */
    public function DescribeAttachment(DescribeAttachmentInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/attachments/".rawurlencode($input->getAttachmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setAttachmentId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeAttachmentOutput::class, $context);
    }

    /**
     * @param ListVersionsInput $input message
     * @param array $context request parameters
     *
     * @return ListVersionsOutput output message
     */
    public function ListVersions(ListVersionsInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/versions";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListVersions";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListVersionsOutput::class, $context);
    }

    /**
     * @param ListProblemTopInput $input message
     * @param array $context request parameters
     *
     * @return ListProblemTopOutput output message
     */
    public function ListProblemTop(ListProblemTopInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/top";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/ListProblemTop";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListProblemTopOutput::class, $context);
    }

    /**
     * @param DescribeProblemGradingInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemGradingOutput output message
     */
    public function DescribeProblemGrading(DescribeProblemGradingInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/grading";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeProblemGrading";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeProblemGradingOutput::class, $context);
    }

    /**
     * @param CreateSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return CreateSubmissionOutput output message
     */
    public function CreateSubmission(CreateSubmissionInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/submissions";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.Atlas/CreateSubmission";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateSubmissionOutput::class, $context);
    }

    /**
     * @param DescribeSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSubmissionOutput output message
     */
    public function DescribeSubmission(DescribeSubmissionInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/submissions/".rawurlencode($input->getSubmissionId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setSubmissionId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeSubmission";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeSubmissionOutput::class, $context);
    }

    /**
     * @param RetestSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return RetestSubmissionOutput output message
     */
    public function RetestSubmission(RetestSubmissionInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/submissions/".rawurlencode($input->getSubmissionId())."/retest";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setSubmissionId("");

        $context['name'] = "eolymp.atlas.Atlas/RetestSubmission";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, RetestSubmissionOutput::class, $context);
    }

    /**
     * @param ListSubmissionsInput $input message
     * @param array $context request parameters
     *
     * @return ListSubmissionsOutput output message
     */
    public function ListSubmissions(ListSubmissionsInput $input, array $context = [])
    {
        $path = "/submissions";

        $context['name'] = "eolymp.atlas.Atlas/ListSubmissions";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListSubmissionsOutput::class, $context);
    }

    /**
     * @param DescribeScoreInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreOutput output message
     */
    public function DescribeScore(DescribeScoreInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId())."/scores/".rawurlencode($input->getUserId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");
        $input->setUserId("");

        $context['name'] = "eolymp.atlas.Atlas/DescribeScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeScoreOutput::class, $context);
    }

}
