<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/suggestion_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ReviewSuggestionInput</code>
 */
class ReviewSuggestionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string suggestion_id = 2;</code>
     */
    protected $suggestion_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Suggestion.Status status = 3;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content comment = 4;</code>
     */
    protected $comment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type string $suggestion_id
     *     @type int $status
     *     @type \Eolymp\Ecm\Content $comment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\SuggestionService::initOnce();
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
     * Generated from protobuf field <code>string suggestion_id = 2;</code>
     * @return string
     */
    public function getSuggestionId()
    {
        return $this->suggestion_id;
    }

    /**
     * Generated from protobuf field <code>string suggestion_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggestion_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Suggestion.Status status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Suggestion.Status status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Suggestion_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content comment = 4;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content comment = 4;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->comment = $var;

        return $this;
    }

}

