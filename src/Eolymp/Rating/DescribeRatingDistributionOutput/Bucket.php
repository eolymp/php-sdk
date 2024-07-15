<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/rating/rating_service.proto

namespace Eolymp\Rating\DescribeRatingDistributionOutput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.rating.DescribeRatingDistributionOutput.Bucket</code>
 */
class Bucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 min_rating = 1;</code>
     */
    protected $min_rating = 0;
    /**
     * Generated from protobuf field <code>int32 max_rating = 2;</code>
     */
    protected $max_rating = 0;
    /**
     * Generated from protobuf field <code>uint32 count = 3;</code>
     */
    protected $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_rating
     *     @type int $max_rating
     *     @type int $count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Rating\RatingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 min_rating = 1;</code>
     * @return int
     */
    public function getMinRating()
    {
        return $this->min_rating;
    }

    /**
     * Generated from protobuf field <code>int32 min_rating = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinRating($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_rating = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_rating = 2;</code>
     * @return int
     */
    public function getMaxRating()
    {
        return $this->max_rating;
    }

    /**
     * Generated from protobuf field <code>int32 max_rating = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxRating($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_rating = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 3;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Bucket::class, \Eolymp\Rating\DescribeRatingDistributionOutput_Bucket::class);
