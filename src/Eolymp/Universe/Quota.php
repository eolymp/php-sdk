<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/quota.proto

namespace Eolymp\Universe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.universe.Quota</code>
 */
class Quota extends \Google\Protobuf\Internal\Message
{
    /**
     * general quota and features
     *
     * Generated from protobuf field <code>uint32 permissions_per_space = 6;</code>
     */
    protected $permissions_per_space = 0;
    /**
     * allow to configure sso for the space
     *
     * Generated from protobuf field <code>bool single_sing_on = 22;</code>
     */
    protected $single_sing_on = false;
    /**
     * allow to configure local user database for the space
     *
     * Generated from protobuf field <code>bool dedicated_user_database = 23;</code>
     */
    protected $dedicated_user_database = false;
    /**
     * max number of custom profile fields for members
     *
     * Generated from protobuf field <code>uint32 attributes_per_space = 7;</code>
     */
    protected $attributes_per_space = 0;
    /**
     * customer support reply time in hours
     *
     * Generated from protobuf field <code>uint32 customer_support_reply_time = 24;</code>
     */
    protected $customer_support_reply_time = 0;
    /**
     * enable discussion post and comment features
     *
     * Generated from protobuf field <code>bool allow_discussions = 31;</code>
     */
    protected $allow_discussions = false;
    /**
     * max number of achievements
     *
     * Generated from protobuf field <code>uint32 achievements_per_space = 15;</code>
     */
    protected $achievements_per_space = 0;
    /**
     * submission evaluation quota and features
     *
     * Generated from protobuf field <code>uint32 monthly_evaluations_by_seat = 13;</code>
     */
    protected $monthly_evaluations_by_seat = 0;
    /**
     * space uses priority testing queue
     *
     * Generated from protobuf field <code>bool priority_evaluation_queue = 25;</code>
     */
    protected $priority_evaluation_queue = false;
    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool plagiarism_analysis = 18;</code>
     */
    protected $plagiarism_analysis = false;
    /**
     * member quota and features
     *
     * Generated from protobuf field <code>uint32 members_per_space = 2;</code>
     */
    protected $members_per_space = 0;
    /**
     * scoreboard quota and features
     *
     * Generated from protobuf field <code>uint32 scoreboards_per_space = 5;</code>
     */
    protected $scoreboards_per_space = 0;
    /**
     * courses quota and features
     *
     * Generated from protobuf field <code>uint32 courses_per_space = 12;</code>
     */
    protected $courses_per_space = 0;
    /**
     * problem quota and features
     *
     * Generated from protobuf field <code>uint32 problems_per_space = 1;</code>
     */
    protected $problems_per_space = 0;
    /**
     * Generated from protobuf field <code>uint32 tests_per_problem = 101;</code>
     */
    protected $tests_per_problem = 0;
    /**
     * Generated from protobuf field <code>uint32 testset_per_problem = 102;</code>
     */
    protected $testset_per_problem = 0;
    /**
     * Generated from protobuf field <code>uint32 statement_per_problem = 103;</code>
     */
    protected $statement_per_problem = 0;
    /**
     * Generated from protobuf field <code>uint32 editorial_per_problem = 104;</code>
     */
    protected $editorial_per_problem = 0;
    /**
     * Generated from protobuf field <code>uint32 solutions_per_problem = 105;</code>
     */
    protected $solutions_per_problem = 0;
    /**
     * Generated from protobuf field <code>uint32 code_templates_per_problem = 106;</code>
     */
    protected $code_templates_per_problem = 0;
    /**
     * Generated from protobuf field <code>bool debug_assistant = 120;</code>
     */
    protected $debug_assistant = false;
    /**
     * Generated from protobuf field <code>uint32 debug_hints_daily_per_admin = 121;</code>
     */
    protected $debug_hints_daily_per_admin = 0;
    /**
     * Generated from protobuf field <code>uint32 debug_hints_daily_per_member = 122;</code>
     */
    protected $debug_hints_daily_per_member = 0;
    /**
     * contest quota and features
     *
     * Generated from protobuf field <code>uint32 contests_per_space = 3;</code>
     */
    protected $contests_per_space = 0;
    /**
     * max number of simultaneously active contests (ongoing and upsolve)
     *
     * Generated from protobuf field <code>uint32 active_contests_per_space = 4;</code>
     */
    protected $active_contests_per_space = 0;
    /**
     * max number of contests created (started) during current billing period
     *
     * Generated from protobuf field <code>uint32 monthly_contests_per_space = 14;</code>
     */
    protected $monthly_contests_per_space = 0;
    /**
     * Generated from protobuf field <code>uint32 problems_per_contest = 10;</code>
     */
    protected $problems_per_contest = 0;
    /**
     * deprecated: limited by number of members in space
     *
     * Generated from protobuf field <code>uint32 participants_per_contest = 11;</code>
     */
    protected $participants_per_contest = 0;
    /**
     * allow contest upsolve mode
     *
     * Generated from protobuf field <code>bool contest_upsolve_mode = 16;</code>
     */
    protected $contest_upsolve_mode = false;
    /**
     * max contest duration in seconds
     *
     * Generated from protobuf field <code>uint32 max_contest_duration = 17;</code>
     */
    protected $max_contest_duration = 0;
    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool team_contests = 19;</code>
     */
    protected $team_contests = false;
    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool ghost_participants = 20;</code>
     */
    protected $ghost_participants = false;
    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool unofficial_participants = 21;</code>
     */
    protected $unofficial_participants = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $permissions_per_space
     *           general quota and features
     *     @type bool $single_sing_on
     *           allow to configure sso for the space
     *     @type bool $dedicated_user_database
     *           allow to configure local user database for the space
     *     @type int $attributes_per_space
     *           max number of custom profile fields for members
     *     @type int $customer_support_reply_time
     *           customer support reply time in hours
     *     @type bool $allow_discussions
     *           enable discussion post and comment features
     *     @type int $achievements_per_space
     *           max number of achievements
     *     @type int $monthly_evaluations_by_seat
     *           submission evaluation quota and features
     *     @type bool $priority_evaluation_queue
     *           space uses priority testing queue
     *     @type bool $plagiarism_analysis
     *           analyse submission code to see similarities and generate a report
     *     @type int $members_per_space
     *           member quota and features
     *     @type int $scoreboards_per_space
     *           scoreboard quota and features
     *     @type int $courses_per_space
     *           courses quota and features
     *     @type int $problems_per_space
     *           problem quota and features
     *     @type int $tests_per_problem
     *     @type int $testset_per_problem
     *     @type int $statement_per_problem
     *     @type int $editorial_per_problem
     *     @type int $solutions_per_problem
     *     @type int $code_templates_per_problem
     *     @type bool $debug_assistant
     *     @type int $debug_hints_daily_per_admin
     *     @type int $debug_hints_daily_per_member
     *     @type int $contests_per_space
     *           contest quota and features
     *     @type int $active_contests_per_space
     *           max number of simultaneously active contests (ongoing and upsolve)
     *     @type int $monthly_contests_per_space
     *           max number of contests created (started) during current billing period
     *     @type int $problems_per_contest
     *     @type int $participants_per_contest
     *           deprecated: limited by number of members in space
     *     @type bool $contest_upsolve_mode
     *           allow contest upsolve mode
     *     @type int $max_contest_duration
     *           max contest duration in seconds
     *     @type bool $team_contests
     *           analyse submission code to see similarities and generate a report
     *     @type bool $ghost_participants
     *           analyse submission code to see similarities and generate a report
     *     @type bool $unofficial_participants
     *           analyse submission code to see similarities and generate a report
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Universe\Quota::initOnce();
        parent::__construct($data);
    }

    /**
     * general quota and features
     *
     * Generated from protobuf field <code>uint32 permissions_per_space = 6;</code>
     * @return int
     */
    public function getPermissionsPerSpace()
    {
        return $this->permissions_per_space;
    }

    /**
     * general quota and features
     *
     * Generated from protobuf field <code>uint32 permissions_per_space = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPermissionsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->permissions_per_space = $var;

        return $this;
    }

    /**
     * allow to configure sso for the space
     *
     * Generated from protobuf field <code>bool single_sing_on = 22;</code>
     * @return bool
     */
    public function getSingleSingOn()
    {
        return $this->single_sing_on;
    }

    /**
     * allow to configure sso for the space
     *
     * Generated from protobuf field <code>bool single_sing_on = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setSingleSingOn($var)
    {
        GPBUtil::checkBool($var);
        $this->single_sing_on = $var;

        return $this;
    }

    /**
     * allow to configure local user database for the space
     *
     * Generated from protobuf field <code>bool dedicated_user_database = 23;</code>
     * @return bool
     */
    public function getDedicatedUserDatabase()
    {
        return $this->dedicated_user_database;
    }

    /**
     * allow to configure local user database for the space
     *
     * Generated from protobuf field <code>bool dedicated_user_database = 23;</code>
     * @param bool $var
     * @return $this
     */
    public function setDedicatedUserDatabase($var)
    {
        GPBUtil::checkBool($var);
        $this->dedicated_user_database = $var;

        return $this;
    }

    /**
     * max number of custom profile fields for members
     *
     * Generated from protobuf field <code>uint32 attributes_per_space = 7;</code>
     * @return int
     */
    public function getAttributesPerSpace()
    {
        return $this->attributes_per_space;
    }

    /**
     * max number of custom profile fields for members
     *
     * Generated from protobuf field <code>uint32 attributes_per_space = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAttributesPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->attributes_per_space = $var;

        return $this;
    }

    /**
     * customer support reply time in hours
     *
     * Generated from protobuf field <code>uint32 customer_support_reply_time = 24;</code>
     * @return int
     */
    public function getCustomerSupportReplyTime()
    {
        return $this->customer_support_reply_time;
    }

    /**
     * customer support reply time in hours
     *
     * Generated from protobuf field <code>uint32 customer_support_reply_time = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setCustomerSupportReplyTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->customer_support_reply_time = $var;

        return $this;
    }

    /**
     * enable discussion post and comment features
     *
     * Generated from protobuf field <code>bool allow_discussions = 31;</code>
     * @return bool
     */
    public function getAllowDiscussions()
    {
        return $this->allow_discussions;
    }

    /**
     * enable discussion post and comment features
     *
     * Generated from protobuf field <code>bool allow_discussions = 31;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowDiscussions($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_discussions = $var;

        return $this;
    }

    /**
     * max number of achievements
     *
     * Generated from protobuf field <code>uint32 achievements_per_space = 15;</code>
     * @return int
     */
    public function getAchievementsPerSpace()
    {
        return $this->achievements_per_space;
    }

    /**
     * max number of achievements
     *
     * Generated from protobuf field <code>uint32 achievements_per_space = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setAchievementsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->achievements_per_space = $var;

        return $this;
    }

    /**
     * submission evaluation quota and features
     *
     * Generated from protobuf field <code>uint32 monthly_evaluations_by_seat = 13;</code>
     * @return int
     */
    public function getMonthlyEvaluationsBySeat()
    {
        return $this->monthly_evaluations_by_seat;
    }

    /**
     * submission evaluation quota and features
     *
     * Generated from protobuf field <code>uint32 monthly_evaluations_by_seat = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setMonthlyEvaluationsBySeat($var)
    {
        GPBUtil::checkUint32($var);
        $this->monthly_evaluations_by_seat = $var;

        return $this;
    }

    /**
     * space uses priority testing queue
     *
     * Generated from protobuf field <code>bool priority_evaluation_queue = 25;</code>
     * @return bool
     */
    public function getPriorityEvaluationQueue()
    {
        return $this->priority_evaluation_queue;
    }

    /**
     * space uses priority testing queue
     *
     * Generated from protobuf field <code>bool priority_evaluation_queue = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setPriorityEvaluationQueue($var)
    {
        GPBUtil::checkBool($var);
        $this->priority_evaluation_queue = $var;

        return $this;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool plagiarism_analysis = 18;</code>
     * @return bool
     */
    public function getPlagiarismAnalysis()
    {
        return $this->plagiarism_analysis;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool plagiarism_analysis = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setPlagiarismAnalysis($var)
    {
        GPBUtil::checkBool($var);
        $this->plagiarism_analysis = $var;

        return $this;
    }

    /**
     * member quota and features
     *
     * Generated from protobuf field <code>uint32 members_per_space = 2;</code>
     * @return int
     */
    public function getMembersPerSpace()
    {
        return $this->members_per_space;
    }

    /**
     * member quota and features
     *
     * Generated from protobuf field <code>uint32 members_per_space = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMembersPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->members_per_space = $var;

        return $this;
    }

    /**
     * scoreboard quota and features
     *
     * Generated from protobuf field <code>uint32 scoreboards_per_space = 5;</code>
     * @return int
     */
    public function getScoreboardsPerSpace()
    {
        return $this->scoreboards_per_space;
    }

    /**
     * scoreboard quota and features
     *
     * Generated from protobuf field <code>uint32 scoreboards_per_space = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreboardsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->scoreboards_per_space = $var;

        return $this;
    }

    /**
     * courses quota and features
     *
     * Generated from protobuf field <code>uint32 courses_per_space = 12;</code>
     * @return int
     */
    public function getCoursesPerSpace()
    {
        return $this->courses_per_space;
    }

    /**
     * courses quota and features
     *
     * Generated from protobuf field <code>uint32 courses_per_space = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCoursesPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->courses_per_space = $var;

        return $this;
    }

    /**
     * problem quota and features
     *
     * Generated from protobuf field <code>uint32 problems_per_space = 1;</code>
     * @return int
     */
    public function getProblemsPerSpace()
    {
        return $this->problems_per_space;
    }

    /**
     * problem quota and features
     *
     * Generated from protobuf field <code>uint32 problems_per_space = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProblemsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->problems_per_space = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 tests_per_problem = 101;</code>
     * @return int
     */
    public function getTestsPerProblem()
    {
        return $this->tests_per_problem;
    }

    /**
     * Generated from protobuf field <code>uint32 tests_per_problem = 101;</code>
     * @param int $var
     * @return $this
     */
    public function setTestsPerProblem($var)
    {
        GPBUtil::checkUint32($var);
        $this->tests_per_problem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 testset_per_problem = 102;</code>
     * @return int
     */
    public function getTestsetPerProblem()
    {
        return $this->testset_per_problem;
    }

    /**
     * Generated from protobuf field <code>uint32 testset_per_problem = 102;</code>
     * @param int $var
     * @return $this
     */
    public function setTestsetPerProblem($var)
    {
        GPBUtil::checkUint32($var);
        $this->testset_per_problem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 statement_per_problem = 103;</code>
     * @return int
     */
    public function getStatementPerProblem()
    {
        return $this->statement_per_problem;
    }

    /**
     * Generated from protobuf field <code>uint32 statement_per_problem = 103;</code>
     * @param int $var
     * @return $this
     */
    public function setStatementPerProblem($var)
    {
        GPBUtil::checkUint32($var);
        $this->statement_per_problem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 editorial_per_problem = 104;</code>
     * @return int
     */
    public function getEditorialPerProblem()
    {
        return $this->editorial_per_problem;
    }

    /**
     * Generated from protobuf field <code>uint32 editorial_per_problem = 104;</code>
     * @param int $var
     * @return $this
     */
    public function setEditorialPerProblem($var)
    {
        GPBUtil::checkUint32($var);
        $this->editorial_per_problem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 solutions_per_problem = 105;</code>
     * @return int
     */
    public function getSolutionsPerProblem()
    {
        return $this->solutions_per_problem;
    }

    /**
     * Generated from protobuf field <code>uint32 solutions_per_problem = 105;</code>
     * @param int $var
     * @return $this
     */
    public function setSolutionsPerProblem($var)
    {
        GPBUtil::checkUint32($var);
        $this->solutions_per_problem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 code_templates_per_problem = 106;</code>
     * @return int
     */
    public function getCodeTemplatesPerProblem()
    {
        return $this->code_templates_per_problem;
    }

    /**
     * Generated from protobuf field <code>uint32 code_templates_per_problem = 106;</code>
     * @param int $var
     * @return $this
     */
    public function setCodeTemplatesPerProblem($var)
    {
        GPBUtil::checkUint32($var);
        $this->code_templates_per_problem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool debug_assistant = 120;</code>
     * @return bool
     */
    public function getDebugAssistant()
    {
        return $this->debug_assistant;
    }

    /**
     * Generated from protobuf field <code>bool debug_assistant = 120;</code>
     * @param bool $var
     * @return $this
     */
    public function setDebugAssistant($var)
    {
        GPBUtil::checkBool($var);
        $this->debug_assistant = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 debug_hints_daily_per_admin = 121;</code>
     * @return int
     */
    public function getDebugHintsDailyPerAdmin()
    {
        return $this->debug_hints_daily_per_admin;
    }

    /**
     * Generated from protobuf field <code>uint32 debug_hints_daily_per_admin = 121;</code>
     * @param int $var
     * @return $this
     */
    public function setDebugHintsDailyPerAdmin($var)
    {
        GPBUtil::checkUint32($var);
        $this->debug_hints_daily_per_admin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 debug_hints_daily_per_member = 122;</code>
     * @return int
     */
    public function getDebugHintsDailyPerMember()
    {
        return $this->debug_hints_daily_per_member;
    }

    /**
     * Generated from protobuf field <code>uint32 debug_hints_daily_per_member = 122;</code>
     * @param int $var
     * @return $this
     */
    public function setDebugHintsDailyPerMember($var)
    {
        GPBUtil::checkUint32($var);
        $this->debug_hints_daily_per_member = $var;

        return $this;
    }

    /**
     * contest quota and features
     *
     * Generated from protobuf field <code>uint32 contests_per_space = 3;</code>
     * @return int
     */
    public function getContestsPerSpace()
    {
        return $this->contests_per_space;
    }

    /**
     * contest quota and features
     *
     * Generated from protobuf field <code>uint32 contests_per_space = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setContestsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->contests_per_space = $var;

        return $this;
    }

    /**
     * max number of simultaneously active contests (ongoing and upsolve)
     *
     * Generated from protobuf field <code>uint32 active_contests_per_space = 4;</code>
     * @return int
     */
    public function getActiveContestsPerSpace()
    {
        return $this->active_contests_per_space;
    }

    /**
     * max number of simultaneously active contests (ongoing and upsolve)
     *
     * Generated from protobuf field <code>uint32 active_contests_per_space = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveContestsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_contests_per_space = $var;

        return $this;
    }

    /**
     * max number of contests created (started) during current billing period
     *
     * Generated from protobuf field <code>uint32 monthly_contests_per_space = 14;</code>
     * @return int
     */
    public function getMonthlyContestsPerSpace()
    {
        return $this->monthly_contests_per_space;
    }

    /**
     * max number of contests created (started) during current billing period
     *
     * Generated from protobuf field <code>uint32 monthly_contests_per_space = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setMonthlyContestsPerSpace($var)
    {
        GPBUtil::checkUint32($var);
        $this->monthly_contests_per_space = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 problems_per_contest = 10;</code>
     * @return int
     */
    public function getProblemsPerContest()
    {
        return $this->problems_per_contest;
    }

    /**
     * Generated from protobuf field <code>uint32 problems_per_contest = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setProblemsPerContest($var)
    {
        GPBUtil::checkUint32($var);
        $this->problems_per_contest = $var;

        return $this;
    }

    /**
     * deprecated: limited by number of members in space
     *
     * Generated from protobuf field <code>uint32 participants_per_contest = 11;</code>
     * @return int
     */
    public function getParticipantsPerContest()
    {
        return $this->participants_per_contest;
    }

    /**
     * deprecated: limited by number of members in space
     *
     * Generated from protobuf field <code>uint32 participants_per_contest = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setParticipantsPerContest($var)
    {
        GPBUtil::checkUint32($var);
        $this->participants_per_contest = $var;

        return $this;
    }

    /**
     * allow contest upsolve mode
     *
     * Generated from protobuf field <code>bool contest_upsolve_mode = 16;</code>
     * @return bool
     */
    public function getContestUpsolveMode()
    {
        return $this->contest_upsolve_mode;
    }

    /**
     * allow contest upsolve mode
     *
     * Generated from protobuf field <code>bool contest_upsolve_mode = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setContestUpsolveMode($var)
    {
        GPBUtil::checkBool($var);
        $this->contest_upsolve_mode = $var;

        return $this;
    }

    /**
     * max contest duration in seconds
     *
     * Generated from protobuf field <code>uint32 max_contest_duration = 17;</code>
     * @return int
     */
    public function getMaxContestDuration()
    {
        return $this->max_contest_duration;
    }

    /**
     * max contest duration in seconds
     *
     * Generated from protobuf field <code>uint32 max_contest_duration = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxContestDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_contest_duration = $var;

        return $this;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool team_contests = 19;</code>
     * @return bool
     */
    public function getTeamContests()
    {
        return $this->team_contests;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool team_contests = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setTeamContests($var)
    {
        GPBUtil::checkBool($var);
        $this->team_contests = $var;

        return $this;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool ghost_participants = 20;</code>
     * @return bool
     */
    public function getGhostParticipants()
    {
        return $this->ghost_participants;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool ghost_participants = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setGhostParticipants($var)
    {
        GPBUtil::checkBool($var);
        $this->ghost_participants = $var;

        return $this;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool unofficial_participants = 21;</code>
     * @return bool
     */
    public function getUnofficialParticipants()
    {
        return $this->unofficial_participants;
    }

    /**
     * analyse submission code to see similarities and generate a report
     *
     * Generated from protobuf field <code>bool unofficial_participants = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setUnofficialParticipants($var)
    {
        GPBUtil::checkBool($var);
        $this->unofficial_participants = $var;

        return $this;
    }

}

