<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/localization/localization_service.proto

namespace Eolymp\Localization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.localization.ExportTranslationsInput</code>
 */
class ExportTranslationsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string locale = 1;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $locale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Localization\LocalizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string locale = 1;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 1;</code>
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

