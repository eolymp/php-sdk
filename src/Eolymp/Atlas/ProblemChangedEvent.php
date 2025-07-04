<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/problem_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ProblemChangedEvent</code>
 */
class ProblemChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem before = 1;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem after = 2;</code>
     */
    protected $after = null;
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Version version = 3;</code>
     */
    protected $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Problem $before
     *     @type \Eolymp\Atlas\Problem $after
     *     @type \Eolymp\Atlas\Version $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem before = 1;</code>
     * @return \Eolymp\Atlas\Problem|null
     */
    public function getBefore()
    {
        return $this->before;
    }

    public function hasBefore()
    {
        return isset($this->before);
    }

    public function clearBefore()
    {
        unset($this->before);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem before = 1;</code>
     * @param \Eolymp\Atlas\Problem $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Problem::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem after = 2;</code>
     * @return \Eolymp\Atlas\Problem|null
     */
    public function getAfter()
    {
        return $this->after;
    }

    public function hasAfter()
    {
        return isset($this->after);
    }

    public function clearAfter()
    {
        unset($this->after);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem after = 2;</code>
     * @param \Eolymp\Atlas\Problem $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Problem::class);
        $this->after = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Version version = 3;</code>
     * @return \Eolymp\Atlas\Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Version version = 3;</code>
     * @param \Eolymp\Atlas\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Version::class);
        $this->version = $var;

        return $this;
    }

}

