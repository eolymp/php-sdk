<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/universe/space_service.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.UpdateQuotaInput</code>
 */
class UpdateQuotaInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     */
    protected $space_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.universe.Quota quota = 2;</code>
     */
    protected $quota = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $space_id
     *     @type \Eolymp\Universe\Quota $quota
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\SpaceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     * @return string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Generated from protobuf field <code>string space_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->space_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Quota quota = 2;</code>
     * @return \Eolymp\Universe\Quota|null
     */
    public function getQuota()
    {
        return $this->quota;
    }

    public function hasQuota()
    {
        return isset($this->quota);
    }

    public function clearQuota()
    {
        unset($this->quota);
    }

    /**
     * Generated from protobuf field <code>.eolymp.universe.Quota quota = 2;</code>
     * @param \Eolymp\Universe\Quota $var
     * @return $this
     */
    public function setQuota($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Universe\Quota::class);
        $this->quota = $var;

        return $this;
    }

}

