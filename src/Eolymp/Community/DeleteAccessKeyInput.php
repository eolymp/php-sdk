<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/access_key_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DeleteAccessKeyInput</code>
 */
class DeleteAccessKeyInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key_id = 1;</code>
     */
    protected $key_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccessKeyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string key_id = 1;</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * Generated from protobuf field <code>string key_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

}
