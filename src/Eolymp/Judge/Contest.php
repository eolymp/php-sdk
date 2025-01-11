<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Contest</code>
 */
class Contest extends \Google\Protobuf\Internal\Message
{
    /**
     * Contest unique identifier, automatically allocated when contest is created.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * Contest name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string logo_url = 4;</code>
     */
    protected $logo_url = '';
    /**
     * Contest starting time, after this time users will be able to see problems and make submissions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp starts_at = 10;</code>
     */
    protected $starts_at = null;
    /**
     * deprecated: Time in seconds until beginning of the contest
     * this value may be off due to caching, calculate time using starts_at field
     *
     * Generated from protobuf field <code>uint32 starts_in = 11;</code>
     */
    protected $starts_in = 0;
    /**
     * Contest ending time, after this time users submissions won't be counted to the score anymore.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp ends_at = 15;</code>
     */
    protected $ends_at = null;
    /**
     * deprecated: Time in seconds until end of the contest
     * this value may be off due to caching, calculate time using ends_at field
     *
     * Generated from protobuf field <code>uint32 ends_in = 16;</code>
     */
    protected $ends_in = 0;
    /**
     * Duration in seconds for virtual participation mode. Users can start participating at any moment between startsAt
     * and endsAt, but once started they would have to finish in Duration amount of time. For example contest maybe will
     * start at midnight and finish at 23:59:59 the same day, but if duration is set to 4h it would mean users can
     * participate at any point of the day but will have only 4 hours to solve problems (4h or before 23:59:59 whichever
     * happens first).
     *
     * Generated from protobuf field <code>uint32 duration = 12;</code>
     */
    protected $duration = 0;
    /**
     * Contest status (see statuses above)
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Status status = 20;</code>
     */
    protected $status = 0;
    /**
     * Contest visibility defines who can participate and where contest is listed.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Visibility visibility = 30;</code>
     */
    protected $visibility = 0;
    /**
     * When participants join contests by themselves they will participate unofficially.
     *
     * Generated from protobuf field <code>bool join_unofficially = 33;</code>
     */
    protected $join_unofficially = false;
    /**
     * Participation mode defines timeframe for participation: online or virtual.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.ParticipationMode participation_mode = 31;</code>
     */
    protected $participation_mode = 0;
    /**
     * Format defines competition style IOI or ICPC.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Format format = 32;</code>
     */
    protected $format = 0;
    /**
     * contest key used to make human friendly URLs.
     *
     * Generated from protobuf field <code>string key = 40;</code>
     */
    protected $key = '';
    /**
     * Number of problems in the contest, might be "hidden".
     *
     * Generated from protobuf field <code>uint32 problem_count = 60;</code>
     */
    protected $problem_count = 0;
    /**
     * Generated from protobuf field <code>bool problem_count_hidden = 61;</code>
     */
    protected $problem_count_hidden = false;
    /**
     * Number of participants in the contest.
     *
     * Generated from protobuf field <code>uint32 participant_count = 62;</code>
     */
    protected $participant_count = 0;
    /**
     * Generated from protobuf field <code>bool participant_count_hidden = 63;</code>
     */
    protected $participant_count_hidden = false;
    /**
     * Date and time until contest is displayed in Featured contests
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp featured_until = 50;</code>
     */
    protected $featured_until = null;
    /**
     * Printer used to print submissions
     *
     * Generated from protobuf field <code>string printer_id = 71;</code>
     */
    protected $printer_id = '';
    /**
     * Taxonomy information
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Taxonomy taxonomy = 104;</code>
     */
    protected $taxonomy = null;
    /**
     * Appearance configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Appearance appearance = 101;</code>
     */
    protected $appearance = null;
    /**
     * Environment configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Environment environment = 103;</code>
     */
    protected $environment = null;
    /**
     * Upsolve configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Upsolve upsolve = 102;</code>
     */
    protected $upsolve = null;
    /**
     * Scoreboard configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoreboard scoreboard = 105;</code>
     */
    protected $scoreboard = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Contest unique identifier, automatically allocated when contest is created.
     *     @type string $url
     *     @type string $name
     *           Contest name.
     *     @type string $logo_url
     *     @type \Google\Protobuf\Timestamp $starts_at
     *           Contest starting time, after this time users will be able to see problems and make submissions.
     *     @type int $starts_in
     *           deprecated: Time in seconds until beginning of the contest
     *           this value may be off due to caching, calculate time using starts_at field
     *     @type \Google\Protobuf\Timestamp $ends_at
     *           Contest ending time, after this time users submissions won't be counted to the score anymore.
     *     @type int $ends_in
     *           deprecated: Time in seconds until end of the contest
     *           this value may be off due to caching, calculate time using ends_at field
     *     @type int $duration
     *           Duration in seconds for virtual participation mode. Users can start participating at any moment between startsAt
     *           and endsAt, but once started they would have to finish in Duration amount of time. For example contest maybe will
     *           start at midnight and finish at 23:59:59 the same day, but if duration is set to 4h it would mean users can
     *           participate at any point of the day but will have only 4 hours to solve problems (4h or before 23:59:59 whichever
     *           happens first).
     *     @type int $status
     *           Contest status (see statuses above)
     *     @type int $visibility
     *           Contest visibility defines who can participate and where contest is listed.
     *     @type bool $join_unofficially
     *           When participants join contests by themselves they will participate unofficially.
     *     @type int $participation_mode
     *           Participation mode defines timeframe for participation: online or virtual.
     *     @type int $format
     *           Format defines competition style IOI or ICPC.
     *     @type string $key
     *           contest key used to make human friendly URLs.
     *     @type int $problem_count
     *           Number of problems in the contest, might be "hidden".
     *     @type bool $problem_count_hidden
     *     @type int $participant_count
     *           Number of participants in the contest.
     *     @type bool $participant_count_hidden
     *     @type \Google\Protobuf\Timestamp $featured_until
     *           Date and time until contest is displayed in Featured contests
     *     @type string $printer_id
     *           Printer used to print submissions
     *     @type \Eolymp\Judge\Contest\Taxonomy $taxonomy
     *           Taxonomy information
     *     @type \Eolymp\Judge\Contest\Appearance $appearance
     *           Appearance configuration
     *     @type \Eolymp\Judge\Contest\Environment $environment
     *           Environment configuration
     *     @type \Eolymp\Judge\Contest\Upsolve $upsolve
     *           Upsolve configuration
     *     @type \Eolymp\Judge\Contest\Scoreboard $scoreboard
     *           Scoreboard configuration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        parent::__construct($data);
    }

    /**
     * Contest unique identifier, automatically allocated when contest is created.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Contest unique identifier, automatically allocated when contest is created.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Contest name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Contest name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 4;</code>
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_url = $var;

        return $this;
    }

    /**
     * Contest starting time, after this time users will be able to see problems and make submissions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp starts_at = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartsAt()
    {
        return $this->starts_at;
    }

    public function hasStartsAt()
    {
        return isset($this->starts_at);
    }

    public function clearStartsAt()
    {
        unset($this->starts_at);
    }

    /**
     * Contest starting time, after this time users will be able to see problems and make submissions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp starts_at = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartsAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->starts_at = $var;

        return $this;
    }

    /**
     * deprecated: Time in seconds until beginning of the contest
     * this value may be off due to caching, calculate time using starts_at field
     *
     * Generated from protobuf field <code>uint32 starts_in = 11;</code>
     * @return int
     */
    public function getStartsIn()
    {
        return $this->starts_in;
    }

    /**
     * deprecated: Time in seconds until beginning of the contest
     * this value may be off due to caching, calculate time using starts_at field
     *
     * Generated from protobuf field <code>uint32 starts_in = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setStartsIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->starts_in = $var;

        return $this;
    }

    /**
     * Contest ending time, after this time users submissions won't be counted to the score anymore.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp ends_at = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndsAt()
    {
        return $this->ends_at;
    }

    public function hasEndsAt()
    {
        return isset($this->ends_at);
    }

    public function clearEndsAt()
    {
        unset($this->ends_at);
    }

    /**
     * Contest ending time, after this time users submissions won't be counted to the score anymore.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp ends_at = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndsAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->ends_at = $var;

        return $this;
    }

    /**
     * deprecated: Time in seconds until end of the contest
     * this value may be off due to caching, calculate time using ends_at field
     *
     * Generated from protobuf field <code>uint32 ends_in = 16;</code>
     * @return int
     */
    public function getEndsIn()
    {
        return $this->ends_in;
    }

    /**
     * deprecated: Time in seconds until end of the contest
     * this value may be off due to caching, calculate time using ends_at field
     *
     * Generated from protobuf field <code>uint32 ends_in = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setEndsIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->ends_in = $var;

        return $this;
    }

    /**
     * Duration in seconds for virtual participation mode. Users can start participating at any moment between startsAt
     * and endsAt, but once started they would have to finish in Duration amount of time. For example contest maybe will
     * start at midnight and finish at 23:59:59 the same day, but if duration is set to 4h it would mean users can
     * participate at any point of the day but will have only 4 hours to solve problems (4h or before 23:59:59 whichever
     * happens first).
     *
     * Generated from protobuf field <code>uint32 duration = 12;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Duration in seconds for virtual participation mode. Users can start participating at any moment between startsAt
     * and endsAt, but once started they would have to finish in Duration amount of time. For example contest maybe will
     * start at midnight and finish at 23:59:59 the same day, but if duration is set to 4h it would mean users can
     * participate at any point of the day but will have only 4 hours to solve problems (4h or before 23:59:59 whichever
     * happens first).
     *
     * Generated from protobuf field <code>uint32 duration = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->duration = $var;

        return $this;
    }

    /**
     * Contest status (see statuses above)
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Status status = 20;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Contest status (see statuses above)
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Status status = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Contest visibility defines who can participate and where contest is listed.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Visibility visibility = 30;</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Contest visibility defines who can participate and where contest is listed.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Visibility visibility = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * When participants join contests by themselves they will participate unofficially.
     *
     * Generated from protobuf field <code>bool join_unofficially = 33;</code>
     * @return bool
     */
    public function getJoinUnofficially()
    {
        return $this->join_unofficially;
    }

    /**
     * When participants join contests by themselves they will participate unofficially.
     *
     * Generated from protobuf field <code>bool join_unofficially = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setJoinUnofficially($var)
    {
        GPBUtil::checkBool($var);
        $this->join_unofficially = $var;

        return $this;
    }

    /**
     * Participation mode defines timeframe for participation: online or virtual.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.ParticipationMode participation_mode = 31;</code>
     * @return int
     */
    public function getParticipationMode()
    {
        return $this->participation_mode;
    }

    /**
     * Participation mode defines timeframe for participation: online or virtual.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.ParticipationMode participation_mode = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setParticipationMode($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest\ParticipationMode::class);
        $this->participation_mode = $var;

        return $this;
    }

    /**
     * Format defines competition style IOI or ICPC.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Format format = 32;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Format defines competition style IOI or ICPC.
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Format format = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest\Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * contest key used to make human friendly URLs.
     *
     * Generated from protobuf field <code>string key = 40;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * contest key used to make human friendly URLs.
     *
     * Generated from protobuf field <code>string key = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Number of problems in the contest, might be "hidden".
     *
     * Generated from protobuf field <code>uint32 problem_count = 60;</code>
     * @return int
     */
    public function getProblemCount()
    {
        return $this->problem_count;
    }

    /**
     * Number of problems in the contest, might be "hidden".
     *
     * Generated from protobuf field <code>uint32 problem_count = 60;</code>
     * @param int $var
     * @return $this
     */
    public function setProblemCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->problem_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool problem_count_hidden = 61;</code>
     * @return bool
     */
    public function getProblemCountHidden()
    {
        return $this->problem_count_hidden;
    }

    /**
     * Generated from protobuf field <code>bool problem_count_hidden = 61;</code>
     * @param bool $var
     * @return $this
     */
    public function setProblemCountHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->problem_count_hidden = $var;

        return $this;
    }

    /**
     * Number of participants in the contest.
     *
     * Generated from protobuf field <code>uint32 participant_count = 62;</code>
     * @return int
     */
    public function getParticipantCount()
    {
        return $this->participant_count;
    }

    /**
     * Number of participants in the contest.
     *
     * Generated from protobuf field <code>uint32 participant_count = 62;</code>
     * @param int $var
     * @return $this
     */
    public function setParticipantCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->participant_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool participant_count_hidden = 63;</code>
     * @return bool
     */
    public function getParticipantCountHidden()
    {
        return $this->participant_count_hidden;
    }

    /**
     * Generated from protobuf field <code>bool participant_count_hidden = 63;</code>
     * @param bool $var
     * @return $this
     */
    public function setParticipantCountHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->participant_count_hidden = $var;

        return $this;
    }

    /**
     * Date and time until contest is displayed in Featured contests
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp featured_until = 50;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFeaturedUntil()
    {
        return $this->featured_until;
    }

    public function hasFeaturedUntil()
    {
        return isset($this->featured_until);
    }

    public function clearFeaturedUntil()
    {
        unset($this->featured_until);
    }

    /**
     * Date and time until contest is displayed in Featured contests
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp featured_until = 50;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFeaturedUntil($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->featured_until = $var;

        return $this;
    }

    /**
     * Printer used to print submissions
     *
     * Generated from protobuf field <code>string printer_id = 71;</code>
     * @return string
     */
    public function getPrinterId()
    {
        return $this->printer_id;
    }

    /**
     * Printer used to print submissions
     *
     * Generated from protobuf field <code>string printer_id = 71;</code>
     * @param string $var
     * @return $this
     */
    public function setPrinterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->printer_id = $var;

        return $this;
    }

    /**
     * Taxonomy information
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Taxonomy taxonomy = 104;</code>
     * @return \Eolymp\Judge\Contest\Taxonomy|null
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    public function hasTaxonomy()
    {
        return isset($this->taxonomy);
    }

    public function clearTaxonomy()
    {
        unset($this->taxonomy);
    }

    /**
     * Taxonomy information
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Taxonomy taxonomy = 104;</code>
     * @param \Eolymp\Judge\Contest\Taxonomy $var
     * @return $this
     */
    public function setTaxonomy($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest\Taxonomy::class);
        $this->taxonomy = $var;

        return $this;
    }

    /**
     * Appearance configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Appearance appearance = 101;</code>
     * @return \Eolymp\Judge\Contest\Appearance|null
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    public function hasAppearance()
    {
        return isset($this->appearance);
    }

    public function clearAppearance()
    {
        unset($this->appearance);
    }

    /**
     * Appearance configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Appearance appearance = 101;</code>
     * @param \Eolymp\Judge\Contest\Appearance $var
     * @return $this
     */
    public function setAppearance($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest\Appearance::class);
        $this->appearance = $var;

        return $this;
    }

    /**
     * Environment configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Environment environment = 103;</code>
     * @return \Eolymp\Judge\Contest\Environment|null
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * Environment configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Environment environment = 103;</code>
     * @param \Eolymp\Judge\Contest\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest\Environment::class);
        $this->environment = $var;

        return $this;
    }

    /**
     * Upsolve configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Upsolve upsolve = 102;</code>
     * @return \Eolymp\Judge\Contest\Upsolve|null
     */
    public function getUpsolve()
    {
        return $this->upsolve;
    }

    public function hasUpsolve()
    {
        return isset($this->upsolve);
    }

    public function clearUpsolve()
    {
        unset($this->upsolve);
    }

    /**
     * Upsolve configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Upsolve upsolve = 102;</code>
     * @param \Eolymp\Judge\Contest\Upsolve $var
     * @return $this
     */
    public function setUpsolve($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest\Upsolve::class);
        $this->upsolve = $var;

        return $this;
    }

    /**
     * Scoreboard configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoreboard scoreboard = 105;</code>
     * @return \Eolymp\Judge\Contest\Scoreboard|null
     */
    public function getScoreboard()
    {
        return $this->scoreboard;
    }

    public function hasScoreboard()
    {
        return isset($this->scoreboard);
    }

    public function clearScoreboard()
    {
        unset($this->scoreboard);
    }

    /**
     * Scoreboard configuration
     *
     * Generated from protobuf field <code>.eolymp.judge.Contest.Scoreboard scoreboard = 105;</code>
     * @param \Eolymp\Judge\Contest\Scoreboard $var
     * @return $this
     */
    public function setScoreboard($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest\Scoreboard::class);
        $this->scoreboard = $var;

        return $this;
    }

}

