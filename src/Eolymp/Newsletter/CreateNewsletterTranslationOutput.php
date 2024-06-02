<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/newsletter_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.CreateNewsletterTranslationOutput</code>
 */
class CreateNewsletterTranslationOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string translation_id = 1;</code>
     */
    protected $translation_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $translation_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\NewsletterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string translation_id = 1;</code>
     * @return string
     */
    public function getTranslationId()
    {
        return $this->translation_id;
    }

    /**
     * Generated from protobuf field <code>string translation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTranslationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->translation_id = $var;

        return $this;
    }

}

