<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/scoreboard.proto

namespace Eolymp\Ranker\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.Scoreboard.Column</code>
 */
class Column extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string parent_id = 2;</code>
     */
    protected $parent_id = '';
    /**
     * Generated from protobuf field <code>string key = 3;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string short_name = 5;</code>
     */
    protected $short_name = '';
    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard.Column.Type type = 6;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>uint32 index = 7;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>bool visible = 8;</code>
     */
    protected $visible = false;
    /**
     * Generated from protobuf field <code>string judge_contest_id = 20;</code>
     */
    protected $judge_contest_id = '';
    /**
     * Generated from protobuf field <code>string judge_problem_id = 21;</code>
     */
    protected $judge_problem_id = '';
    /**
     * Generated from protobuf field <code>string community_attribute_key = 22;</code>
     */
    protected $community_attribute_key = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Column columns = 100;</code>
     */
    private $columns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $parent_id
     *     @type string $key
     *     @type string $name
     *     @type string $short_name
     *     @type int $type
     *     @type int $index
     *     @type bool $visible
     *     @type string $judge_contest_id
     *     @type string $judge_problem_id
     *     @type string $community_attribute_key
     *     @type \Eolymp\Ranker\Scoreboard\Column[]|\Google\Protobuf\Internal\RepeatedField $columns
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string parent_id = 2;</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Generated from protobuf field <code>string parent_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 3;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string short_name = 5;</code>
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * Generated from protobuf field <code>string short_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->short_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard.Column.Type type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard.Column.Type type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Ranker\Scoreboard_Column_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 7;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool visible = 8;</code>
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Generated from protobuf field <code>bool visible = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setVisible($var)
    {
        GPBUtil::checkBool($var);
        $this->visible = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string judge_contest_id = 20;</code>
     * @return string
     */
    public function getJudgeContestId()
    {
        return $this->judge_contest_id;
    }

    /**
     * Generated from protobuf field <code>string judge_contest_id = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setJudgeContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->judge_contest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string judge_problem_id = 21;</code>
     * @return string
     */
    public function getJudgeProblemId()
    {
        return $this->judge_problem_id;
    }

    /**
     * Generated from protobuf field <code>string judge_problem_id = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setJudgeProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->judge_problem_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string community_attribute_key = 22;</code>
     * @return string
     */
    public function getCommunityAttributeKey()
    {
        return $this->community_attribute_key;
    }

    /**
     * Generated from protobuf field <code>string community_attribute_key = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setCommunityAttributeKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->community_attribute_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Column columns = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Column columns = 100;</code>
     * @param \Eolymp\Ranker\Scoreboard\Column[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Ranker\Scoreboard\Column::class);
        $this->columns = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Column::class, \Eolymp\Ranker\Scoreboard_Column::class);

