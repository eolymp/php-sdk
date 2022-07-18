<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/job.proto

namespace Eolymp\Executor\Job\Step;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Upload operation uploads saves file to the object storage
 *
 * Generated from protobuf message <code>eolymp.executor.Job.Step.Upload</code>
 */
class Upload extends \Google\Protobuf\Internal\Message
{
    /**
     * Source actor.
     *
     * Generated from protobuf field <code>string source_actor = 1;</code>
     */
    protected $source_actor = '';
    /**
     * Source path relative to the actor's workdir.
     *
     * Generated from protobuf field <code>string source_path = 2;</code>
     */
    protected $source_path = '';
    /**
     * Name for the uploaded file.
     *
     * Generated from protobuf field <code>string target_name = 3;</code>
     */
    protected $target_name = '';
    /**
     * If true, step won't fail if source file does not exist.
     *
     * Generated from protobuf field <code>bool optionally = 4;</code>
     */
    protected $optionally = false;
    /**
     * Defines how long uploaded file should be stored (in seconds).
     *
     * Generated from protobuf field <code>uint32 ttl = 5;</code>
     */
    protected $ttl = 0;
    /**
     * Defines maximum file size (in bytes), if file exceeds this limit it will be trimmed.
     *
     * Generated from protobuf field <code>uint32 max_size = 6;</code>
     */
    protected $max_size = 0;
    /**
     * Max size (in bytes) for data ERN, data ERN can not exceed 1K (default value is 1KB), use force_upload to avoid data ERNs completely.
     *
     * Generated from protobuf field <code>uint32 max_data_size = 7;</code>
     */
    protected $max_data_size = 0;
    /**
     * Force upload to blob storage, by default upload action will encode small files into data ERN instead of uploading files to blob storage.
     *
     * Generated from protobuf field <code>bool force_upload = 8;</code>
     */
    protected $force_upload = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_actor
     *           Source actor.
     *     @type string $source_path
     *           Source path relative to the actor's workdir.
     *     @type string $target_name
     *           Name for the uploaded file.
     *     @type bool $optionally
     *           If true, step won't fail if source file does not exist.
     *     @type int $ttl
     *           Defines how long uploaded file should be stored (in seconds).
     *     @type int $max_size
     *           Defines maximum file size (in bytes), if file exceeds this limit it will be trimmed.
     *     @type int $max_data_size
     *           Max size (in bytes) for data ERN, data ERN can not exceed 1K (default value is 1KB), use force_upload to avoid data ERNs completely.
     *     @type bool $force_upload
     *           Force upload to blob storage, by default upload action will encode small files into data ERN instead of uploading files to blob storage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Source actor.
     *
     * Generated from protobuf field <code>string source_actor = 1;</code>
     * @return string
     */
    public function getSourceActor()
    {
        return $this->source_actor;
    }

    /**
     * Source actor.
     *
     * Generated from protobuf field <code>string source_actor = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceActor($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_actor = $var;

        return $this;
    }

    /**
     * Source path relative to the actor's workdir.
     *
     * Generated from protobuf field <code>string source_path = 2;</code>
     * @return string
     */
    public function getSourcePath()
    {
        return $this->source_path;
    }

    /**
     * Source path relative to the actor's workdir.
     *
     * Generated from protobuf field <code>string source_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourcePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_path = $var;

        return $this;
    }

    /**
     * Name for the uploaded file.
     *
     * Generated from protobuf field <code>string target_name = 3;</code>
     * @return string
     */
    public function getTargetName()
    {
        return $this->target_name;
    }

    /**
     * Name for the uploaded file.
     *
     * Generated from protobuf field <code>string target_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_name = $var;

        return $this;
    }

    /**
     * If true, step won't fail if source file does not exist.
     *
     * Generated from protobuf field <code>bool optionally = 4;</code>
     * @return bool
     */
    public function getOptionally()
    {
        return $this->optionally;
    }

    /**
     * If true, step won't fail if source file does not exist.
     *
     * Generated from protobuf field <code>bool optionally = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptionally($var)
    {
        GPBUtil::checkBool($var);
        $this->optionally = $var;

        return $this;
    }

    /**
     * Defines how long uploaded file should be stored (in seconds).
     *
     * Generated from protobuf field <code>uint32 ttl = 5;</code>
     * @return int
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * Defines how long uploaded file should be stored (in seconds).
     *
     * Generated from protobuf field <code>uint32 ttl = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkUint32($var);
        $this->ttl = $var;

        return $this;
    }

    /**
     * Defines maximum file size (in bytes), if file exceeds this limit it will be trimmed.
     *
     * Generated from protobuf field <code>uint32 max_size = 6;</code>
     * @return int
     */
    public function getMaxSize()
    {
        return $this->max_size;
    }

    /**
     * Defines maximum file size (in bytes), if file exceeds this limit it will be trimmed.
     *
     * Generated from protobuf field <code>uint32 max_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_size = $var;

        return $this;
    }

    /**
     * Max size (in bytes) for data ERN, data ERN can not exceed 1K (default value is 1KB), use force_upload to avoid data ERNs completely.
     *
     * Generated from protobuf field <code>uint32 max_data_size = 7;</code>
     * @return int
     */
    public function getMaxDataSize()
    {
        return $this->max_data_size;
    }

    /**
     * Max size (in bytes) for data ERN, data ERN can not exceed 1K (default value is 1KB), use force_upload to avoid data ERNs completely.
     *
     * Generated from protobuf field <code>uint32 max_data_size = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDataSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_data_size = $var;

        return $this;
    }

    /**
     * Force upload to blob storage, by default upload action will encode small files into data ERN instead of uploading files to blob storage.
     *
     * Generated from protobuf field <code>bool force_upload = 8;</code>
     * @return bool
     */
    public function getForceUpload()
    {
        return $this->force_upload;
    }

    /**
     * Force upload to blob storage, by default upload action will encode small files into data ERN instead of uploading files to blob storage.
     *
     * Generated from protobuf field <code>bool force_upload = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setForceUpload($var)
    {
        GPBUtil::checkBool($var);
        $this->force_upload = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Upload::class, \Eolymp\Executor\Job_Step_Upload::class);

