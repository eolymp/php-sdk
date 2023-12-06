<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/render_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.RenderContentOutput</code>
 */
class RenderContentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Node render = 1;</code>
     */
    protected $render = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Ecm\Node $render
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\RenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Node render = 1;</code>
     * @return \Eolymp\Ecm\Node
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Node render = 1;</code>
     * @param \Eolymp\Ecm\Node $var
     * @return $this
     */
    public function setRender($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Node::class);
        $this->render = $var;

        return $this;
    }

}
