<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.DeleteScoreboardColumnInput</code>
 */
class DeleteScoreboardColumnInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     */
    protected $scoreboard_id = '';
    /**
     * Generated from protobuf field <code>string column_id = 2;</code>
     */
    protected $column_id = '';
    /**
     * Generated from protobuf field <code>bool auto_correct_columns = 3;</code>
     */
    protected $auto_correct_columns = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scoreboard_id
     *     @type string $column_id
     *     @type bool $auto_correct_columns
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Ranker::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     * @return string
     */
    public function getScoreboardId()
    {
        return $this->scoreboard_id;
    }

    /**
     * Generated from protobuf field <code>string scoreboard_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScoreboardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->scoreboard_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string column_id = 2;</code>
     * @return string
     */
    public function getColumnId()
    {
        return $this->column_id;
    }

    /**
     * Generated from protobuf field <code>string column_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnId($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool auto_correct_columns = 3;</code>
     * @return bool
     */
    public function getAutoCorrectColumns()
    {
        return $this->auto_correct_columns;
    }

    /**
     * Generated from protobuf field <code>bool auto_correct_columns = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCorrectColumns($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_correct_columns = $var;

        return $this;
    }

}

