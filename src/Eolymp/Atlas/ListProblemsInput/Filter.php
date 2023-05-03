<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace Eolymp\Atlas\ListProblemsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.ListProblemsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 10;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID topic_id = 2;</code>
     */
    private $topic_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_visible = 3;</code>
     */
    private $is_visible;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_private = 4;</code>
     */
    private $is_private;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt number = 5;</code>
     */
    private $number;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt difficulty = 6;</code>
     */
    private $difficulty;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 7;</code>
     */
    private $status;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 9;</code>
     */
    private $score;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_bookmarked = 8;</code>
     */
    private $is_bookmarked;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $topic_id
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_visible
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_private
     *     @type \Eolymp\Wellknown\ExpressionInt[]|\Google\Protobuf\Internal\RepeatedField $number
     *     @type \Eolymp\Wellknown\ExpressionInt[]|\Google\Protobuf\Internal\RepeatedField $difficulty
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $status
     *     @type \Eolymp\Wellknown\ExpressionFloat[]|\Google\Protobuf\Internal\RepeatedField $score
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $is_bookmarked
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 10;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID topic_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopicId()
    {
        return $this->topic_id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID topic_id = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopicId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->topic_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_visible = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsVisible()
    {
        return $this->is_visible;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_visible = 3;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsVisible($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_visible = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_private = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsPrivate()
    {
        return $this->is_private;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_private = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsPrivate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_private = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt number = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt number = 5;</code>
     * @param \Eolymp\Wellknown\ExpressionInt[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNumber($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->number = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt difficulty = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt difficulty = 6;</code>
     * @param \Eolymp\Wellknown\ExpressionInt[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDifficulty($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->difficulty = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 7;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionFloat score = 9;</code>
     * @param \Eolymp\Wellknown\ExpressionFloat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScore($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionFloat::class);
        $this->score = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_bookmarked = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIsBookmarked()
    {
        return $this->is_bookmarked;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool is_bookmarked = 8;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIsBookmarked($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->is_bookmarked = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Atlas\ListProblemsInput_Filter::class);

