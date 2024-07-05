<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest_service.proto

namespace Eolymp\Judge\ListContestsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListContestsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 9;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     */
    private $name;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp starts_at = 4;</code>
     */
    private $starts_at;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp ends_at = 5;</code>
     */
    private $ends_at;
    /**
     * deprecated, same as visibility=PUBLIC
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool public = 6;</code>
     */
    private $public;
    /**
     * PUBLIC, UNLISTED, PRIVATE
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum visibility = 7;</code>
     */
    private $visibility;
    /**
     * IOI, ICPC
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum format = 8;</code>
     */
    private $format;
    /**
     * SCHEDULED, OPEN, ACTIVE, COMPLETE, UPSOLVE
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 10;</code>
     */
    private $status;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool featured = 11;</code>
     */
    private $featured;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt year = 100;</code>
     */
    private $year;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum scale = 101;</code>
     */
    private $scale;
    /**
     * see taxonomy enumeration "contest_series"
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum series = 102;</code>
     */
    private $series;
    /**
     * 1 to 5
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt difficulty = 103;</code>
     */
    private $difficulty;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum country = 104;</code>
     */
    private $country;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum region = 105;</code>
     */
    private $region;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString city = 106;</code>
     */
    private $city;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $name
     *     @type array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $starts_at
     *     @type array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $ends_at
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $public
     *           deprecated, same as visibility=PUBLIC
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $visibility
     *           PUBLIC, UNLISTED, PRIVATE
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $format
     *           IOI, ICPC
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $status
     *           SCHEDULED, OPEN, ACTIVE, COMPLETE, UPSOLVE
     *     @type array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $featured
     *     @type array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $year
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $scale
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $series
     *           see taxonomy enumeration "contest_series"
     *     @type array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $difficulty
     *           1 to 5
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $country
     *     @type array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $region
     *     @type array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $city
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ContestService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 9;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @param array<\Eolymp\Wellknown\ExpressionID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     * @param array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp starts_at = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStartsAt()
    {
        return $this->starts_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp starts_at = 4;</code>
     * @param array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStartsAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->starts_at = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp ends_at = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndsAt()
    {
        return $this->ends_at;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionTimestamp ends_at = 5;</code>
     * @param array<\Eolymp\Wellknown\ExpressionTimestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndsAt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionTimestamp::class);
        $this->ends_at = $arr;

        return $this;
    }

    /**
     * deprecated, same as visibility=PUBLIC
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool public = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * deprecated, same as visibility=PUBLIC
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool public = 6;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPublic($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->public = $arr;

        return $this;
    }

    /**
     * PUBLIC, UNLISTED, PRIVATE
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum visibility = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * PUBLIC, UNLISTED, PRIVATE
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum visibility = 7;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVisibility($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->visibility = $arr;

        return $this;
    }

    /**
     * IOI, ICPC
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum format = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * IOI, ICPC
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum format = 8;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFormat($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->format = $arr;

        return $this;
    }

    /**
     * SCHEDULED, OPEN, ACTIVE, COMPLETE, UPSOLVE
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * SCHEDULED, OPEN, ACTIVE, COMPLETE, UPSOLVE
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 10;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool featured = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool featured = 11;</code>
     * @param array<\Eolymp\Wellknown\ExpressionBool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatured($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->featured = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt year = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt year = 100;</code>
     * @param array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYear($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->year = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum scale = 101;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum scale = 101;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScale($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->scale = $arr;

        return $this;
    }

    /**
     * see taxonomy enumeration "contest_series"
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum series = 102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * see taxonomy enumeration "contest_series"
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum series = 102;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSeries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->series = $arr;

        return $this;
    }

    /**
     * 1 to 5
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt difficulty = 103;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * 1 to 5
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionInt difficulty = 103;</code>
     * @param array<\Eolymp\Wellknown\ExpressionInt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDifficulty($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionInt::class);
        $this->difficulty = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum country = 104;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum country = 104;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountry($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->country = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum region = 105;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum region = 105;</code>
     * @param array<\Eolymp\Wellknown\ExpressionEnum>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegion($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->region = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString city = 106;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString city = 106;</code>
     * @param array<\Eolymp\Wellknown\ExpressionString>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCity($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->city = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Judge\ListContestsInput_Filter::class);

