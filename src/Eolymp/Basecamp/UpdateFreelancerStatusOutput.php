<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/basecamp/freelancer_service.proto

namespace Eolymp\Basecamp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.basecamp.UpdateFreelancerStatusOutput</code>
 */
class UpdateFreelancerStatusOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sign_url = 1;</code>
     */
    protected $sign_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sign_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Basecamp\FreelancerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sign_url = 1;</code>
     * @return string
     */
    public function getSignUrl()
    {
        return $this->sign_url;
    }

    /**
     * Generated from protobuf field <code>string sign_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->sign_url = $var;

        return $this;
    }

}

