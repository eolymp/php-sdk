<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/content_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.DeleteFragmentInput</code>
 */
class DeleteFragmentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     */
    protected $fragment_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fragment_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\ContentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     * @return string
     */
    public function getFragmentId()
    {
        return $this->fragment_id;
    }

    /**
     * Generated from protobuf field <code>string fragment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFragmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fragment_id = $var;

        return $this;
    }

}

