<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/newsletter_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.CreateNewsletterTranslationInput</code>
 */
class CreateNewsletterTranslationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string newsletter_id = 1;</code>
     */
    protected $newsletter_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Newsletter.Translation translation = 2;</code>
     */
    protected $translation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $newsletter_id
     *     @type \Eolymp\Newsletter\Newsletter\Translation $translation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\NewsletterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string newsletter_id = 1;</code>
     * @return string
     */
    public function getNewsletterId()
    {
        return $this->newsletter_id;
    }

    /**
     * Generated from protobuf field <code>string newsletter_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNewsletterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->newsletter_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Newsletter.Translation translation = 2;</code>
     * @return \Eolymp\Newsletter\Newsletter\Translation|null
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    public function hasTranslation()
    {
        return isset($this->translation);
    }

    public function clearTranslation()
    {
        unset($this->translation);
    }

    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Newsletter.Translation translation = 2;</code>
     * @param \Eolymp\Newsletter\Newsletter\Translation $var
     * @return $this
     */
    public function setTranslation($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Newsletter\Newsletter\Translation::class);
        $this->translation = $var;

        return $this;
    }

}
