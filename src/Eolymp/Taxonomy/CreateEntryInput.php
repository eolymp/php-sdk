<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/dataset_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.CreateEntryInput</code>
 */
class CreateEntryInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string dataset_id = 1;</code>
     */
    protected $dataset_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Entry entry = 2;</code>
     */
    protected $entry = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset_id
     *     @type \Eolymp\Taxonomy\Entry $entry
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string dataset_id = 1;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Generated from protobuf field <code>string dataset_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Entry entry = 2;</code>
     * @return \Eolymp\Taxonomy\Entry
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Entry entry = 2;</code>
     * @param \Eolymp\Taxonomy\Entry $var
     * @return $this
     */
    public function setEntry($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Taxonomy\Entry::class);
        $this->entry = $var;

        return $this;
    }

}

