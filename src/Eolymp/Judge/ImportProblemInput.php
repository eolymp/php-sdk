<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ImportProblemInput</code>
 */
class ImportProblemInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string import_id = 2;</code>
     */
    protected $import_id = '';
    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>uint32 submit_limit = 11;</code>
     */
    protected $submit_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $import_id
     *     @type int $index
     *     @type int $submit_limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string import_id = 2;</code>
     * @return string
     */
    public function getImportId()
    {
        return $this->import_id;
    }

    /**
     * Generated from protobuf field <code>string import_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImportId($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 submit_limit = 11;</code>
     * @return int
     */
    public function getSubmitLimit()
    {
        return $this->submit_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 submit_limit = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSubmitLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->submit_limit = $var;

        return $this;
    }

}

