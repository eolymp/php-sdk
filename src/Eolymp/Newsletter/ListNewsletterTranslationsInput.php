<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/newsletter_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.ListNewsletterTranslationsInput</code>
 */
class ListNewsletterTranslationsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string newsletter_id = 2;</code>
     */
    protected $newsletter_id = '';
    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     */
    protected $size = 0;
    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.newsletter.ListNewsletterTranslationsInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $newsletter_id
     *     @type int $offset
     *           pagination
     *     @type int $size
     *     @type \Eolymp\Newsletter\ListNewsletterTranslationsInput\Filter $filters
     *           data filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\NewsletterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string newsletter_id = 2;</code>
     * @return string
     */
    public function getNewsletterId()
    {
        return $this->newsletter_id;
    }

    /**
     * Generated from protobuf field <code>string newsletter_id = 2;</code>
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
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 offset = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int32 size = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.newsletter.ListNewsletterTranslationsInput.Filter filters = 40;</code>
     * @return \Eolymp\Newsletter\ListNewsletterTranslationsInput\Filter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.newsletter.ListNewsletterTranslationsInput.Filter filters = 40;</code>
     * @param \Eolymp\Newsletter\ListNewsletterTranslationsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Newsletter\ListNewsletterTranslationsInput_Filter::class);
        $this->filters = $var;

        return $this;
    }

}

