<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/l10n/localization_service.proto

namespace Eolymp\L10n;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.l10n.ListTranslationPairsOutput</code>
 */
class ListTranslationPairsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     */
    protected $has_more = false;
    /**
     * Generated from protobuf field <code>repeated .eolymp.l10n.TranslationPair items = 3;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type bool $has_more
     *     @type array<\Eolymp\L10n\TranslationPair>|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\L10N\LocalizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     * @return bool
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasMore($var)
    {
        GPBUtil::checkBool($var);
        $this->has_more = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.l10n.TranslationPair items = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.l10n.TranslationPair items = 3;</code>
     * @param array<\Eolymp\L10n\TranslationPair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\L10n\TranslationPair::class);
        $this->items = $arr;

        return $this;
    }

}

