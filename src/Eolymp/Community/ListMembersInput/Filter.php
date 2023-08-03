<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member_service.proto

namespace Eolymp\Community\ListMembersInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.ListMembersInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * user, team or ghost
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 2;</code>
     */
    private $type;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString name = 3;</code>
     */
    private $name;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool active = 4;</code>
     */
    private $active;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool incomplete = 5;</code>
     */
    private $incomplete;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool unofficial = 6;</code>
     */
    private $unofficial;
    /**
     * find members of particular team
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID team_id = 7;</code>
     */
    private $team_id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_issuer = 101;</code>
     */
    private $user_issuer;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_subject = 102;</code>
     */
    private $user_subject;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_email = 103;</code>
     */
    private $user_email;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_name = 104;</code>
     */
    private $user_name;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $type
     *           user, team or ghost
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $name
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $active
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $incomplete
     *     @type \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $unofficial
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $team_id
     *           find members of particular team
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $user_issuer
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $user_subject
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $user_email
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $user_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\MemberService::initOnce();
        parent::__construct($data);
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
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * user, team or ghost
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * user, team or ghost
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum type = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->type = $arr;

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
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool active = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool active = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActive($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->active = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool incomplete = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncomplete()
    {
        return $this->incomplete;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool incomplete = 5;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncomplete($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->incomplete = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool unofficial = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionBool unofficial = 6;</code>
     * @param \Eolymp\Wellknown\ExpressionBool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnofficial($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionBool::class);
        $this->unofficial = $arr;

        return $this;
    }

    /**
     * find members of particular team
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID team_id = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * find members of particular team
     *
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID team_id = 7;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTeamId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->team_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_issuer = 101;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIssuer()
    {
        return $this->user_issuer;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_issuer = 101;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIssuer($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->user_issuer = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_subject = 102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserSubject()
    {
        return $this->user_subject;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_subject = 102;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserSubject($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->user_subject = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_email = 103;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_email = 103;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserEmail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->user_email = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_name = 104;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString user_name = 104;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->user_name = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\Community\ListMembersInput_Filter::class);

