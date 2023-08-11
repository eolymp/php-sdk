<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.UpdateSectionInput</code>
 */
class UpdateSectionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     */
    protected $entry_id = '';
    /**
     * Generated from protobuf field <code>string title = 10;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string image = 12;</code>
     */
    protected $image = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 11;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entry_id
     *     @type string $title
     *     @type string $image
     *     @type \Eolymp\Ecm\Content $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\EntryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     * @return string
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 10;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image = 12;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>string image = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 11;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content description = 11;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->description = $var;

        return $this;
    }

}

