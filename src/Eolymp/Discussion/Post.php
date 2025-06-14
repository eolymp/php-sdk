<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/post.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.Post</code>
 */
class Post extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * if set, marks this post as translation for a post specified in this field
     *
     * Generated from protobuf field <code>string source_id = 7;</code>
     */
    protected $source_id = '';
    /**
     * populated if source_id is set
     *
     * Generated from protobuf field <code>string source_url = 8;</code>
     */
    protected $source_url = '';
    /**
     * marked as draft and only shown to author
     *
     * Generated from protobuf field <code>bool draft = 3;</code>
     */
    protected $draft = false;
    /**
     * visible and available to everyone (ie. published and passed moderation)
     *
     * Generated from protobuf field <code>bool public = 4;</code>
     */
    protected $public = false;
    /**
     * marked as featured (shown on home page)
     *
     * Generated from protobuf field <code>bool featured = 9;</code>
     */
    protected $featured = false;
    /**
     * pinned on top of the page
     *
     * Generated from protobuf field <code>bool pinned = 13;</code>
     */
    protected $pinned = false;
    /**
     * moderation status
     *
     * Generated from protobuf field <code>.eolymp.discussion.Post.Moderation moderation = 5;</code>
     */
    protected $moderation = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp published_at = 21;</code>
     */
    protected $published_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 22;</code>
     */
    protected $updated_at = null;
    /**
     * optionally, post type from PostTypeService
     *
     * Generated from protobuf field <code>string type_id = 6;</code>
     */
    protected $type_id = '';
    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     */
    protected $locale = '';
    /**
     * automatically populated from content
     *
     * Generated from protobuf field <code>string title = 103;</code>
     */
    protected $title = '';
    /**
     * automatically populated from content
     *
     * Generated from protobuf field <code>string image_url = 104;</code>
     */
    protected $image_url = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 101;</code>
     */
    protected $content = null;
    /**
     * preview is generated automatically from the content
     *
     * Generated from protobuf field <code>.eolymp.discussion.Post.Preview preview = 110;</code>
     */
    protected $preview = null;
    /**
     * vote of authenticated user (+1 or -1)
     *
     * Generated from protobuf field <code>int32 vote = 12;</code>
     */
    protected $vote = 0;
    /**
     * total vote count
     *
     * Generated from protobuf field <code>int32 vote_count = 30;</code>
     */
    protected $vote_count = 0;
    /**
     * total number of replies
     *
     * Generated from protobuf field <code>int32 reply_count = 31;</code>
     */
    protected $reply_count = 0;
    /**
     * Generated from protobuf field <code>repeated string labels = 120;</code>
     */
    private $labels;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.Link links = 200;</code>
     */
    private $links;
    protected $author;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $url
     *     @type string $source_id
     *           if set, marks this post as translation for a post specified in this field
     *     @type string $source_url
     *           populated if source_id is set
     *     @type bool $draft
     *           marked as draft and only shown to author
     *     @type bool $public
     *           visible and available to everyone (ie. published and passed moderation)
     *     @type bool $featured
     *           marked as featured (shown on home page)
     *     @type bool $pinned
     *           pinned on top of the page
     *     @type int $moderation
     *           moderation status
     *     @type string $user_id
     *     @type string $member_id
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $published_at
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type string $type_id
     *           optionally, post type from PostTypeService
     *     @type string $locale
     *     @type string $title
     *           automatically populated from content
     *     @type string $image_url
     *           automatically populated from content
     *     @type \Eolymp\Ecm\Content $content
     *     @type \Eolymp\Discussion\Post\Preview $preview
     *           preview is generated automatically from the content
     *     @type int $vote
     *           vote of authenticated user (+1 or -1)
     *     @type int $vote_count
     *           total vote count
     *     @type int $reply_count
     *           total number of replies
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $labels
     *     @type array<\Eolymp\Wellknown\Link>|\Google\Protobuf\Internal\RepeatedField $links
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\Post::initOnce();
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
     * if set, marks this post as translation for a post specified in this field
     *
     * Generated from protobuf field <code>string source_id = 7;</code>
     * @return string
     */
    public function getSourceId()
    {
        return $this->source_id;
    }

    /**
     * if set, marks this post as translation for a post specified in this field
     *
     * Generated from protobuf field <code>string source_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_id = $var;

        return $this;
    }

    /**
     * populated if source_id is set
     *
     * Generated from protobuf field <code>string source_url = 8;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * populated if source_id is set
     *
     * Generated from protobuf field <code>string source_url = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_url = $var;

        return $this;
    }

    /**
     * marked as draft and only shown to author
     *
     * Generated from protobuf field <code>bool draft = 3;</code>
     * @return bool
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * marked as draft and only shown to author
     *
     * Generated from protobuf field <code>bool draft = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDraft($var)
    {
        GPBUtil::checkBool($var);
        $this->draft = $var;

        return $this;
    }

    /**
     * visible and available to everyone (ie. published and passed moderation)
     *
     * Generated from protobuf field <code>bool public = 4;</code>
     * @return bool
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * visible and available to everyone (ie. published and passed moderation)
     *
     * Generated from protobuf field <code>bool public = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setPublic($var)
    {
        GPBUtil::checkBool($var);
        $this->public = $var;

        return $this;
    }

    /**
     * marked as featured (shown on home page)
     *
     * Generated from protobuf field <code>bool featured = 9;</code>
     * @return bool
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * marked as featured (shown on home page)
     *
     * Generated from protobuf field <code>bool featured = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setFeatured($var)
    {
        GPBUtil::checkBool($var);
        $this->featured = $var;

        return $this;
    }

    /**
     * pinned on top of the page
     *
     * Generated from protobuf field <code>bool pinned = 13;</code>
     * @return bool
     */
    public function getPinned()
    {
        return $this->pinned;
    }

    /**
     * pinned on top of the page
     *
     * Generated from protobuf field <code>bool pinned = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setPinned($var)
    {
        GPBUtil::checkBool($var);
        $this->pinned = $var;

        return $this;
    }

    /**
     * moderation status
     *
     * Generated from protobuf field <code>.eolymp.discussion.Post.Moderation moderation = 5;</code>
     * @return int
     */
    public function getModeration()
    {
        return $this->moderation;
    }

    /**
     * moderation status
     *
     * Generated from protobuf field <code>.eolymp.discussion.Post.Moderation moderation = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setModeration($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Discussion\Post\Moderation::class);
        $this->moderation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 10;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->readOneof(10);
    }

    public function hasUserId()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>string user_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 11;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->readOneof(11);
    }

    public function hasMemberId()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>string member_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp published_at = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPublishedAt()
    {
        return $this->published_at;
    }

    public function hasPublishedAt()
    {
        return isset($this->published_at);
    }

    public function clearPublishedAt()
    {
        unset($this->published_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp published_at = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPublishedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->published_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 22;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function hasUpdatedAt()
    {
        return isset($this->updated_at);
    }

    public function clearUpdatedAt()
    {
        unset($this->updated_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 22;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * optionally, post type from PostTypeService
     *
     * Generated from protobuf field <code>string type_id = 6;</code>
     * @return string
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * optionally, post type from PostTypeService
     *
     * Generated from protobuf field <code>string type_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * automatically populated from content
     *
     * Generated from protobuf field <code>string title = 103;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * automatically populated from content
     *
     * Generated from protobuf field <code>string title = 103;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * automatically populated from content
     *
     * Generated from protobuf field <code>string image_url = 104;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * automatically populated from content
     *
     * Generated from protobuf field <code>string image_url = 104;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 101;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content content = 101;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->content = $var;

        return $this;
    }

    /**
     * preview is generated automatically from the content
     *
     * Generated from protobuf field <code>.eolymp.discussion.Post.Preview preview = 110;</code>
     * @return \Eolymp\Discussion\Post\Preview|null
     */
    public function getPreview()
    {
        return $this->preview;
    }

    public function hasPreview()
    {
        return isset($this->preview);
    }

    public function clearPreview()
    {
        unset($this->preview);
    }

    /**
     * preview is generated automatically from the content
     *
     * Generated from protobuf field <code>.eolymp.discussion.Post.Preview preview = 110;</code>
     * @param \Eolymp\Discussion\Post\Preview $var
     * @return $this
     */
    public function setPreview($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Post\Preview::class);
        $this->preview = $var;

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
     * Generated from protobuf field <code>int32 vote_count = 30;</code>
     * @return int
     */
    public function getVoteCount()
    {
        return $this->vote_count;
    }

    /**
     * total vote count
     *
     * Generated from protobuf field <code>int32 vote_count = 30;</code>
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
     * Generated from protobuf field <code>int32 reply_count = 31;</code>
     * @return int
     */
    public function getReplyCount()
    {
        return $this->reply_count;
    }

    /**
     * total number of replies
     *
     * Generated from protobuf field <code>int32 reply_count = 31;</code>
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
     * Generated from protobuf field <code>repeated string labels = 120;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>repeated string labels = 120;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

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

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->whichOneof("author");
    }

}

