<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ExportResultOutput</code>
 */
class ExportResultOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string export_url = 1;</code>
     */
    protected $export_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $export_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ScoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string export_url = 1;</code>
     * @return string
     */
    public function getExportUrl()
    {
        return $this->export_url;
    }

    /**
     * Generated from protobuf field <code>string export_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExportUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->export_url = $var;

        return $this;
    }

}

