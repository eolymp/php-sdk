<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/institution.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.Institution</code>
 */
class Institution extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * in english
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * in english
     *
     * Generated from protobuf field <code>string abbr = 4;</code>
     */
    protected $abbr = '';
    /**
     * in local language
     *
     * Generated from protobuf field <code>string local_name = 3;</code>
     */
    protected $local_name = '';
    /**
     * in local language
     *
     * Generated from protobuf field <code>string local_abbr = 5;</code>
     */
    protected $local_abbr = '';
    /**
     * Generated from protobuf field <code>string logo_url = 20;</code>
     */
    protected $logo_url = '';
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Governance governance = 10;</code>
     */
    protected $governance = 0;
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Level level = 11;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Type type = 12;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string country_id = 30;</code>
     */
    protected $country_id = '';
    /**
     * Generated from protobuf field <code>string region_id = 31;</code>
     */
    protected $region_id = '';
    /**
     * Generated from protobuf field <code>string address = 32;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>map<string, string> links = 41;</code>
     */
    private $links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *           in english
     *     @type string $abbr
     *           in english
     *     @type string $local_name
     *           in local language
     *     @type string $local_abbr
     *           in local language
     *     @type string $logo_url
     *     @type int $governance
     *     @type int $level
     *     @type int $type
     *     @type string $country_id
     *     @type string $region_id
     *     @type string $address
     *     @type array|\Google\Protobuf\Internal\MapField $links
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\Institution::initOnce();
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
     * in english
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * in english
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * in english
     *
     * Generated from protobuf field <code>string abbr = 4;</code>
     * @return string
     */
    public function getAbbr()
    {
        return $this->abbr;
    }

    /**
     * in english
     *
     * Generated from protobuf field <code>string abbr = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAbbr($var)
    {
        GPBUtil::checkString($var, True);
        $this->abbr = $var;

        return $this;
    }

    /**
     * in local language
     *
     * Generated from protobuf field <code>string local_name = 3;</code>
     * @return string
     */
    public function getLocalName()
    {
        return $this->local_name;
    }

    /**
     * in local language
     *
     * Generated from protobuf field <code>string local_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalName($var)
    {
        GPBUtil::checkString($var, True);
        $this->local_name = $var;

        return $this;
    }

    /**
     * in local language
     *
     * Generated from protobuf field <code>string local_abbr = 5;</code>
     * @return string
     */
    public function getLocalAbbr()
    {
        return $this->local_abbr;
    }

    /**
     * in local language
     *
     * Generated from protobuf field <code>string local_abbr = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalAbbr($var)
    {
        GPBUtil::checkString($var, True);
        $this->local_abbr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 20;</code>
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Governance governance = 10;</code>
     * @return int
     */
    public function getGovernance()
    {
        return $this->governance;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Governance governance = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setGovernance($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Taxonomy\Institution_Governance::class);
        $this->governance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Level level = 11;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Level level = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Taxonomy\Institution_Level::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Type type = 12;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.taxonomy.Institution.Type type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Taxonomy\Institution_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country_id = 30;</code>
     * @return string
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Generated from protobuf field <code>string country_id = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string region_id = 31;</code>
     * @return string
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * Generated from protobuf field <code>string region_id = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 32;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> links = 41;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Generated from protobuf field <code>map<string, string> links = 41;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->links = $arr;

        return $this;
    }

}

