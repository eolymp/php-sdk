<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/report.proto

namespace Eolymp\Executor\Report;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Communicates status of the actor
 *
 * Generated from protobuf message <code>eolymp.executor.Report.Actor</code>
 */
class Actor extends \Google\Protobuf\Internal\Message
{
    /**
     * Actor name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Source code signature is a unique fingerprint of the code, calculated by agent for a specific language.
     * It should be used to find identical or similar source codes.
     *
     * Generated from protobuf field <code>string signature = 3;</code>
     */
    protected $signature = '';
    /**
     * Actor related error message, for example compilation error. If empty actor considered to be initialized correctly.
     *
     * Generated from protobuf field <code>string error_message = 4;</code>
     */
    protected $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Actor name
     *     @type string $signature
     *           Source code signature is a unique fingerprint of the code, calculated by agent for a specific language.
     *           It should be used to find identical or similar source codes.
     *     @type string $error_message
     *           Actor related error message, for example compilation error. If empty actor considered to be initialized correctly.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Report::initOnce();
        parent::__construct($data);
    }

    /**
     * Actor name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Actor name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Source code signature is a unique fingerprint of the code, calculated by agent for a specific language.
     * It should be used to find identical or similar source codes.
     *
     * Generated from protobuf field <code>string signature = 3;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Source code signature is a unique fingerprint of the code, calculated by agent for a specific language.
     * It should be used to find identical or similar source codes.
     *
     * Generated from protobuf field <code>string signature = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * Actor related error message, for example compilation error. If empty actor considered to be initialized correctly.
     *
     * Generated from protobuf field <code>string error_message = 4;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * Actor related error message, for example compilation error. If empty actor considered to be initialized correctly.
     *
     * Generated from protobuf field <code>string error_message = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Actor::class, \Eolymp\Executor\Report_Actor::class);

