<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * display name, readonly, users nickname, name, attribute, ghosts name or teams name
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>int32 rank = 70;</code>
     */
    protected $rank = 0;
    /**
     * Generated from protobuf field <code>int32 rank_lower = 72;</code>
     */
    protected $rank_lower = 0;
    /**
     * Generated from protobuf field <code>int32 rating = 71;</code>
     */
    protected $rating = 0;
    /**
     * level from 0 (beginner) to 12 (legendary), calculated based on the user's rating
     *
     * Generated from protobuf field <code>uint32 level = 79;</code>
     */
    protected $level = 0;
    /**
     * deprecated
     *
     * Generated from protobuf field <code>bool active = 10;</code>
     */
    protected $active = false;
    /**
     * Generated from protobuf field <code>bool inactive = 11;</code>
     */
    protected $inactive = false;
    /**
     * member profile (attributes) is missing some information
     *
     * Generated from protobuf field <code>bool incomplete = 20;</code>
     */
    protected $incomplete = false;
    /**
     * member participates in all competitions unofficially
     *
     * Generated from protobuf field <code>bool unofficial = 30;</code>
     */
    protected $unofficial = false;
    /**
     * member is secret and does not appear on anywhere (for example, an admin who performs testing)
     *
     * Generated from protobuf field <code>bool secret = 40;</code>
     */
    protected $secret = false;
    /**
     * Generated from protobuf field <code>string tier_id = 50;</code>
     */
    protected $tier_id = '';
    /**
     * Generated from protobuf field <code>string fallback_tier_id = 51;</code>
     */
    protected $fallback_tier_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 60;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp seated_at = 61;</code>
     */
    protected $seated_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp active_at = 62;</code>
     */
    protected $active_at = null;
    /**
     * Generated from protobuf field <code>.eolymp.community.Member.Stats stats = 300;</code>
     */
    protected $stats = null;
    /**
     * Generated from protobuf field <code>repeated string groups = 200;</code>
     */
    private $groups;
    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Attribute.Value attributes = 900;</code>
     */
    private $attributes;
    protected $account;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $display_name
     *           display name, readonly, users nickname, name, attribute, ghosts name or teams name
     *     @type string $url
     *     @type int $rank
     *     @type int $rank_lower
     *     @type int $rating
     *     @type int $level
     *           level from 0 (beginner) to 12 (legendary), calculated based on the user's rating
     *     @type bool $active
     *           deprecated
     *     @type bool $inactive
     *     @type bool $incomplete
     *           member profile (attributes) is missing some information
     *     @type bool $unofficial
     *           member participates in all competitions unofficially
     *     @type bool $secret
     *           member is secret and does not appear on anywhere (for example, an admin who performs testing)
     *     @type string $tier_id
     *     @type string $fallback_tier_id
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $seated_at
     *     @type \Google\Protobuf\Timestamp $active_at
     *     @type \Eolymp\Community\User $user
     *     @type \Eolymp\Community\Team $team
     *     @type \Eolymp\Community\Ghost $ghost
     *     @type \Eolymp\Community\Member\Stats $stats
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $groups
     *     @type array<\Eolymp\Community\Attribute\Value>|\Google\Protobuf\Internal\RepeatedField $attributes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * display name, readonly, users nickname, name, attribute, ghosts name or teams name
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * display name, readonly, users nickname, name, attribute, ghosts name or teams name
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 3;</code>
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
     * Generated from protobuf field <code>int32 rank = 70;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>int32 rank = 70;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rank_lower = 72;</code>
     * @return int
     */
    public function getRankLower()
    {
        return $this->rank_lower;
    }

    /**
     * Generated from protobuf field <code>int32 rank_lower = 72;</code>
     * @param int $var
     * @return $this
     */
    public function setRankLower($var)
    {
        GPBUtil::checkInt32($var);
        $this->rank_lower = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rating = 71;</code>
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Generated from protobuf field <code>int32 rating = 71;</code>
     * @param int $var
     * @return $this
     */
    public function setRating($var)
    {
        GPBUtil::checkInt32($var);
        $this->rating = $var;

        return $this;
    }

    /**
     * level from 0 (beginner) to 12 (legendary), calculated based on the user's rating
     *
     * Generated from protobuf field <code>uint32 level = 79;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * level from 0 (beginner) to 12 (legendary), calculated based on the user's rating
     *
     * Generated from protobuf field <code>uint32 level = 79;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>bool active = 10;</code>
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>bool active = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setActive($var)
    {
        GPBUtil::checkBool($var);
        $this->active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool inactive = 11;</code>
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Generated from protobuf field <code>bool inactive = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setInactive($var)
    {
        GPBUtil::checkBool($var);
        $this->inactive = $var;

        return $this;
    }

    /**
     * member profile (attributes) is missing some information
     *
     * Generated from protobuf field <code>bool incomplete = 20;</code>
     * @return bool
     */
    public function getIncomplete()
    {
        return $this->incomplete;
    }

    /**
     * member profile (attributes) is missing some information
     *
     * Generated from protobuf field <code>bool incomplete = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncomplete($var)
    {
        GPBUtil::checkBool($var);
        $this->incomplete = $var;

        return $this;
    }

    /**
     * member participates in all competitions unofficially
     *
     * Generated from protobuf field <code>bool unofficial = 30;</code>
     * @return bool
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * member participates in all competitions unofficially
     *
     * Generated from protobuf field <code>bool unofficial = 30;</code>
     * @param bool $var
     * @return $this
     */
    public function setUnofficial($var)
    {
        GPBUtil::checkBool($var);
        $this->unofficial = $var;

        return $this;
    }

    /**
     * member is secret and does not appear on anywhere (for example, an admin who performs testing)
     *
     * Generated from protobuf field <code>bool secret = 40;</code>
     * @return bool
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * member is secret and does not appear on anywhere (for example, an admin who performs testing)
     *
     * Generated from protobuf field <code>bool secret = 40;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkBool($var);
        $this->secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tier_id = 50;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tier_id;
    }

    /**
     * Generated from protobuf field <code>string tier_id = 50;</code>
     * @param string $var
     * @return $this
     */
    public function setTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tier_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fallback_tier_id = 51;</code>
     * @return string
     */
    public function getFallbackTierId()
    {
        return $this->fallback_tier_id;
    }

    /**
     * Generated from protobuf field <code>string fallback_tier_id = 51;</code>
     * @param string $var
     * @return $this
     */
    public function setFallbackTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fallback_tier_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 60;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 60;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp seated_at = 61;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSeatedAt()
    {
        return $this->seated_at;
    }

    public function hasSeatedAt()
    {
        return isset($this->seated_at);
    }

    public function clearSeatedAt()
    {
        unset($this->seated_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp seated_at = 61;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSeatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->seated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp active_at = 62;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getActiveAt()
    {
        return $this->active_at;
    }

    public function hasActiveAt()
    {
        return isset($this->active_at);
    }

    public function clearActiveAt()
    {
        unset($this->active_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp active_at = 62;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setActiveAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->active_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.User user = 100;</code>
     * @return \Eolymp\Community\User|null
     */
    public function getUser()
    {
        return $this->readOneof(100);
    }

    public function hasUser()
    {
        return $this->hasOneof(100);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.User user = 100;</code>
     * @param \Eolymp\Community\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\User::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Team team = 101;</code>
     * @return \Eolymp\Community\Team|null
     */
    public function getTeam()
    {
        return $this->readOneof(101);
    }

    public function hasTeam()
    {
        return $this->hasOneof(101);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Team team = 101;</code>
     * @param \Eolymp\Community\Team $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Team::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Ghost ghost = 102;</code>
     * @return \Eolymp\Community\Ghost|null
     */
    public function getGhost()
    {
        return $this->readOneof(102);
    }

    public function hasGhost()
    {
        return $this->hasOneof(102);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Ghost ghost = 102;</code>
     * @param \Eolymp\Community\Ghost $var
     * @return $this
     */
    public function setGhost($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Ghost::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member.Stats stats = 300;</code>
     * @return \Eolymp\Community\Member\Stats|null
     */
    public function getStats()
    {
        return $this->stats;
    }

    public function hasStats()
    {
        return isset($this->stats);
    }

    public function clearStats()
    {
        unset($this->stats);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.Member.Stats stats = 300;</code>
     * @param \Eolymp\Community\Member\Stats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\Member\Stats::class);
        $this->stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string groups = 200;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Generated from protobuf field <code>repeated string groups = 200;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->groups = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Attribute.Value attributes = 900;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.community.Attribute.Value attributes = 900;</code>
     * @param array<\Eolymp\Community\Attribute\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Community\Attribute\Value::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->whichOneof("account");
    }

}

