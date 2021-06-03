<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.CreateCodeTemplateInput</code>
 */
class CreateCodeTemplateInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Template template = 2;</code>
     */
    protected $template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type \Eolymp\Atlas\Template $template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Template template = 2;</code>
     * @return \Eolymp\Atlas\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Template template = 2;</code>
     * @param \Eolymp\Atlas\Template $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Template::class);
        $this->template = $var;

        return $this;
    }

}

