<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/problem_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.LookupStatementOutput</code>
 */
class LookupStatementOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Statement statement = 2;</code>
     */
    protected $statement = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Statement $statement
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Statement statement = 2;</code>
     * @return \Eolymp\Atlas\Statement|null
     */
    public function getStatement()
    {
        return $this->statement;
    }

    public function hasStatement()
    {
        return isset($this->statement);
    }

    public function clearStatement()
    {
        unset($this->statement);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Statement statement = 2;</code>
     * @param \Eolymp\Atlas\Statement $var
     * @return $this
     */
    public function setStatement($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Statement::class);
        $this->statement = $var;

        return $this;
    }

}

