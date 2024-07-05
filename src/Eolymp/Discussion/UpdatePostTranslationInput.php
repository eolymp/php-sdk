<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.UpdatePostTranslationInput</code>
 */
class UpdatePostTranslationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.UpdatePostTranslationInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string post_id = 2;</code>
     */
    protected $post_id = '';
    /**
     * Generated from protobuf field <code>string translation_id = 3;</code>
     */
    protected $translation_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation translation = 4;</code>
     */
    protected $translation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *     @type string $post_id
     *     @type string $translation_id
     *     @type \Eolymp\Discussion\Post\Translation $translation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\PostService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.UpdatePostTranslationInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.discussion.UpdatePostTranslationInput.Patch patch = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Discussion\UpdatePostTranslationInput\Patch::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string post_id = 2;</code>
     * @return string
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Generated from protobuf field <code>string post_id = 2;</code>
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
     * Generated from protobuf field <code>string translation_id = 3;</code>
     * @return string
     */
    public function getTranslationId()
    {
        return $this->translation_id;
    }

    /**
     * Generated from protobuf field <code>string translation_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTranslationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->translation_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation translation = 4;</code>
     * @return \Eolymp\Discussion\Post\Translation|null
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    public function hasTranslation()
    {
        return isset($this->translation);
    }

    public function clearTranslation()
    {
        unset($this->translation);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Post.Translation translation = 4;</code>
     * @param \Eolymp\Discussion\Post\Translation $var
     * @return $this
     */
    public function setTranslation($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Post\Translation::class);
        $this->translation = $var;

        return $this;
    }

}

