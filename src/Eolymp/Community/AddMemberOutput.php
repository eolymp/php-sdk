<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/community.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.AddMemberOutput</code>
 */
class AddMemberOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string uri = 9999;</code>
     */
    protected $uri = '';
    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    protected $member_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *     @type string $member_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\Community::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string uri = 9999;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Generated from protobuf field <code>string uri = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

}

