<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/l10n/locale.proto

namespace Eolymp\L10n;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.l10n.Locale</code>
 */
class Locale extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>float completeness = 10;</code>
     */
    protected $completeness = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *     @type float $completeness
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\L10N\Locale::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float completeness = 10;</code>
     * @return float
     */
    public function getCompleteness()
    {
        return $this->completeness;
    }

    /**
     * Generated from protobuf field <code>float completeness = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setCompleteness($var)
    {
        GPBUtil::checkFloat($var);
        $this->completeness = $var;

        return $this;
    }

}

