<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/session_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeSessionInput</code>
 */
class DescribeSessionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string session_id = 1;</code>
     */
    protected $session_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\SessionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

}

