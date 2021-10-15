<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/statement.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Statement</code>
 */
class Statement extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier, assigned when statement is created. Keep empty when creating new statement.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Problem where this statement belongs. Keep empty when creating new statement.
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * Statement locale code, should consist of two lowercase latin letters.
     *
     * Generated from protobuf field <code>string locale = 3;</code>
     */
    protected $locale = '';
    /**
     * Statement title.
     *
     * Generated from protobuf field <code>string title = 4;</code>
     */
    protected $title = '';
    /**
     * Statement content. Might be defined using LaTeX, Markdown or HTML formats, see format field.
     *
     * Generated from protobuf field <code>string content = 5;</code>
     */
    protected $content = '';
    /**
     * Statement download link, allows to download statement in original format.
     *
     * Generated from protobuf field <code>string download_link = 7;</code>
     */
    protected $download_link = '';
    /**
     * Statement content format. Preferred format is LaTeX, avoid using HTML format as it is deprecated.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Statement.Format format = 6;</code>
     */
    protected $format = 0;
    /**
     * Problem author name.
     *
     * Generated from protobuf field <code>string author = 101;</code>
     */
    protected $author = '';
    /**
     * Problem source, name of the contest or olympiad where this problem was initially published.
     *
     * Generated from protobuf field <code>string source = 102;</code>
     */
    protected $source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Unique identifier, assigned when statement is created. Keep empty when creating new statement.
     *     @type string $problem_id
     *           Problem where this statement belongs. Keep empty when creating new statement.
     *     @type string $locale
     *           Statement locale code, should consist of two lowercase latin letters.
     *     @type string $title
     *           Statement title.
     *     @type string $content
     *           Statement content. Might be defined using LaTeX, Markdown or HTML formats, see format field.
     *     @type string $download_link
     *           Statement download link, allows to download statement in original format.
     *     @type int $format
     *           Statement content format. Preferred format is LaTeX, avoid using HTML format as it is deprecated.
     *     @type string $author
     *           Problem author name.
     *     @type string $source
     *           Problem source, name of the contest or olympiad where this problem was initially published.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Statement::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier, assigned when statement is created. Keep empty when creating new statement.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier, assigned when statement is created. Keep empty when creating new statement.
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
     * Problem where this statement belongs. Keep empty when creating new statement.
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Problem where this statement belongs. Keep empty when creating new statement.
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * Statement locale code, should consist of two lowercase latin letters.
     *
     * Generated from protobuf field <code>string locale = 3;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Statement locale code, should consist of two lowercase latin letters.
     *
     * Generated from protobuf field <code>string locale = 3;</code>
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
     * Statement title.
     *
     * Generated from protobuf field <code>string title = 4;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Statement title.
     *
     * Generated from protobuf field <code>string title = 4;</code>
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
     * Statement content. Might be defined using LaTeX, Markdown or HTML formats, see format field.
     *
     * Generated from protobuf field <code>string content = 5;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Statement content. Might be defined using LaTeX, Markdown or HTML formats, see format field.
     *
     * Generated from protobuf field <code>string content = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Statement download link, allows to download statement in original format.
     *
     * Generated from protobuf field <code>string download_link = 7;</code>
     * @return string
     */
    public function getDownloadLink()
    {
        return $this->download_link;
    }

    /**
     * Statement download link, allows to download statement in original format.
     *
     * Generated from protobuf field <code>string download_link = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->download_link = $var;

        return $this;
    }

    /**
     * Statement content format. Preferred format is LaTeX, avoid using HTML format as it is deprecated.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Statement.Format format = 6;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Statement content format. Preferred format is LaTeX, avoid using HTML format as it is deprecated.
     *
     * Generated from protobuf field <code>.eolymp.atlas.Statement.Format format = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Statement_Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * Problem author name.
     *
     * Generated from protobuf field <code>string author = 101;</code>
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Problem author name.
     *
     * Generated from protobuf field <code>string author = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->author = $var;

        return $this;
    }

    /**
     * Problem source, name of the contest or olympiad where this problem was initially published.
     *
     * Generated from protobuf field <code>string source = 102;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Problem source, name of the contest or olympiad where this problem was initially published.
     *
     * Generated from protobuf field <code>string source = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}

