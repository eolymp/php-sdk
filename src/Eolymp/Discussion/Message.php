<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/message.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 5;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>string thread_url = 2;</code>
     */
    protected $thread_url = '';
    /**
     * Generated from protobuf field <code>string member_id = 3;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>string reply_to = 4;</code>
     */
    protected $reply_to = '';
    /**
     * vote of authenticated user (+1 or -1)
     *
     * Generated from protobuf field <code>int32 vote = 12;</code>
     */
    protected $vote = 0;
    /**
     * total vote count
     *
     * Generated from protobuf field <code>int32 vote_count = 10;</code>
     */
    protected $vote_count = 0;
    /**
     * total number of replies
     *
     * Generated from protobuf field <code>int32 reply_count = 11;</code>
     */
    protected $reply_count = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp posted_at = 20;</code>
     */
    protected $posted_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp edited_at = 21;</code>
     */
    protected $edited_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 22;</code>
     */
    protected $deleted_at = null;
    /**
     * Generated from protobuf field <code>int32 revision = 13;</code>
     */
    protected $revision = 0;
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 100;</code>
     */
    protected $message = null;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 200;</code>
     */
    private $links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $url
     *     @type string $thread_url
     *     @type string $member_id
     *     @type string $reply_to
     *     @type int $vote
     *           vote of authenticated user (+1 or -1)
     *     @type int $vote_count
     *           total vote count
     *     @type int $reply_count
     *           total number of replies
     *     @type \Google\Protobuf\Timestamp $posted_at
     *     @type \Google\Protobuf\Timestamp $edited_at
     *     @type \Google\Protobuf\Timestamp $deleted_at
     *     @type int $revision
     *     @type \Eolymp\Ecm\Content $message
     *     @type array<\Eolymp\Wellknown\Link>|\Google\Protobuf\Internal\RepeatedField $links
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\Message::initOnce();
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
     * Generated from protobuf field <code>string url = 5;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 5;</code>
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
     * Generated from protobuf field <code>string thread_url = 2;</code>
     * @return string
     */
    public function getThreadUrl()
    {
        return $this->thread_url;
    }

    /**
     * Generated from protobuf field <code>string thread_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setThreadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->thread_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 3;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reply_to = 4;</code>
     * @return string
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Generated from protobuf field <code>string reply_to = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setReplyTo($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply_to = $var;

        return $this;
    }

    /**
     * vote of authenticated user (+1 or -1)
     *
     * Generated from protobuf field <code>int32 vote = 12;</code>
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * vote of authenticated user (+1 or -1)
     *
     * Generated from protobuf field <code>int32 vote = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setVote($var)
    {
        GPBUtil::checkInt32($var);
        $this->vote = $var;

        return $this;
    }

    /**
     * total vote count
     *
     * Generated from protobuf field <code>int32 vote_count = 10;</code>
     * @return int
     */
    public function getVoteCount()
    {
        return $this->vote_count;
    }

    /**
     * total vote count
     *
     * Generated from protobuf field <code>int32 vote_count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setVoteCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->vote_count = $var;

        return $this;
    }

    /**
     * total number of replies
     *
     * Generated from protobuf field <code>int32 reply_count = 11;</code>
     * @return int
     */
    public function getReplyCount()
    {
        return $this->reply_count;
    }

    /**
     * total number of replies
     *
     * Generated from protobuf field <code>int32 reply_count = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setReplyCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->reply_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp posted_at = 20;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }

    public function hasPostedAt()
    {
        return isset($this->posted_at);
    }

    public function clearPostedAt()
    {
        unset($this->posted_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp posted_at = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPostedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->posted_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp edited_at = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEditedAt()
    {
        return $this->edited_at;
    }

    public function hasEditedAt()
    {
        return isset($this->edited_at);
    }

    public function clearEditedAt()
    {
        unset($this->edited_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp edited_at = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEditedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->edited_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 22;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function hasDeletedAt()
    {
        return isset($this->deleted_at);
    }

    public function clearDeletedAt()
    {
        unset($this->deleted_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 22;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deleted_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 revision = 13;</code>
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Generated from protobuf field <code>int32 revision = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkInt32($var);
        $this->revision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 100;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 100;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 200;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 200;</code>
     * @param array<\Eolymp\Wellknown\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\Link::class);
        $this->links = $arr;

        return $this;
    }

}

