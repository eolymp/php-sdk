<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/editorial_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DeleteEditorialInput</code>
 */
class DeleteEditorialInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string editorial_id = 2;</code>
     */
    protected $editorial_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $editorial_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\EditorialService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string editorial_id = 2;</code>
     * @return string
     */
    public function getEditorialId()
    {
        return $this->editorial_id;
    }

    /**
     * Generated from protobuf field <code>string editorial_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEditorialId($var)
    {
        GPBUtil::checkString($var, True);
        $this->editorial_id = $var;

        return $this;
    }

}

