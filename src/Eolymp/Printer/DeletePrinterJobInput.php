<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer_service.proto

namespace Eolymp\Printer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.printer.DeletePrinterJobInput</code>
 */
class DeletePrinterJobInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string printer_id = 1;</code>
     */
    protected $printer_id = '';
    /**
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    protected $job_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $printer_id
     *     @type string $job_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Printer\PrinterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string printer_id = 1;</code>
     * @return string
     */
    public function getPrinterId()
    {
        return $this->printer_id;
    }

    /**
     * Generated from protobuf field <code>string printer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrinterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->printer_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

}

