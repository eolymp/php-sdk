<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.UpdateAccountOutput</code>
 */
class UpdateAccountOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string hint = 1;</code>
     */
    protected $hint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string hint = 1;</code>
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Generated from protobuf field <code>string hint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->hint = $var;

        return $this;
    }

}

