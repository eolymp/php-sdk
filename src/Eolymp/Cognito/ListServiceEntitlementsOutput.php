<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.ListServiceEntitlementsOutput</code>
 */
class ListServiceEntitlementsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.cognito.Entitlement entitlements = 1;</code>
     */
    private $entitlements;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $entitlements
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Cognito::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.cognito.Entitlement entitlements = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.cognito.Entitlement entitlements = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntitlements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Cognito\Entitlement::class);
        $this->entitlements = $arr;

        return $this;
    }

}
