<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/problem_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.LookupCodeTemplateOutput</code>
 */
class LookupCodeTemplateOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Template template = 1;</code>
     */
    protected $template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Template $template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Template template = 1;</code>
     * @return \Eolymp\Atlas\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Template template = 1;</code>
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

