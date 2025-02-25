<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/campaign.proto

namespace Eolymp\Newsletter\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.Campaign.Translation</code>
 */
class Translation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>string subject = 103;</code>
     */
    protected $subject = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 104;</code>
     */
    protected $content = null;
    /**
     * Generated from protobuf field <code>bool automatic = 105;</code>
     */
    protected $automatic = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $locale
     *     @type string $subject
     *     @type \Eolymp\Ecm\Content $content
     *     @type bool $automatic
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\Campaign::initOnce();
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
     * Generated from protobuf field <code>string locale = 102;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subject = 103;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>string subject = 103;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 104;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 104;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool automatic = 105;</code>
     * @return bool
     */
    public function getAutomatic()
    {
        return $this->automatic;
    }

    /**
     * Generated from protobuf field <code>bool automatic = 105;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutomatic($var)
    {
        GPBUtil::checkBool($var);
        $this->automatic = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Translation::class, \Eolymp\Newsletter\Campaign_Translation::class);

