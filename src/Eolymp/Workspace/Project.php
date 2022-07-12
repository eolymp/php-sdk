<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/workspace/project.proto

namespace Eolymp\Workspace;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.workspace.Project</code>
 */
class Project extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string uri = 9999;</code>
     */
    protected $uri = '';
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string runtime = 3;</code>
     */
    protected $runtime = '';
    /**
     * Generated from protobuf field <code>.eolymp.workspace.Project.Visibility visibility = 4;</code>
     */
    protected $visibility = 0;
    /**
     * Generated from protobuf field <code>string author_id = 5;</code>
     */
    protected $author_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_on = 6;</code>
     */
    protected $created_on = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_on = 7;</code>
     */
    protected $updated_on = null;
    /**
     * Generated from protobuf field <code>.eolymp.workspace.Project.Target target = 10;</code>
     */
    protected $target = null;
    /**
     * Generated from protobuf field <code>repeated string labels = 100;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *     @type string $id
     *     @type string $name
     *     @type string $runtime
     *     @type int $visibility
     *     @type string $author_id
     *     @type \Google\Protobuf\Timestamp $created_on
     *     @type \Google\Protobuf\Timestamp $updated_on
     *     @type \Eolymp\Workspace\Project\Target $target
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $labels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Workspace\Project::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string uri = 9999;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Generated from protobuf field <code>string uri = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Generated from protobuf field <code>string runtime = 3;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Generated from protobuf field <code>string runtime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.workspace.Project.Visibility visibility = 4;</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Generated from protobuf field <code>.eolymp.workspace.Project.Visibility visibility = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Workspace\Project_Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string author_id = 5;</code>
     * @return string
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * Generated from protobuf field <code>string author_id = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_on = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_on = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_on = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_on = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdatedOn()
    {
        return $this->updated_on;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_on = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_on = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.workspace.Project.Target target = 10;</code>
     * @return \Eolymp\Workspace\Project\Target
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Generated from protobuf field <code>.eolymp.workspace.Project.Target target = 10;</code>
     * @param \Eolymp\Workspace\Project\Target $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Workspace\Project_Target::class);
        $this->target = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string labels = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>repeated string labels = 100;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

