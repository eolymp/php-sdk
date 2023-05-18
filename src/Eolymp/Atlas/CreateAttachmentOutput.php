<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/attachment_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.CreateAttachmentOutput</code>
 */
class CreateAttachmentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string attachment_id = 1;</code>
     */
    protected $attachment_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attachment_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\AttachmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string attachment_id = 1;</code>
     * @return string
     */
    public function getAttachmentId()
    {
        return $this->attachment_id;
    }

    /**
     * Generated from protobuf field <code>string attachment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->attachment_id = $var;

        return $this;
    }

}

