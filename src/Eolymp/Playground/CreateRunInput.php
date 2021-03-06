<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/playground/playground.proto

namespace Eolymp\Playground;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.playground.CreateRunInput</code>
 */
class CreateRunInput extends \Google\Protobuf\Internal\Message
{
    /**
     * deprecated, use runtime instead
     *
     * Generated from protobuf field <code>string lang = 1;</code>
     */
    protected $lang = '';
    /**
     * Generated from protobuf field <code>string runtime = 2;</code>
     */
    protected $runtime = '';
    /**
     * Source code
     * deprecated, use source_ern instead
     *
     * Generated from protobuf field <code>string source = 31;</code>
     */
    protected $source = '';
    /**
     * Source code ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string source_ern = 30;</code>
     */
    protected $source_ern = '';
    /**
     * Input ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string input_ern = 10;</code>
     */
    protected $input_ern = '';
    /**
     * Problem ERN allows to reuse template from Atlas or Judge problem.
     *
     * Generated from protobuf field <code>string problem_ern = 20;</code>
     */
    protected $problem_ern = '';
    /**
     * deprecated, use input ern instead
     *
     * Generated from protobuf field <code>string input = 3;</code>
     */
    protected $input = '';
    protected $input_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $lang
     *           deprecated, use runtime instead
     *     @type string $runtime
     *     @type string $source
     *           Source code
     *           deprecated, use source_ern instead
     *     @type string $source_ern
     *           Source code ERN (data up to 5KB or blob)
     *     @type string $input_ern
     *           Input ERN (data up to 5KB or blob)
     *     @type string $problem_ern
     *           Problem ERN allows to reuse template from Atlas or Judge problem.
     *     @type string $input
     *           deprecated, use input ern instead
     *     @type string $input_content
     *     @type string $input_object_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Playground\Playground::initOnce();
        parent::__construct($data);
    }

    /**
     * deprecated, use runtime instead
     *
     * Generated from protobuf field <code>string lang = 1;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * deprecated, use runtime instead
     *
     * Generated from protobuf field <code>string lang = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Generated from protobuf field <code>string runtime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Source code
     * deprecated, use source_ern instead
     *
     * Generated from protobuf field <code>string source = 31;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Source code
     * deprecated, use source_ern instead
     *
     * Generated from protobuf field <code>string source = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Source code ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string source_ern = 30;</code>
     * @return string
     */
    public function getSourceErn()
    {
        return $this->source_ern;
    }

    /**
     * Source code ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string source_ern = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_ern = $var;

        return $this;
    }

    /**
     * Input ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string input_ern = 10;</code>
     * @return string
     */
    public function getInputErn()
    {
        return $this->input_ern;
    }

    /**
     * Input ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string input_ern = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setInputErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_ern = $var;

        return $this;
    }

    /**
     * Problem ERN allows to reuse template from Atlas or Judge problem.
     *
     * Generated from protobuf field <code>string problem_ern = 20;</code>
     * @return string
     */
    public function getProblemErn()
    {
        return $this->problem_ern;
    }

    /**
     * Problem ERN allows to reuse template from Atlas or Judge problem.
     *
     * Generated from protobuf field <code>string problem_ern = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_ern = $var;

        return $this;
    }

    /**
     * deprecated, use input ern instead
     *
     * Generated from protobuf field <code>string input = 3;</code>
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * deprecated, use input ern instead
     *
     * Generated from protobuf field <code>string input = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkString($var, True);
        $this->input = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes input_content = 4;</code>
     * @return string
     */
    public function getInputContent()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>bytes input_content = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInputContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string input_object_id = 5;</code>
     * @return string
     */
    public function getInputObjectId()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>string input_object_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInputObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInputData()
    {
        return $this->whichOneof("input_data");
    }

}

