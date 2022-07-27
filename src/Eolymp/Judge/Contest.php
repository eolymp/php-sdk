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
     * Generated from protobuf field <code>string ern = 9999;</code>
     */
    protected $ern = '';
    /**
     * Contest name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Contest starting time, after this time users will be able to see problems and make submissions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp starts_at = 10;</code>
     */
    protected $starts_at = null;
    /**
     * Time in seconds until beginning of the contest
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
     * Time in seconds until end of the contest
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
     * Domain for contest, used to lookup for contest by domain name.
     *
     * Generated from protobuf field <code>string domain = 40;</code>
     */
    protected $domain = '';
    /**
     * Deprecated, space where contest was created, should be avoided.
     *
     * Generated from protobuf field <code>string space_id = 1000;</code>
     */
    protected $space_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Contest unique identifier, automatically allocated when contest is created.
     *     @type string $ern
     *     @type string $name
     *           Contest name.
     *     @type \Google\Protobuf\Timestamp $starts_at
     *           Contest starting time, after this time users will be able to see problems and make submissions.
     *     @type int $starts_in
     *           Time in seconds until beginning of the contest
     *     @type \Google\Protobuf\Timestamp $ends_at
     *           Contest ending time, after this time users submissions won't be counted to the score anymore.
     *     @type int $ends_in
     *           Time in seconds until end of the contest
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
     *     @type int $participation_mode
     *           Participation mode defines timeframe for participation: online or virtual.
     *     @type int $format
     *           Format defines competition style IOI or ICPC.
     *     @type string $domain
     *           Domain for contest, used to lookup for contest by domain name.
     *     @type string $space_id
     *           Deprecated, space where contest was created, should be avoided.
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
     * Generated from protobuf field <code>string ern = 9999;</code>
     * @return string
     */
    public function getErn()
    {
        return $this->ern;
    }

    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->ern = $var;

        return $this;
    }

    /**
     * Contest name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Contest name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Contest starting time, after this time users will be able to see problems and make submissions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp starts_at = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartsAt()
    {
        return $this->starts_at;
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
     * Time in seconds until beginning of the contest
     *
     * Generated from protobuf field <code>uint32 starts_in = 11;</code>
     * @return int
     */
    public function getStartsIn()
    {
        return $this->starts_in;
    }

    /**
     * Time in seconds until beginning of the contest
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
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndsAt()
    {
        return $this->ends_at;
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
     * Time in seconds until end of the contest
     *
     * Generated from protobuf field <code>uint32 ends_in = 16;</code>
     * @return int
     */
    public function getEndsIn()
    {
        return $this->ends_in;
    }

    /**
     * Time in seconds until end of the contest
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
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest_Status::class);
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
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest_Visibility::class);
        $this->visibility = $var;

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
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest_ParticipationMode::class);
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
        GPBUtil::checkEnum($var, \Eolymp\Judge\Contest_Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * Domain for contest, used to lookup for contest by domain name.
     *
     * Generated from protobuf field <code>string domain = 40;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Domain for contest, used to lookup for contest by domain name.
     *
     * Generated from protobuf field <code>string domain = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Deprecated, space where contest was created, should be avoided.
     *
     * Generated from protobuf field <code>string space_id = 1000;</code>
     * @return string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Deprecated, space where contest was created, should be avoided.
     *
     * Generated from protobuf field <code>string space_id = 1000;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->space_id = $var;

        return $this;
    }

}

