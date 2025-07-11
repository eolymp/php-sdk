<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/l10n/localization_service.proto

namespace Eolymp\L10n;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.l10n.ListTranslationPairsInput</code>
 */
class ListTranslationPairsInput extends \Google\Protobuf\Internal\Message
{
    /**
     * translation locale
     *
     * Generated from protobuf field <code>string locale = 1;</code>
     */
    protected $locale = '';
    /**
     * original locale, en by default
     *
     * Generated from protobuf field <code>string source = 2;</code>
     */
    protected $source = '';
    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 size = 10;</code>
     */
    protected $size = 0;
    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.l10n.ListTranslationPairsInput.Filter filters = 40;</code>
     */
    protected $filters = null;
    protected $cursor;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $locale
     *           translation locale
     *     @type string $source
     *           original locale, en by default
     *     @type int $size
     *           pagination
     *     @type int $offset
     *           starting row number
     *     @type string $after
     *           starting record
     *     @type string $before
     *           ending record
     *     @type \Eolymp\L10n\ListTranslationPairsInput\Filter $filters
     *           data filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\L10N\LocalizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * translation locale
     *
     * Generated from protobuf field <code>string locale = 1;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * translation locale
     *
     * Generated from protobuf field <code>string locale = 1;</code>
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
     * original locale, en by default
     *
     * Generated from protobuf field <code>string source = 2;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * original locale, en by default
     *
     * Generated from protobuf field <code>string source = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 size = 10;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * pagination
     *
     * Generated from protobuf field <code>int32 size = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * starting row number
     *
     * Generated from protobuf field <code>int32 offset = 11;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->readOneof(11);
    }

    public function hasOffset()
    {
        return $this->hasOneof(11);
    }

    /**
     * starting row number
     *
     * Generated from protobuf field <code>int32 offset = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * starting record
     *
     * Generated from protobuf field <code>string after = 12;</code>
     * @return string
     */
    public function getAfter()
    {
        return $this->readOneof(12);
    }

    public function hasAfter()
    {
        return $this->hasOneof(12);
    }

    /**
     * starting record
     *
     * Generated from protobuf field <code>string after = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * ending record
     *
     * Generated from protobuf field <code>string before = 13;</code>
     * @return string
     */
    public function getBefore()
    {
        return $this->readOneof(13);
    }

    public function hasBefore()
    {
        return $this->hasOneof(13);
    }

    /**
     * ending record
     *
     * Generated from protobuf field <code>string before = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.l10n.ListTranslationPairsInput.Filter filters = 40;</code>
     * @return \Eolymp\L10n\ListTranslationPairsInput\Filter|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * data filters
     *
     * Generated from protobuf field <code>.eolymp.l10n.ListTranslationPairsInput.Filter filters = 40;</code>
     * @param \Eolymp\L10n\ListTranslationPairsInput\Filter $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\L10n\ListTranslationPairsInput\Filter::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getCursor()
    {
        return $this->whichOneof("cursor");
    }

}

