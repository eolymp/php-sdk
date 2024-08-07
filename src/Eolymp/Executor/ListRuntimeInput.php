<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/language_service.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.ListRuntimeInput</code>
 */
class ListRuntimeInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.executor.ListRuntimeInput.Filter filters = 40;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Executor\ListRuntimeInput\Filter $filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.ListRuntimeInput.Filter filters = 40;</code>
     * @return \Eolymp\Executor\ListRuntimeInput\Filter|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.ListRuntimeInput.Filter filters = 40;</code>
     * @param \Eolymp\Executor\ListRuntimeInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\ListRuntimeInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

}

