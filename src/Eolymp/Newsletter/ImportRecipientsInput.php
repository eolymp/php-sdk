<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/recipient_service.proto

namespace Eolymp\Newsletter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.newsletter.ImportRecipientsInput</code>
 */
class ImportRecipientsInput extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Newsletter\RecipientService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string group_id = 11;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->readOneof(11);
    }

    public function hasGroupId()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>string group_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

