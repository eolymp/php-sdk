<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/workspace/workspace.proto

namespace Eolymp\Workspace;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.workspace.RemoveFileInput</code>
 */
class RemoveFileInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file_ern = 1;</code>
     */
    protected $file_ern = '';
    /**
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_ern
     *     @type string $project_id
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Workspace\Workspace::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string file_ern = 1;</code>
     * @return string
     */
    public function getFileErn()
    {
        return $this->file_ern;
    }

    /**
     * Generated from protobuf field <code>string file_ern = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_ern = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

