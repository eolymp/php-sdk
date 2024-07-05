<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/wellknown/errors.proto

namespace Eolymp\Wellknown;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidationError
 *
 * Generated from protobuf message <code>eolymp.wellknown.Validation</code>
 */
class Validation extends \Google\Protobuf\Internal\Message
{
    /**
     * argument path
     *
     * Generated from protobuf field <code>repeated string argument_path = 1;</code>
     */
    private $argument_path;
    /**
     * basic error message
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     */
    protected $error_message = '';
    /**
     * optionally localization data
     *
     * Generated from protobuf field <code>.eolymp.wellknown.ErrorLocalization localization = 3;</code>
     */
    protected $localization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $argument_path
     *           argument path
     *     @type string $error_message
     *           basic error message
     *     @type \Eolymp\Wellknown\ErrorLocalization $localization
     *           optionally localization data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Wellknown\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * argument path
     *
     * Generated from protobuf field <code>repeated string argument_path = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgumentPath()
    {
        return $this->argument_path;
    }

    /**
     * argument path
     *
     * Generated from protobuf field <code>repeated string argument_path = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgumentPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->argument_path = $arr;

        return $this;
    }

    /**
     * basic error message
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * basic error message
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

    /**
     * optionally localization data
     *
     * Generated from protobuf field <code>.eolymp.wellknown.ErrorLocalization localization = 3;</code>
     * @return \Eolymp\Wellknown\ErrorLocalization|null
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    public function hasLocalization()
    {
        return isset($this->localization);
    }

    public function clearLocalization()
    {
        unset($this->localization);
    }

    /**
     * optionally localization data
     *
     * Generated from protobuf field <code>.eolymp.wellknown.ErrorLocalization localization = 3;</code>
     * @param \Eolymp\Wellknown\ErrorLocalization $var
     * @return $this
     */
    public function setLocalization($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Wellknown\ErrorLocalization::class);
        $this->localization = $var;

        return $this;
    }

}

