<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/taxonomy/geography_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.DescribeCountryOutput</code>
 */
class DescribeCountryOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Country country = 1;</code>
     */
    protected $country = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Taxonomy\Country $country
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\GeographyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Country country = 1;</code>
     * @return \Eolymp\Taxonomy\Country|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    public function hasCountry()
    {
        return isset($this->country);
    }

    public function clearCountry()
    {
        unset($this->country);
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Country country = 1;</code>
     * @param \Eolymp\Taxonomy\Country $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Taxonomy\Country::class);
        $this->country = $var;

        return $this;
    }

}

