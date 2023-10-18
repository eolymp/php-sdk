<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/enum_service.proto

namespace Eolymp\Taxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.taxonomy.ListTranslationsOutput</code>
 */
class ListTranslationsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.Value.Translation items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type \Eolymp\Taxonomy\Value\Translation[]|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Taxonomy\EnumService::initOnce();
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
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.Value.Translation items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.taxonomy.Value.Translation items = 2;</code>
     * @param \Eolymp\Taxonomy\Value\Translation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Taxonomy\Value\Translation::class);
        $this->items = $arr;

        return $this;
    }

}

