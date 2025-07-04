<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/rating/rating_service.proto

namespace Eolymp\Rating;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.rating.DescribeRatingDistributionOutput</code>
 */
class DescribeRatingDistributionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.rating.DescribeRatingDistributionOutput.Bucket buckets = 1;</code>
     */
    private $buckets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Rating\DescribeRatingDistributionOutput\Bucket>|\Google\Protobuf\Internal\RepeatedField $buckets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Rating\RatingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.rating.DescribeRatingDistributionOutput.Bucket buckets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.rating.DescribeRatingDistributionOutput.Bucket buckets = 1;</code>
     * @param array<\Eolymp\Rating\DescribeRatingDistributionOutput\Bucket>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Rating\DescribeRatingDistributionOutput\Bucket::class);
        $this->buckets = $arr;

        return $this;
    }

}

