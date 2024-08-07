<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/template.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Template</code>
 */
class Template extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     */
    protected $ern = '';
    /**
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string runtime = 3;</code>
     */
    protected $runtime = '';
    /**
     * Generated from protobuf field <code>string source_ern = 10;</code>
     */
    protected $source_ern = '';
    /**
     * Generated from protobuf field <code>string header_ern = 11;</code>
     */
    protected $header_ern = '';
    /**
     * Generated from protobuf field <code>string footer_ern = 12;</code>
     */
    protected $footer_ern = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.File files = 30;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $ern
     *     @type string $problem_id
     *     @type string $runtime
     *     @type string $source_ern
     *     @type string $header_ern
     *     @type string $footer_ern
     *     @type array<\Eolymp\Atlas\File>|\Google\Protobuf\Internal\RepeatedField $files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string ern = 9999;</code>
     * @return string
     */
    public function getErn()
    {
        return $this->ern;
    }

    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->ern = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string runtime = 3;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Generated from protobuf field <code>string runtime = 3;</code>
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
     * Generated from protobuf field <code>string source_ern = 10;</code>
     * @return string
     */
    public function getSourceErn()
    {
        return $this->source_ern;
    }

    /**
     * Generated from protobuf field <code>string source_ern = 10;</code>
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
     * Generated from protobuf field <code>string header_ern = 11;</code>
     * @return string
     */
    public function getHeaderErn()
    {
        return $this->header_ern;
    }

    /**
     * Generated from protobuf field <code>string header_ern = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_ern = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string footer_ern = 12;</code>
     * @return string
     */
    public function getFooterErn()
    {
        return $this->footer_ern;
    }

    /**
     * Generated from protobuf field <code>string footer_ern = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setFooterErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->footer_ern = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.File files = 30;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.File files = 30;</code>
     * @param array<\Eolymp\Atlas\File>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Atlas\File::class);
        $this->files = $arr;

        return $this;
    }

}

