<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/suggestion_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeSuggestionOutput</code>
 */
class DescribeSuggestionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Suggestion suggestion = 1;</code>
     */
    protected $suggestion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Suggestion $suggestion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\SuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Suggestion suggestion = 1;</code>
     * @return \Eolymp\Atlas\Suggestion
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Suggestion suggestion = 1;</code>
     * @param \Eolymp\Atlas\Suggestion $var
     * @return $this
     */
    public function setSuggestion($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Suggestion::class);
        $this->suggestion = $var;

        return $this;
    }

}
