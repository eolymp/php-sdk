<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/dataset_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.DescribeDatasetOutput</code>
 */
class DescribeDatasetOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Dataset dataset = 1;</code>
     */
    protected $dataset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Taxonomy\Dataset $dataset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Dataset dataset = 1;</code>
     * @return \Eolymp\Taxonomy\Dataset
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Dataset dataset = 1;</code>
     * @param \Eolymp\Taxonomy\Dataset $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Taxonomy\Dataset::class);
        $this->dataset = $var;

        return $this;
    }

}

