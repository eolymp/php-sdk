<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Course;

class StudentServiceClient {

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
     * @param CreateStudentInput $input message
     * @param array $context request parameters
     *
     * @return CreateStudentOutput output message
     */
    public function CreateStudent(CreateStudentInput $input, array $context = [])
    {
        $path = "/students";

        $context['name'] = "eolymp.course.StudentService/CreateStudent";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateStudentOutput::class, $context);
    }

    /**
     * @param UpdateStudentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateStudentOutput output message
     */
    public function UpdateStudent(UpdateStudentInput $input, array $context = [])
    {
        $path = "/students/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.course.StudentService/UpdateStudent";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateStudentOutput::class, $context);
    }

    /**
     * @param DeleteStudentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteStudentOutput output message
     */
    public function DeleteModule(DeleteStudentInput $input, array $context = [])
    {
        $path = "/students/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.course.StudentService/DeleteModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteStudentOutput::class, $context);
    }

    /**
     * @param AssignModuleInput $input message
     * @param array $context request parameters
     *
     * @return AssignModuleOutput output message
     */
    public function AssignModule(AssignModuleInput $input, array $context = [])
    {
        $path = "/students/".rawurlencode($input->getMemberId())."/assignments/".rawurlencode($input->getModuleId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");
        $input->setModuleId("");

        $context['name'] = "eolymp.course.StudentService/AssignModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, AssignModuleOutput::class, $context);
    }

    /**
     * @param UnassignModuleInput $input message
     * @param array $context request parameters
     *
     * @return UnassignModuleOutput output message
     */
    public function UnassignModule(UnassignModuleInput $input, array $context = [])
    {
        $path = "/students/".rawurlencode($input->getMemberId())."/assignments/".rawurlencode($input->getModuleId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");
        $input->setModuleId("");

        $context['name'] = "eolymp.course.StudentService/UnassignModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, UnassignModuleOutput::class, $context);
    }

    /**
     * @param DescribeViewerInput $input message
     * @param array $context request parameters
     *
     * @return DescribeViewerOutput output message
     */
    public function DescribeViewer(DescribeViewerInput $input, array $context = [])
    {
        $path = "/viewer/student";

        $context['name'] = "eolymp.course.StudentService/DescribeViewer";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeViewerOutput::class, $context);
    }

    /**
     * @param DescribeStudentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeStudentOutput output message
     */
    public function DescribeStudent(DescribeStudentInput $input, array $context = [])
    {
        $path = "/students/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.course.StudentService/DescribeStudent";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeStudentOutput::class, $context);
    }

    /**
     * @param ListStudentsInput $input message
     * @param array $context request parameters
     *
     * @return ListStudentsOutput output message
     */
    public function ListStudents(ListStudentsInput $input, array $context = [])
    {
        $path = "/students";

        $context['name'] = "eolymp.course.StudentService/ListStudents";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListStudentsOutput::class, $context);
    }

}
