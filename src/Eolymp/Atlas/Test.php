<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/testing_test.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Test</code>
 */
class Test extends \Google\Protobuf\Internal\Message
{
    /**
     * Test unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string version_id = 20;</code>
     */
    protected $version_id = '';
    /**
     * Generated from protobuf field <code>string testset_id = 2;</code>
     */
    protected $testset_id = '';
    /**
     * Index, a sequential number, of the test within testset.
     *
     * Generated from protobuf field <code>int32 index = 3;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Status status = 60;</code>
     */
    protected $status = 0;
    /**
     * Additional information regarding status
     *
     * Generated from protobuf field <code>string status_message = 61;</code>
     */
    protected $status_message = '';
    /**
     * Flag which defines if test should be shown in as an example in the problem statement
     *
     * Generated from protobuf field <code>bool example = 4;</code>
     */
    protected $example = false;
    /**
     * The test is inactive
     *
     * Generated from protobuf field <code>bool inactive = 7;</code>
     */
    protected $inactive = false;
    /**
     * Secret test, input and answer are never populated
     *
     * Generated from protobuf field <code>bool secret = 6;</code>
     */
    protected $secret = false;
    /**
     * Score for passing this test
     *
     * Generated from protobuf field <code>float score = 5;</code>
     */
    protected $score = 0.0;
    /**
     * Optionally, override input data for example in statement
     *
     * Generated from protobuf field <code>string example_input_url = 40;</code>
     */
    protected $example_input_url = '';
    /**
     * Optionally, override answer data for example in statement
     *
     * Generated from protobuf field <code>string example_answer_url = 41;</code>
     */
    protected $example_answer_url = '';
    /**
     * Generated input data
     *
     * Generated from protobuf field <code>string generated_input_url = 50;</code>
     */
    protected $generated_input_url = '';
    /**
     * Generated answer data
     *
     * Generated from protobuf field <code>string generated_answer_url = 51;</code>
     */
    protected $generated_answer_url = '';
    protected $input;
    protected $answer;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Test unique identifier.
     *     @type string $version_id
     *     @type string $testset_id
     *     @type int $index
     *           Index, a sequential number, of the test within testset.
     *     @type int $status
     *     @type string $status_message
     *           Additional information regarding status
     *     @type bool $example
     *           Flag which defines if test should be shown in as an example in the problem statement
     *     @type bool $inactive
     *           The test is inactive
     *     @type bool $secret
     *           Secret test, input and answer are never populated
     *     @type float $score
     *           Score for passing this test
     *     @type string $example_input_url
     *           Optionally, override input data for example in statement
     *     @type string $example_answer_url
     *           Optionally, override answer data for example in statement
     *     @type string $generated_input_url
     *           Generated input data
     *     @type string $generated_answer_url
     *           Generated answer data
     *     @type string $input_url
     *     @type \Eolymp\Atlas\Test\Generator $input_generator
     *     @type string $answer_url
     *     @type \Eolymp\Atlas\Test\Generator $answer_generator
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TestingTest::initOnce();
        parent::__construct($data);
    }

    /**
     * Test unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Test unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string version_id = 20;</code>
     * @return string
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    /**
     * Generated from protobuf field <code>string version_id = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string testset_id = 2;</code>
     * @return string
     */
    public function getTestsetId()
    {
        return $this->testset_id;
    }

    /**
     * Generated from protobuf field <code>string testset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTestsetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->testset_id = $var;

        return $this;
    }

    /**
     * Index, a sequential number, of the test within testset.
     *
     * Generated from protobuf field <code>int32 index = 3;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Index, a sequential number, of the test within testset.
     *
     * Generated from protobuf field <code>int32 index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Status status = 60;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Status status = 60;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Test\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Additional information regarding status
     *
     * Generated from protobuf field <code>string status_message = 61;</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * Additional information regarding status
     *
     * Generated from protobuf field <code>string status_message = 61;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Flag which defines if test should be shown in as an example in the problem statement
     *
     * Generated from protobuf field <code>bool example = 4;</code>
     * @return bool
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Flag which defines if test should be shown in as an example in the problem statement
     *
     * Generated from protobuf field <code>bool example = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setExample($var)
    {
        GPBUtil::checkBool($var);
        $this->example = $var;

        return $this;
    }

    /**
     * The test is inactive
     *
     * Generated from protobuf field <code>bool inactive = 7;</code>
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * The test is inactive
     *
     * Generated from protobuf field <code>bool inactive = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setInactive($var)
    {
        GPBUtil::checkBool($var);
        $this->inactive = $var;

        return $this;
    }

    /**
     * Secret test, input and answer are never populated
     *
     * Generated from protobuf field <code>bool secret = 6;</code>
     * @return bool
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Secret test, input and answer are never populated
     *
     * Generated from protobuf field <code>bool secret = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkBool($var);
        $this->secret = $var;

        return $this;
    }

    /**
     * Score for passing this test
     *
     * Generated from protobuf field <code>float score = 5;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Score for passing this test
     *
     * Generated from protobuf field <code>float score = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Optionally, override input data for example in statement
     *
     * Generated from protobuf field <code>string example_input_url = 40;</code>
     * @return string
     */
    public function getExampleInputUrl()
    {
        return $this->example_input_url;
    }

    /**
     * Optionally, override input data for example in statement
     *
     * Generated from protobuf field <code>string example_input_url = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setExampleInputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->example_input_url = $var;

        return $this;
    }

    /**
     * Optionally, override answer data for example in statement
     *
     * Generated from protobuf field <code>string example_answer_url = 41;</code>
     * @return string
     */
    public function getExampleAnswerUrl()
    {
        return $this->example_answer_url;
    }

    /**
     * Optionally, override answer data for example in statement
     *
     * Generated from protobuf field <code>string example_answer_url = 41;</code>
     * @param string $var
     * @return $this
     */
    public function setExampleAnswerUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->example_answer_url = $var;

        return $this;
    }

    /**
     * Generated input data
     *
     * Generated from protobuf field <code>string generated_input_url = 50;</code>
     * @return string
     */
    public function getGeneratedInputUrl()
    {
        return $this->generated_input_url;
    }

    /**
     * Generated input data
     *
     * Generated from protobuf field <code>string generated_input_url = 50;</code>
     * @param string $var
     * @return $this
     */
    public function setGeneratedInputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->generated_input_url = $var;

        return $this;
    }

    /**
     * Generated answer data
     *
     * Generated from protobuf field <code>string generated_answer_url = 51;</code>
     * @return string
     */
    public function getGeneratedAnswerUrl()
    {
        return $this->generated_answer_url;
    }

    /**
     * Generated answer data
     *
     * Generated from protobuf field <code>string generated_answer_url = 51;</code>
     * @param string $var
     * @return $this
     */
    public function setGeneratedAnswerUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->generated_answer_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string input_url = 11;</code>
     * @return string
     */
    public function getInputUrl()
    {
        return $this->readOneof(11);
    }

    public function hasInputUrl()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>string input_url = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Generator input_generator = 12;</code>
     * @return \Eolymp\Atlas\Test\Generator|null
     */
    public function getInputGenerator()
    {
        return $this->readOneof(12);
    }

    public function hasInputGenerator()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Generator input_generator = 12;</code>
     * @param \Eolymp\Atlas\Test\Generator $var
     * @return $this
     */
    public function setInputGenerator($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Test\Generator::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string answer_url = 21;</code>
     * @return string
     */
    public function getAnswerUrl()
    {
        return $this->readOneof(21);
    }

    public function hasAnswerUrl()
    {
        return $this->hasOneof(21);
    }

    /**
     * Generated from protobuf field <code>string answer_url = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Generator answer_generator = 22;</code>
     * @return \Eolymp\Atlas\Test\Generator|null
     */
    public function getAnswerGenerator()
    {
        return $this->readOneof(22);
    }

    public function hasAnswerGenerator()
    {
        return $this->hasOneof(22);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test.Generator answer_generator = 22;</code>
     * @param \Eolymp\Atlas\Test\Generator $var
     * @return $this
     */
    public function setAnswerGenerator($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Test\Generator::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->whichOneof("input");
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->whichOneof("answer");
    }

}

