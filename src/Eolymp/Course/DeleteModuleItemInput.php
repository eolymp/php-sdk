<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DeleteModuleItemInput</code>
 */
class DeleteModuleItemInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string item_id = 1;</code>
     */
    protected $item_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $item_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ModuleService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string item_id = 1;</code>
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>string item_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->item_id = $var;

        return $this;
    }

}

