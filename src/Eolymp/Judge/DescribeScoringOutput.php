<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeScoringOutput</code>
 */
class DescribeScoringOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoring scoring = 1;</code>
     */
    protected $scoring = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Contest\Scoring $scoring
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoring scoring = 1;</code>
     * @return \Eolymp\Judge\Contest\Scoring
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoring scoring = 1;</code>
     * @param \Eolymp\Judge\Contest\Scoring $var
     * @return $this
     */
    public function setScoring($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest_Scoring::class);
        $this->scoring = $var;

        return $this;
    }

}

