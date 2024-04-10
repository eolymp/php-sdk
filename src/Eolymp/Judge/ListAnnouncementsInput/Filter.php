<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/announcement_service.proto

namespace Eolymp\Judge\ListAnnouncementsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListAnnouncementsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read = 2;</code>
     */
    private $is_read;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_read
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\AnnouncementService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsRead()
    {
        return $this->is_read;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_read = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsRead($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_read = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Judge\ListAnnouncementsInput_Filter::class);

