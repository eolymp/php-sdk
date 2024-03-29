<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/tier_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DescribeTierInput</code>
 */
class DescribeTierInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tier_id = 1;</code>
     */
    protected $tier_id = '';
    /**
     * render description to ecm
     *
     * Generated from protobuf field <code>bool render = 100;</code>
     */
    protected $render = false;
    /**
     * optionally, request name and description in particular language
     *
     * Generated from protobuf field <code>string locale = 101;</code>
     */
    protected $locale = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tier_id
     *     @type bool $render
     *           render description to ecm
     *     @type string $locale
     *           optionally, request name and description in particular language
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\TierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tier_id = 1;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tier_id;
    }

    /**
     * Generated from protobuf field <code>string tier_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tier_id = $var;

        return $this;
    }

    /**
     * render description to ecm
     *
     * Generated from protobuf field <code>bool render = 100;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * render description to ecm
     *
     * Generated from protobuf field <code>bool render = 100;</code>
     * @param bool $var
     * @return $this
     */
    public function setRender($var)
    {
        GPBUtil::checkBool($var);
        $this->render = $var;

        return $this;
    }

    /**
     * optionally, request name and description in particular language
     *
     * Generated from protobuf field <code>string locale = 101;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * optionally, request name and description in particular language
     *
     * Generated from protobuf field <code>string locale = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

}

