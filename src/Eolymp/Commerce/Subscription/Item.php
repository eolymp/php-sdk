<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/subscription.proto

namespace Eolymp\Commerce\Subscription;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.commerce.Subscription.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>int32 quantity = 2;</code>
     */
    protected $quantity = 0;
    /**
     * Generated from protobuf field <code>string product_id = 3;</code>
     */
    protected $product_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.commerce.Price price = 4;</code>
     */
    protected $price = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $quantity
     *     @type string $product_id
     *     @type \Eolymp\Commerce\Price $price
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Commerce\Subscription::initOnce();
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
     * Generated from protobuf field <code>int32 quantity = 2;</code>
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Generated from protobuf field <code>int32 quantity = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt32($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string product_id = 3;</code>
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Generated from protobuf field <code>string product_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.commerce.Price price = 4;</code>
     * @return \Eolymp\Commerce\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>.eolymp.commerce.Price price = 4;</code>
     * @param \Eolymp\Commerce\Price $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Commerce\Price::class);
        $this->price = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Item::class, \Eolymp\Commerce\Subscription_Item::class);

