<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/fragment.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.Fragment</code>
 */
class Fragment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string path = 10;</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>string locale = 11;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>string title = 12;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Node content = 51;</code>
     */
    protected $content = null;
    /**
     * Generated from protobuf field <code>repeated string labels = 100;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $path
     *     @type string $locale
     *     @type string $title
     *     @type \Eolymp\Ecm\Node $content
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $labels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\Fragment::initOnce();
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
     * Generated from protobuf field <code>string path = 10;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>string path = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locale = 11;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 11;</code>
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
     * Generated from protobuf field <code>string title = 12;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 12;</code>
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
     * Generated from protobuf field <code>.eolymp.ecm.Node content = 51;</code>
     * @return \Eolymp\Ecm\Node
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Node content = 51;</code>
     * @param \Eolymp\Ecm\Node $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Node::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string labels = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>repeated string labels = 100;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

