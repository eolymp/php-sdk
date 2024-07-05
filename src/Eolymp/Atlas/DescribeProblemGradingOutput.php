<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/scoring_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeProblemGradingOutput</code>
 */
class DescribeProblemGradingOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Problem grade ranges from highest grade to lowest
     * to grade a submission, iterate over grade ranges and compare resource_usage value with upper_bound,
     * first grade which has upper_bound higher or equal to resource usage is the grade for submission.
     * for _, range := range ranges {
     *    if range.GetUpperBound() >= submission.GetResourceUsage() {
     *        return range.GetGrade()
     *    }
     * }
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.DescribeProblemGradingOutput.Range ranges = 2;</code>
     */
    private $ranges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Atlas\DescribeProblemGradingOutput\Range>|\Google\Protobuf\Internal\RepeatedField $ranges
     *           Problem grade ranges from highest grade to lowest
     *           to grade a submission, iterate over grade ranges and compare resource_usage value with upper_bound,
     *           first grade which has upper_bound higher or equal to resource usage is the grade for submission.
     *           for _, range := range ranges {
     *              if range.GetUpperBound() >= submission.GetResourceUsage() {
     *                  return range.GetGrade()
     *              }
     *           }
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\ScoringService::initOnce();
        parent::__construct($data);
    }

    /**
     * Problem grade ranges from highest grade to lowest
     * to grade a submission, iterate over grade ranges and compare resource_usage value with upper_bound,
     * first grade which has upper_bound higher or equal to resource usage is the grade for submission.
     * for _, range := range ranges {
     *    if range.GetUpperBound() >= submission.GetResourceUsage() {
     *        return range.GetGrade()
     *    }
     * }
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.DescribeProblemGradingOutput.Range ranges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * Problem grade ranges from highest grade to lowest
     * to grade a submission, iterate over grade ranges and compare resource_usage value with upper_bound,
     * first grade which has upper_bound higher or equal to resource usage is the grade for submission.
     * for _, range := range ranges {
     *    if range.GetUpperBound() >= submission.GetResourceUsage() {
     *        return range.GetGrade()
     *    }
     * }
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.DescribeProblemGradingOutput.Range ranges = 2;</code>
     * @param array<\Eolymp\Atlas\DescribeProblemGradingOutput\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Atlas\DescribeProblemGradingOutput\Range::class);
        $this->ranges = $arr;

        return $this;
    }

}

