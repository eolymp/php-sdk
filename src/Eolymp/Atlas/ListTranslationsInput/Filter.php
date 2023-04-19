<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/taxonomy_service.proto

namespace Eolymp\Atlas\ListTranslationsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ListTranslationsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum locale = 1;</code>
     */
    private $locale;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $locale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TaxonomyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum locale = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum locale = 1;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocale($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->locale = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Atlas\ListTranslationsInput_Filter::class);

