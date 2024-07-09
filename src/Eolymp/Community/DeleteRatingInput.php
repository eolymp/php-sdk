<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/rating_service.proto

namespace Eolymp\Community;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.community.DeleteRatingInput</code>
 */
class DeleteRatingInput extends \Google\Protobuf\Internal\Message
{
    /**
     * rating point id or reference
     *
     * Generated from protobuf field <code>string rating_id = 2;</code>
     */
    protected $rating_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.community.RatingPoint point = 3;</code>
     */
    protected $point = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rating_id
     *           rating point id or reference
     *     @type \Eolymp\Community\RatingPoint $point
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Community\RatingService::initOnce();
        parent::__construct($data);
    }

    /**
     * rating point id or reference
     *
     * Generated from protobuf field <code>string rating_id = 2;</code>
     * @return string
     */
    public function getRatingId()
    {
        return $this->rating_id;
    }

    /**
     * rating point id or reference
     *
     * Generated from protobuf field <code>string rating_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRatingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rating_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.RatingPoint point = 3;</code>
     * @return \Eolymp\Community\RatingPoint|null
     */
    public function getPoint()
    {
        return $this->point;
    }

    public function hasPoint()
    {
        return isset($this->point);
    }

    public function clearPoint()
    {
        unset($this->point);
    }

    /**
     * Generated from protobuf field <code>.eolymp.community.RatingPoint point = 3;</code>
     * @param \Eolymp\Community\RatingPoint $var
     * @return $this
     */
    public function setPoint($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Community\RatingPoint::class);
        $this->point = $var;

        return $this;
    }

}

