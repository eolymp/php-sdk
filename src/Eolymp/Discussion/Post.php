<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp posted_at = 21;</code>
     */
    protected $posted_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 22;</code>
     */
    protected $updated_at = null;
    /**
     * Generated from protobuf field <code>string title = 100;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 101;</code>
     */
    protected $message = null;
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
     *     @type string $user_id
     *     @type string $member_id
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $posted_at
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type string $title
     *     @type \Eolymp\Ecm\Content $message
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $labels
     *     @type \Eolymp\Wellknown\Link[]|\Google\Protobuf\Internal\RepeatedField $links
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
     * Generated from protobuf field <code>string user_id = 10;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->readOneof(10);
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
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp posted_at = 21;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp posted_at = 21;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 22;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
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
     * Generated from protobuf field <code>string title = 100;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 100;</code>
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
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 101;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 101;</code>
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
     * Generated from protobuf field <code>repeated string labels = 120;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>repeated string labels = 120;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
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
     * @param \Eolymp\Wellknown\Link[]|\Google\Protobuf\Internal\RepeatedField $var
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

