<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/newsletter_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.UpdateNewsletterInput</code>
 */
class UpdateNewsletterInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.newsletter.UpdateNewsletterInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string newsletter_id = 2;</code>
     */
    protected $newsletter_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Newsletter newsletter = 3;</code>
     */
    protected $newsletter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *     @type string $newsletter_id
     *     @type \Eolymp\Newsletter\Newsletter $newsletter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\NewsletterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.newsletter.UpdateNewsletterInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.newsletter.UpdateNewsletterInput.Patch patch = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Newsletter\UpdateNewsletterInput\Patch::class);
        $this->patch = $arr;

        return $this;
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
     * Generated from protobuf field <code>.eolymp.newsletter.Newsletter newsletter = 3;</code>
     * @return \Eolymp\Newsletter\Newsletter|null
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    public function hasNewsletter()
    {
        return isset($this->newsletter);
    }

    public function clearNewsletter()
    {
        unset($this->newsletter);
    }

    /**
     * Generated from protobuf field <code>.eolymp.newsletter.Newsletter newsletter = 3;</code>
     * @param \Eolymp\Newsletter\Newsletter $var
     * @return $this
     */
    public function setNewsletter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Newsletter\Newsletter::class);
        $this->newsletter = $var;

        return $this;
    }

}

