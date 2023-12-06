<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/render_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.RenderContentInput</code>
 */
class RenderContentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 1;</code>
     */
    protected $content = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Ecm\Content $content
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\RenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 1;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 1;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->content = $var;

        return $this;
    }

}

