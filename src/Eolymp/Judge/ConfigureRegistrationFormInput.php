<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ConfigureRegistrationFormInput</code>
 */
class ConfigureRegistrationFormInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Form form = 10;</code>
     */
    protected $form = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type \Eolymp\Judge\Form $form
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Form form = 10;</code>
     * @return \Eolymp\Judge\Form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Form form = 10;</code>
     * @param \Eolymp\Judge\Form $var
     * @return $this
     */
    public function setForm($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Form::class);
        $this->form = $var;

        return $this;
    }

}

