<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/l10n/localization_service.proto

namespace Eolymp\L10n;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.l10n.RestoreTermInput</code>
 */
class RestoreTermInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string term_id = 1;</code>
     */
    protected $term_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $term_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\L10N\LocalizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string term_id = 1;</code>
     * @return string
     */
    public function getTermId()
    {
        return $this->term_id;
    }

    /**
     * Generated from protobuf field <code>string term_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTermId($var)
    {
        GPBUtil::checkString($var, True);
        $this->term_id = $var;

        return $this;
    }

}

