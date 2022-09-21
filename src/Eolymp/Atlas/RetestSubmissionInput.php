<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.RetestSubmissionInput</code>
 */
class RetestSubmissionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string submission_id = 1;</code>
     */
    protected $submission_id = '';
    /**
     * Generated from protobuf field <code>bool debug = 2;</code>
     */
    protected $debug = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $submission_id
     *     @type bool $debug
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string submission_id = 1;</code>
     * @return string
     */
    public function getSubmissionId()
    {
        return $this->submission_id;
    }

    /**
     * Generated from protobuf field <code>string submission_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubmissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->submission_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool debug = 2;</code>
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Generated from protobuf field <code>bool debug = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDebug($var)
    {
        GPBUtil::checkBool($var);
        $this->debug = $var;

        return $this;
    }

}
