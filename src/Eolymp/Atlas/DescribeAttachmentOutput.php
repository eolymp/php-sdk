<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeAttachmentOutput</code>
 */
class DescribeAttachmentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Attachment attachment = 1;</code>
     */
    protected $attachment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Attachment $attachment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Attachment attachment = 1;</code>
     * @return \Eolymp\Atlas\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Attachment attachment = 1;</code>
     * @param \Eolymp\Atlas\Attachment $var
     * @return $this
     */
    public function setAttachment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Attachment::class);
        $this->attachment = $var;

        return $this;
    }

}
