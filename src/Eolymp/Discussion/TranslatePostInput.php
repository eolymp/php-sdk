<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.TranslatePostInput</code>
 */
class TranslatePostInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     */
    protected $post_id = '';
    /**
     * source language (by default post content is used)
     *
     * Generated from protobuf field <code>string source = 2;</code>
     */
    protected $source = '';
    /**
     * list of target languages, if statement exists and it has automatic=true (or override_manual=true) it will be updated
     *
     * Generated from protobuf field <code>repeated string target = 3;</code>
     */
    private $target;
    /**
     * add to targets all editorials with automatic=true
     *
     * Generated from protobuf field <code>bool target_automatic = 4;</code>
     */
    protected $target_automatic = false;
    /**
     * update editorials even if automatic=false
     *
     * Generated from protobuf field <code>bool override_manual = 5;</code>
     */
    protected $override_manual = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $post_id
     *     @type string $source
     *           source language (by default post content is used)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $target
     *           list of target languages, if statement exists and it has automatic=true (or override_manual=true) it will be updated
     *     @type bool $target_automatic
     *           add to targets all editorials with automatic=true
     *     @type bool $override_manual
     *           update editorials even if automatic=false
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     * @return string
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Generated from protobuf field <code>string post_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPostId($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_id = $var;

        return $this;
    }

    /**
     * source language (by default post content is used)
     *
     * Generated from protobuf field <code>string source = 2;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * source language (by default post content is used)
     *
     * Generated from protobuf field <code>string source = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * list of target languages, if statement exists and it has automatic=true (or override_manual=true) it will be updated
     *
     * Generated from protobuf field <code>repeated string target = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * list of target languages, if statement exists and it has automatic=true (or override_manual=true) it will be updated
     *
     * Generated from protobuf field <code>repeated string target = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTarget($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->target = $arr;

        return $this;
    }

    /**
     * add to targets all editorials with automatic=true
     *
     * Generated from protobuf field <code>bool target_automatic = 4;</code>
     * @return bool
     */
    public function getTargetAutomatic()
    {
        return $this->target_automatic;
    }

    /**
     * add to targets all editorials with automatic=true
     *
     * Generated from protobuf field <code>bool target_automatic = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetAutomatic($var)
    {
        GPBUtil::checkBool($var);
        $this->target_automatic = $var;

        return $this;
    }

    /**
     * update editorials even if automatic=false
     *
     * Generated from protobuf field <code>bool override_manual = 5;</code>
     * @return bool
     */
    public function getOverrideManual()
    {
        return $this->override_manual;
    }

    /**
     * update editorials even if automatic=false
     *
     * Generated from protobuf field <code>bool override_manual = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setOverrideManual($var)
    {
        GPBUtil::checkBool($var);
        $this->override_manual = $var;

        return $this;
    }

}
