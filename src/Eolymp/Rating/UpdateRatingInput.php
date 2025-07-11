<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/rating/rating_service.proto

namespace Eolymp\Rating;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.rating.UpdateRatingInput</code>
 */
class UpdateRatingInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string rating_id = 1;</code>
     */
    protected $rating_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.rating.Rating rating = 2;</code>
     */
    protected $rating = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rating_id
     *     @type \Eolymp\Rating\Rating $rating
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Rating\RatingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string rating_id = 1;</code>
     * @return string
     */
    public function getRatingId()
    {
        return $this->rating_id;
    }

    /**
     * Generated from protobuf field <code>string rating_id = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.rating.Rating rating = 2;</code>
     * @return \Eolymp\Rating\Rating|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    public function hasRating()
    {
        return isset($this->rating);
    }

    public function clearRating()
    {
        unset($this->rating);
    }

    /**
     * Generated from protobuf field <code>.eolymp.rating.Rating rating = 2;</code>
     * @param \Eolymp\Rating\Rating $var
     * @return $this
     */
    public function setRating($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Rating\Rating::class);
        $this->rating = $var;

        return $this;
    }

}

