<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/rating/rating_service.proto

namespace Eolymp\Rating;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.rating.DescribeRatingBoundariesOutput</code>
 */
class DescribeRatingBoundariesOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.rating.DescribeRatingBoundariesOutput.Level levels = 1;</code>
     */
    private $levels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Rating\DescribeRatingBoundariesOutput\Level>|\Google\Protobuf\Internal\RepeatedField $levels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Rating\RatingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.rating.DescribeRatingBoundariesOutput.Level levels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLevels()
    {
        return $this->levels;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.rating.DescribeRatingBoundariesOutput.Level levels = 1;</code>
     * @param array<\Eolymp\Rating\DescribeRatingBoundariesOutput\Level>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLevels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Rating\DescribeRatingBoundariesOutput\Level::class);
        $this->levels = $arr;

        return $this;
    }

}

