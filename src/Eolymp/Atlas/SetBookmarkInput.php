<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/bookmark_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.SetBookmarkInput</code>
 */
class SetBookmarkInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool bookmark = 2;</code>
     */
    protected $bookmark = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $bookmark
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\BookmarkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool bookmark = 2;</code>
     * @return bool
     */
    public function getBookmark()
    {
        return $this->bookmark;
    }

    /**
     * Generated from protobuf field <code>bool bookmark = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setBookmark($var)
    {
        GPBUtil::checkBool($var);
        $this->bookmark = $var;

        return $this;
    }

}

