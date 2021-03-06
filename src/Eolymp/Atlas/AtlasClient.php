<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class AtlasClient {

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
     * @param CreateProblemInput $input message
     * @param array $context request parameters
     *
     * @return CreateProblemOutput output message
     */
    public function CreateProblem(CreateProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateProblem", $input, CreateProblemOutput::class, $context);
    }

    /**
     * @param DeleteProblemInput $input message
     * @param array $context request parameters
     *
     * @return DeleteProblemOutput output message
     */
    public function DeleteProblem(DeleteProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteProblem", $input, DeleteProblemOutput::class, $context);
    }

    /**
     * @param ListProblemsInput $input message
     * @param array $context request parameters
     *
     * @return ListProblemsOutput output message
     */
    public function ListProblems(ListProblemsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListProblems", $input, ListProblemsOutput::class, $context);
    }

    /**
     * @param DescribeProblemInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemOutput output message
     */
    public function DescribeProblem(DescribeProblemInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeProblem", $input, DescribeProblemOutput::class, $context);
    }

    /**
     * @param UpdateVisibilityInput $input message
     * @param array $context request parameters
     *
     * @return UpdateVisibilityOutput output message
     */
    public function UpdateVisibility(UpdateVisibilityInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateVisibility", $input, UpdateVisibilityOutput::class, $context);
    }

    /**
     * @param UpdatePrivacyInput $input message
     * @param array $context request parameters
     *
     * @return UpdatePrivacyOutput output message
     */
    public function UpdatePrivacy(UpdatePrivacyInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdatePrivacy", $input, UpdatePrivacyOutput::class, $context);
    }

    /**
     * @param ListExamplesInput $input message
     * @param array $context request parameters
     *
     * @return ListExamplesOutput output message
     */
    public function ListExamples(ListExamplesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListExamples", $input, ListExamplesOutput::class, $context);
    }

    /**
     * @param UpdateVerifierInput $input message
     * @param array $context request parameters
     *
     * @return UpdateVerifierOutput output message
     */
    public function UpdateVerifier(UpdateVerifierInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateVerifier", $input, UpdateVerifierOutput::class, $context);
    }

    /**
     * @param DescribeVerifierInput $input message
     * @param array $context request parameters
     *
     * @return DescribeVerifierOutput output message
     */
    public function DescribeVerifier(DescribeVerifierInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeVerifier", $input, DescribeVerifierOutput::class, $context);
    }

    /**
     * @param UpdateInteractorInput $input message
     * @param array $context request parameters
     *
     * @return UpdateInteractorOutput output message
     */
    public function UpdateInteractor(UpdateInteractorInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateInteractor", $input, UpdateInteractorOutput::class, $context);
    }

    /**
     * @param DescribeInteractorInput $input message
     * @param array $context request parameters
     *
     * @return DescribeInteractorOutput output message
     */
    public function DescribeInteractor(DescribeInteractorInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeInteractor", $input, DescribeInteractorOutput::class, $context);
    }

    /**
     * @param CreateStatementInput $input message
     * @param array $context request parameters
     *
     * @return CreateStatementOutput output message
     */
    public function CreateStatement(CreateStatementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateStatement", $input, CreateStatementOutput::class, $context);
    }

    /**
     * @param UpdateStatementInput $input message
     * @param array $context request parameters
     *
     * @return UpdateStatementOutput output message
     */
    public function UpdateStatement(UpdateStatementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateStatement", $input, UpdateStatementOutput::class, $context);
    }

    /**
     * @param DeleteStatementInput $input message
     * @param array $context request parameters
     *
     * @return DeleteStatementOutput output message
     */
    public function DeleteStatement(DeleteStatementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteStatement", $input, DeleteStatementOutput::class, $context);
    }

    /**
     * @param ListStatementsInput $input message
     * @param array $context request parameters
     *
     * @return ListStatementsOutput output message
     */
    public function ListStatements(ListStatementsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListStatements", $input, ListStatementsOutput::class, $context);
    }

    /**
     * @param DescribeStatementInput $input message
     * @param array $context request parameters
     *
     * @return DescribeStatementOutput output message
     */
    public function DescribeStatement(DescribeStatementInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeStatement", $input, DescribeStatementOutput::class, $context);
    }

    /**
     * @param CreateTestsetInput $input message
     * @param array $context request parameters
     *
     * @return CreateTestsetOutput output message
     */
    public function CreateTestset(CreateTestsetInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateTestset", $input, CreateTestsetOutput::class, $context);
    }

    /**
     * @param UpdateTestsetInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTestsetOutput output message
     */
    public function UpdateTestset(UpdateTestsetInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateTestset", $input, UpdateTestsetOutput::class, $context);
    }

    /**
     * @param DeleteTestsetInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTestsetOutput output message
     */
    public function DeleteTestset(DeleteTestsetInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteTestset", $input, DeleteTestsetOutput::class, $context);
    }

    /**
     * @param ListTestsetsInput $input message
     * @param array $context request parameters
     *
     * @return ListTestsetsOutput output message
     */
    public function ListTestsets(ListTestsetsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListTestsets", $input, ListTestsetsOutput::class, $context);
    }

    /**
     * @param DescribeTestsetInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTestsetOutput output message
     */
    public function DescribeTestset(DescribeTestsetInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeTestset", $input, DescribeTestsetOutput::class, $context);
    }

    /**
     * @param CreateTestInput $input message
     * @param array $context request parameters
     *
     * @return CreateTestOutput output message
     */
    public function CreateTest(CreateTestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateTest", $input, CreateTestOutput::class, $context);
    }

    /**
     * @param UpdateTestInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTestOutput output message
     */
    public function UpdateTest(UpdateTestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateTest", $input, UpdateTestOutput::class, $context);
    }

    /**
     * @param DeleteTestInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTestOutput output message
     */
    public function DeleteTest(DeleteTestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteTest", $input, DeleteTestOutput::class, $context);
    }

    /**
     * @param ListTestsInput $input message
     * @param array $context request parameters
     *
     * @return ListTestsOutput output message
     */
    public function ListTests(ListTestsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListTests", $input, ListTestsOutput::class, $context);
    }

    /**
     * @param DescribeTestInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTestOutput output message
     */
    public function DescribeTest(DescribeTestInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeTest", $input, DescribeTestOutput::class, $context);
    }

    /**
     * @param GrantPermissionInput $input message
     * @param array $context request parameters
     *
     * @return GrantPermissionOutput output message
     */
    public function GrantPermission(GrantPermissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/GrantPermission", $input, GrantPermissionOutput::class, $context);
    }

    /**
     * @param RevokePermissionInput $input message
     * @param array $context request parameters
     *
     * @return RevokePermissionOutput output message
     */
    public function RevokePermission(RevokePermissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/RevokePermission", $input, RevokePermissionOutput::class, $context);
    }

    /**
     * @param ListPermissionsInput $input message
     * @param array $context request parameters
     *
     * @return ListPermissionsOutput output message
     */
    public function ListPermissions(ListPermissionsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListPermissions", $input, ListPermissionsOutput::class, $context);
    }

    /**
     * @param CreateCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return CreateCodeTemplateOutput output message
     */
    public function CreateCodeTemplate(CreateCodeTemplateInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateCodeTemplate", $input, CreateCodeTemplateOutput::class, $context);
    }

    /**
     * @param UpdateCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return UpdateCodeTemplateOutput output message
     */
    public function UpdateCodeTemplate(UpdateCodeTemplateInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateCodeTemplate", $input, UpdateCodeTemplateOutput::class, $context);
    }

    /**
     * @param DeleteCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return DeleteCodeTemplateOutput output message
     */
    public function DeleteCodeTemplate(DeleteCodeTemplateInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteCodeTemplate", $input, DeleteCodeTemplateOutput::class, $context);
    }

    /**
     * @param ListCodeTemplatesInput $input message
     * @param array $context request parameters
     *
     * @return ListCodeTemplatesOutput output message
     */
    public function ListCodeTemplates(ListCodeTemplatesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListCodeTemplates", $input, ListCodeTemplatesOutput::class, $context);
    }

    /**
     * @param DescribeCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCodeTemplateOutput output message
     */
    public function DescribeCodeTemplate(DescribeCodeTemplateInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeCodeTemplate", $input, DescribeCodeTemplateOutput::class, $context);
    }

    /**
     * @param CreateAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return CreateAttachmentOutput output message
     */
    public function CreateAttachment(CreateAttachmentInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateAttachment", $input, CreateAttachmentOutput::class, $context);
    }

    /**
     * @param UpdateAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAttachmentOutput output message
     */
    public function UpdateAttachment(UpdateAttachmentInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateAttachment", $input, UpdateAttachmentOutput::class, $context);
    }

    /**
     * @param DeleteAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAttachmentOutput output message
     */
    public function DeleteAttachment(DeleteAttachmentInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteAttachment", $input, DeleteAttachmentOutput::class, $context);
    }

    /**
     * @param ListAttachmentsInput $input message
     * @param array $context request parameters
     *
     * @return ListAttachmentsOutput output message
     */
    public function ListAttachments(ListAttachmentsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListAttachments", $input, ListAttachmentsOutput::class, $context);
    }

    /**
     * @param DescribeAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAttachmentOutput output message
     */
    public function DescribeAttachment(DescribeAttachmentInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeAttachment", $input, DescribeAttachmentOutput::class, $context);
    }

    /**
     * @param DescribeChangeInput $input message
     * @param array $context request parameters
     *
     * @return DescribeChangeOutput output message
     */
    public function DescribeChange(DescribeChangeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeChange", $input, DescribeChangeOutput::class, $context);
    }

    /**
     * @param ListChangesInput $input message
     * @param array $context request parameters
     *
     * @return ListChangesOutput output message
     */
    public function ListChanges(ListChangesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListChanges", $input, ListChangesOutput::class, $context);
    }

    /**
     * @param ListProblemTopInput $input message
     * @param array $context request parameters
     *
     * @return ListProblemTopOutput output message
     */
    public function ListProblemTop(ListProblemTopInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListProblemTop", $input, ListProblemTopOutput::class, $context);
    }

    /**
     * @param DescribeProblemGradingInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemGradingOutput output message
     */
    public function DescribeProblemGrading(DescribeProblemGradingInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeProblemGrading", $input, DescribeProblemGradingOutput::class, $context);
    }

    /**
     * @param CreateSolutionInput $input message
     * @param array $context request parameters
     *
     * @return CreateSolutionOutput output message
     */
    public function CreateSolution(CreateSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateSolution", $input, CreateSolutionOutput::class, $context);
    }

    /**
     * @param UpdateSolutionInput $input message
     * @param array $context request parameters
     *
     * @return UpdateSolutionOutput output message
     */
    public function UpdateSolution(UpdateSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateSolution", $input, UpdateSolutionOutput::class, $context);
    }

    /**
     * @param DeleteSolutionInput $input message
     * @param array $context request parameters
     *
     * @return DeleteSolutionOutput output message
     */
    public function DeleteSolution(DeleteSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteSolution", $input, DeleteSolutionOutput::class, $context);
    }

    /**
     * @param ListSolutionsInput $input message
     * @param array $context request parameters
     *
     * @return ListSolutionsOutput output message
     */
    public function ListSolutions(ListSolutionsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListSolutions", $input, ListSolutionsOutput::class, $context);
    }

    /**
     * @param DescribeSolutionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSolutionOutput output message
     */
    public function DescribeSolution(DescribeSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeSolution", $input, DescribeSolutionOutput::class, $context);
    }

    /**
     * @param PublishSolutionInput $input message
     * @param array $context request parameters
     *
     * @return PublishSolutionOutput output message
     */
    public function PublishSolution(PublishSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/PublishSolution", $input, PublishSolutionOutput::class, $context);
    }

    /**
     * @param UnpublishSolutionInput $input message
     * @param array $context request parameters
     *
     * @return UnpublishSolutionOutput output message
     */
    public function UnpublishSolution(UnpublishSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UnpublishSolution", $input, UnpublishSolutionOutput::class, $context);
    }

    /**
     * @param ApproveSolutionInput $input message
     * @param array $context request parameters
     *
     * @return ApproveSolutionOutput output message
     */
    public function ApproveSolution(ApproveSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ApproveSolution", $input, ApproveSolutionOutput::class, $context);
    }

    /**
     * @param RefuseSolutionInput $input message
     * @param array $context request parameters
     *
     * @return RefuseSolutionOutput output message
     */
    public function RefuseSolution(RefuseSolutionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/RefuseSolution", $input, RefuseSolutionOutput::class, $context);
    }

    /**
     * @param CreateCategoryInput $input message
     * @param array $context request parameters
     *
     * @return CreateCategoryOutput output message
     */
    public function CreateCategory(CreateCategoryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateCategory", $input, CreateCategoryOutput::class, $context);
    }

    /**
     * @param UpdateCategoryInput $input message
     * @param array $context request parameters
     *
     * @return UpdateCategoryOutput output message
     */
    public function UpdateCategory(UpdateCategoryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UpdateCategory", $input, UpdateCategoryOutput::class, $context);
    }

    /**
     * @param DeleteCategoryInput $input message
     * @param array $context request parameters
     *
     * @return DeleteCategoryOutput output message
     */
    public function DeleteCategory(DeleteCategoryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DeleteCategory", $input, DeleteCategoryOutput::class, $context);
    }

    /**
     * @param ListCategoriesInput $input message
     * @param array $context request parameters
     *
     * @return ListCategoriesOutput output message
     */
    public function ListCategories(ListCategoriesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/ListCategories", $input, ListCategoriesOutput::class, $context);
    }

    /**
     * @param DescribeCategoryInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCategoryOutput output message
     */
    public function DescribeCategory(DescribeCategoryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeCategory", $input, DescribeCategoryOutput::class, $context);
    }

    /**
     * @param AssignCategoryInput $input message
     * @param array $context request parameters
     *
     * @return AssignCategoryOutput output message
     */
    public function AssignCategory(AssignCategoryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/AssignCategory", $input, AssignCategoryOutput::class, $context);
    }

    /**
     * @param UnassignCategoryInput $input message
     * @param array $context request parameters
     *
     * @return UnassignCategoryOutput output message
     */
    public function UnassignCategory(UnassignCategoryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/UnassignCategory", $input, UnassignCategoryOutput::class, $context);
    }

    /**
     * @param CreateSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return CreateSubmissionOutput output message
     */
    public function CreateSubmission(CreateSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/CreateSubmission", $input, CreateSubmissionOutput::class, $context);
    }

    /**
     * @param DescribeSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSubmissionOutput output message
     */
    public function DescribeSubmission(DescribeSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeSubmission", $input, DescribeSubmissionOutput::class, $context);
    }

    /**
     * @param DescribeScoreInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreOutput output message
     */
    public function DescribeScore(DescribeScoreInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.atlas.Atlas/DescribeScore", $input, DescribeScoreOutput::class, $context);
    }

}
