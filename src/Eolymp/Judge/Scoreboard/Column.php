<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard.Column</code>
 */
class Column extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>bool sortable = 20;</code>
     */
    protected $sortable = false;
    /**
     * Generated from protobuf field <code>bool filterable = 21;</code>
     */
    protected $filterable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $type
     *     @type string $title
     *     @type bool $sortable
     *     @type bool $filterable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
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
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Scoreboard\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool sortable = 20;</code>
     * @return bool
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Generated from protobuf field <code>bool sortable = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortable($var)
    {
        GPBUtil::checkBool($var);
        $this->sortable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool filterable = 21;</code>
     * @return bool
     */
    public function getFilterable()
    {
        return $this->filterable;
    }

    /**
     * Generated from protobuf field <code>bool filterable = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setFilterable($var)
    {
        GPBUtil::checkBool($var);
        $this->filterable = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Column::class, \Eolymp\Judge\Scoreboard_Column::class);
