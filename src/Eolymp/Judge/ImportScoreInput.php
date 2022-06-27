<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ImportScoreInput</code>
 */
class ImportScoreInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     */
    protected $participant_id = '';
    /**
     * Scores is an array of score snapshots at different time relative to the starting time.
     * Each entry defines a complete snapshot (they do not accumulate automatically).
     * These fields can be populated:
     *   - offset - defines when snapshot was taken, it's an amount of time in seconds since participant started contest
     *   - score - total score at the moment in time (suppose to be sum of scores in breakdown field, but not enforced)
     *   - penalty - total penalty at the moment in time (suppose to be sum of penalty in breakdown field, but not enforced)
     *   - breakdown - score breakdown by problem, nested fields are as follows:
     *     - problem_id - self explanatory
     *     - score - score as defined by contest format (for IOI: from 0 to 100, for ICPC 0 or 1)
     *     - penalty - penalty as defined by contest format (for ICPC: solved_in/60 + attempts*20)
     *     - percentage - percentage of scored points from 0 to 1 (1 means 100% or fully solved), this value does not depend on contest format
     *     - attempts - number of attempts to solve problem before successful attempt
     *     - solved_in - time in second to solve problem, since participant started contest, leave as 0 if not solved
     * The rest of the fields are automatically calculated and ignored during import.
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Score scores = 2;</code>
     */
    private $scores;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant_id
     *     @type \Eolymp\Judge\Score[]|\Google\Protobuf\Internal\RepeatedField $scores
     *           Scores is an array of score snapshots at different time relative to the starting time.
     *           Each entry defines a complete snapshot (they do not accumulate automatically).
     *           These fields can be populated:
     *             - offset - defines when snapshot was taken, it's an amount of time in seconds since participant started contest
     *             - score - total score at the moment in time (suppose to be sum of scores in breakdown field, but not enforced)
     *             - penalty - total penalty at the moment in time (suppose to be sum of penalty in breakdown field, but not enforced)
     *             - breakdown - score breakdown by problem, nested fields are as follows:
     *               - problem_id - self explanatory
     *               - score - score as defined by contest format (for IOI: from 0 to 100, for ICPC 0 or 1)
     *               - penalty - penalty as defined by contest format (for ICPC: solved_in/60 + attempts*20)
     *               - percentage - percentage of scored points from 0 to 1 (1 means 100% or fully solved), this value does not depend on contest format
     *               - attempts - number of attempts to solve problem before successful attempt
     *               - solved_in - time in second to solve problem, since participant started contest, leave as 0 if not solved
     *           The rest of the fields are automatically calculated and ignored during import.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_id = $var;

        return $this;
    }

    /**
     * Scores is an array of score snapshots at different time relative to the starting time.
     * Each entry defines a complete snapshot (they do not accumulate automatically).
     * These fields can be populated:
     *   - offset - defines when snapshot was taken, it's an amount of time in seconds since participant started contest
     *   - score - total score at the moment in time (suppose to be sum of scores in breakdown field, but not enforced)
     *   - penalty - total penalty at the moment in time (suppose to be sum of penalty in breakdown field, but not enforced)
     *   - breakdown - score breakdown by problem, nested fields are as follows:
     *     - problem_id - self explanatory
     *     - score - score as defined by contest format (for IOI: from 0 to 100, for ICPC 0 or 1)
     *     - penalty - penalty as defined by contest format (for ICPC: solved_in/60 + attempts*20)
     *     - percentage - percentage of scored points from 0 to 1 (1 means 100% or fully solved), this value does not depend on contest format
     *     - attempts - number of attempts to solve problem before successful attempt
     *     - solved_in - time in second to solve problem, since participant started contest, leave as 0 if not solved
     * The rest of the fields are automatically calculated and ignored during import.
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Score scores = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Scores is an array of score snapshots at different time relative to the starting time.
     * Each entry defines a complete snapshot (they do not accumulate automatically).
     * These fields can be populated:
     *   - offset - defines when snapshot was taken, it's an amount of time in seconds since participant started contest
     *   - score - total score at the moment in time (suppose to be sum of scores in breakdown field, but not enforced)
     *   - penalty - total penalty at the moment in time (suppose to be sum of penalty in breakdown field, but not enforced)
     *   - breakdown - score breakdown by problem, nested fields are as follows:
     *     - problem_id - self explanatory
     *     - score - score as defined by contest format (for IOI: from 0 to 100, for ICPC 0 or 1)
     *     - penalty - penalty as defined by contest format (for ICPC: solved_in/60 + attempts*20)
     *     - percentage - percentage of scored points from 0 to 1 (1 means 100% or fully solved), this value does not depend on contest format
     *     - attempts - number of attempts to solve problem before successful attempt
     *     - solved_in - time in second to solve problem, since participant started contest, leave as 0 if not solved
     * The rest of the fields are automatically calculated and ignored during import.
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Score scores = 2;</code>
     * @param \Eolymp\Judge\Score[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Score::class);
        $this->scores = $arr;

        return $this;
    }

}

