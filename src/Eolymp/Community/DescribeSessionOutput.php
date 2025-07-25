<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/session_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeSessionOutput</code>
 */
class DescribeSessionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.community.Session session = 1;</code>
     */
    protected $session = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Community\Session $session
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\SessionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Session session = 1;</code>
     * @return \Eolymp\Community\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return isset($this->session);
    }

    public function clearSession()
    {
        unset($this->session);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Session session = 1;</code>
     * @param \Eolymp\Community\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Session::class);
        $this->session = $var;

        return $this;
    }

}

