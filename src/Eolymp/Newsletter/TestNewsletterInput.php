<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/newsletter_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.TestNewsletterInput</code>
 */
class TestNewsletterInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string newsletter_id = 1;</code>
     */
    protected $newsletter_id = '';
    /**
     * Generated from protobuf field <code>string email = 2;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string locale = 3;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $newsletter_id
     *     @type string $email
     *     @type string $locale
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
     * Generated from protobuf field <code>string email = 2;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locale = 3;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 3;</code>
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
