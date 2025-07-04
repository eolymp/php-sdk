<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/printer/printer_connector.proto

namespace Eolymp\Printer\PrinterConnectorClientMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Report the status of a job back to server
 * Only after receiving a definitive (complete or error) report the printer will be given another job
 *
 * Generated from protobuf message <code>eolymp.printer.PrinterConnectorClientMessage.Report</code>
 */
class Report extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.eolymp.printer.Job.Status status = 1;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Printer\PrinterConnector::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
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
     * Generated from protobuf field <code>.eolymp.printer.Job.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.printer.Job.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Printer\Job\Status::class);
        $this->status = $var;

        return $this;
    }

}

