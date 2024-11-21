<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/submission_assistant_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DebugSubmissionInput</code>
 */
class DebugSubmissionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string submission_id = 1;</code>
     */
    protected $submission_id = '';
    /**
     * Generated from protobuf field <code>string locale = 2;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $submission_id
     *     @type string $locale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\SubmissionAssistantService::initOnce();
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
     * Generated from protobuf field <code>string locale = 2;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

}

