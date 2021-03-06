<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Solution</code>
 */
class Solution extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier. Keep empty when creating new solution.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Problem where this solution belongs. Keep empty when creating new solution.
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * Author for the solution. Populated automatically.
     *
     * Generated from protobuf field <code>string author_id = 3;</code>
     */
    protected $author_id = '';
    /**
     * Solution is published by author.
     *
     * Generated from protobuf field <code>bool published = 5;</code>
     */
    protected $published = false;
    /**
     * Solution is approved by site moderators.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Moderation moderation_status = 6;</code>
     */
    protected $moderation_status = 0;
    /**
     * Generated from protobuf field <code>string moderation_comment = 7;</code>
     */
    protected $moderation_comment = '';
    /**
     * Locale for the solution.
     *
     * Generated from protobuf field <code>string locale = 10;</code>
     */
    protected $locale = '';
    /**
     * Content format.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Format format = 11;</code>
     */
    protected $format = 0;
    /**
     * Content of the solution: explanation, code samples etc.
     *
     * Generated from protobuf field <code>string content = 12;</code>
     */
    protected $content = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Unique identifier. Keep empty when creating new solution.
     *     @type string $problem_id
     *           Problem where this solution belongs. Keep empty when creating new solution.
     *     @type string $author_id
     *           Author for the solution. Populated automatically.
     *     @type bool $published
     *           Solution is published by author.
     *     @type int $moderation_status
     *           Solution is approved by site moderators.
     *     @type string $moderation_comment
     *     @type string $locale
     *           Locale for the solution.
     *     @type int $format
     *           Content format.
     *     @type string $content
     *           Content of the solution: explanation, code samples etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Solution::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier. Keep empty when creating new solution.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier. Keep empty when creating new solution.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Problem where this solution belongs. Keep empty when creating new solution.
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Problem where this solution belongs. Keep empty when creating new solution.
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
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
     * Author for the solution. Populated automatically.
     *
     * Generated from protobuf field <code>string author_id = 3;</code>
     * @return string
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * Author for the solution. Populated automatically.
     *
     * Generated from protobuf field <code>string author_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->author_id = $var;

        return $this;
    }

    /**
     * Solution is published by author.
     *
     * Generated from protobuf field <code>bool published = 5;</code>
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Solution is published by author.
     *
     * Generated from protobuf field <code>bool published = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPublished($var)
    {
        GPBUtil::checkBool($var);
        $this->published = $var;

        return $this;
    }

    /**
     * Solution is approved by site moderators.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Moderation moderation_status = 6;</code>
     * @return int
     */
    public function getModerationStatus()
    {
        return $this->moderation_status;
    }

    /**
     * Solution is approved by site moderators.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Moderation moderation_status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setModerationStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Solution_Moderation::class);
        $this->moderation_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string moderation_comment = 7;</code>
     * @return string
     */
    public function getModerationComment()
    {
        return $this->moderation_comment;
    }

    /**
     * Generated from protobuf field <code>string moderation_comment = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setModerationComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->moderation_comment = $var;

        return $this;
    }

    /**
     * Locale for the solution.
     *
     * Generated from protobuf field <code>string locale = 10;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Locale for the solution.
     *
     * Generated from protobuf field <code>string locale = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Content format.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Format format = 11;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Content format.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Solution.Format format = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Solution_Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * Content of the solution: explanation, code samples etc.
     *
     * Generated from protobuf field <code>string content = 12;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Content of the solution: explanation, code samples etc.
     *
     * Generated from protobuf field <code>string content = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

}

