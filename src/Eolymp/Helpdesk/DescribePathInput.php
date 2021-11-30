<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/helpdesk.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.DescribePathInput</code>
 */
class DescribePathInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string path = 1;</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>repeated string preferred_locales = 2;</code>
     */
    private $preferred_locales;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $preferred_locales
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Helpdesk::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string preferred_locales = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPreferredLocales()
    {
        return $this->preferred_locales;
    }

    /**
     * Generated from protobuf field <code>repeated string preferred_locales = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPreferredLocales($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->preferred_locales = $arr;

        return $this;
    }

}

