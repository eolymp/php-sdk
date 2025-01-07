<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer_service.proto

namespace Eolymp\Printer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.printer.DescribePrinterOutput</code>
 */
class DescribePrinterOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.printer.Printer printer = 1;</code>
     */
    protected $printer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Printer\Printer $printer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Printer\PrinterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.printer.Printer printer = 1;</code>
     * @return \Eolymp\Printer\Printer|null
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    public function hasPrinter()
    {
        return isset($this->printer);
    }

    public function clearPrinter()
    {
        unset($this->printer);
    }

    /**
     * Generated from protobuf field <code>.eolymp.printer.Printer printer = 1;</code>
     * @param \Eolymp\Printer\Printer $var
     * @return $this
     */
    public function setPrinter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Printer\Printer::class);
        $this->printer = $var;

        return $this;
    }

}

