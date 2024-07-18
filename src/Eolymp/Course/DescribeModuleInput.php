<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DescribeModuleInput</code>
 */
class DescribeModuleInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string module_id = 1;</code>
     */
    protected $module_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Module.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $module_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ModuleService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string module_id = 1;</code>
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Generated from protobuf field <code>string module_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Module.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Module.Extra extra = 1123;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Course\Module\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

