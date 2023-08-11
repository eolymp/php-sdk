<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.UpdateDocumentInput</code>
 */
class UpdateDocumentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entry_id = 1;</code>
     */
    protected $entry_id = '';
    /**
     * Generated from protobuf field <code>string parent_id = 2;</code>
     */
    protected $parent_id = '';
    /**
     * Generated from protobuf field <code>string title = 10;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content document = 11;</code>
     */
    protected $document = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entry_id
     *     @type string $parent_id
     *     @type string $title
     *     @type \Eolymp\Ecm\Content $document
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
     * Generated from protobuf field <code>string parent_id = 2;</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Generated from protobuf field <code>string parent_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

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
     * Generated from protobuf field <code>.eolymp.ecm.Content document = 11;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content document = 11;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->document = $var;

        return $this;
    }

}

