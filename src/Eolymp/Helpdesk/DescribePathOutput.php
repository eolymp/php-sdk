<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/helpdesk.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.DescribePathOutput</code>
 */
class DescribePathOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Document document = 1;</code>
     */
    protected $document = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Helpdesk\Document $document
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Helpdesk::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Document document = 1;</code>
     * @return \Eolymp\Helpdesk\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Document document = 1;</code>
     * @param \Eolymp\Helpdesk\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\Document::class);
        $this->document = $var;

        return $this;
    }

}

