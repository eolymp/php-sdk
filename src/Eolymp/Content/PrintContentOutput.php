<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/print_service.proto

namespace Eolymp\Content;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.content.PrintContentOutput</code>
 */
class PrintContentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string document_url = 1;</code>
     */
    protected $document_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $document_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Content\PrintService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string document_url = 1;</code>
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->document_url;
    }

    /**
     * Generated from protobuf field <code>string document_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->document_url = $var;

        return $this;
    }

}

