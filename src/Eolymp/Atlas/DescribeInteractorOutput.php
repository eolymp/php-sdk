<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeInteractorOutput</code>
 */
class DescribeInteractorOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Interactor interactor = 1;</code>
     */
    protected $interactor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Interactor $interactor
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TestingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Interactor interactor = 1;</code>
     * @return \Eolymp\Atlas\Interactor|null
     */
    public function getInteractor()
    {
        return $this->interactor;
    }

    public function hasInteractor()
    {
        return isset($this->interactor);
    }

    public function clearInteractor()
    {
        unset($this->interactor);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Interactor interactor = 1;</code>
     * @param \Eolymp\Atlas\Interactor $var
     * @return $this
     */
    public function setInteractor($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Interactor::class);
        $this->interactor = $var;

        return $this;
    }

}

