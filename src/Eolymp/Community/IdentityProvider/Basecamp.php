<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/configuration_idp.proto

namespace Eolymp\Community\IdentityProvider;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.IdentityProvider.Basecamp</code>
 */
class Basecamp extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\ConfigurationIdp::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Basecamp::class, \Eolymp\Community\IdentityProvider_Basecamp::class);
