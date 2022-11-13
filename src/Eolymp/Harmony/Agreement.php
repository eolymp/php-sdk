<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/harmony/agreement.proto

namespace Eolymp\Harmony;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.harmony.Agreement</code>
 */
class Agreement extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>bool required = 2;</code>
     */
    protected $required = false;
    /**
     * Generated from protobuf field <code>string summary = 10;</code>
     */
    protected $summary = '';
    /**
     * Generated from protobuf field <code>string description = 11;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type bool $required
     *     @type string $summary
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Harmony\Agreement::initOnce();
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
     * Generated from protobuf field <code>bool required = 2;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Generated from protobuf field <code>bool required = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string summary = 10;</code>
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Generated from protobuf field <code>string summary = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkString($var, True);
        $this->summary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 11;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

