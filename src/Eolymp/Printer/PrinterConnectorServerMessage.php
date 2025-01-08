<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer_connector.proto

namespace Eolymp\Printer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.printer.PrinterConnectorServerMessage</code>
 */
class PrinterConnectorServerMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    protected $message;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Eolymp\Printer\PrinterConnectorServerMessage\Hello $hello
     *     @type \Eolymp\Printer\PrinterConnectorServerMessage\PBPrint $print
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Printer\PrinterConnector::initOnce();
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
     * Generated from protobuf field <code>.eolymp.printer.PrinterConnectorServerMessage.Hello hello = 100;</code>
     * @return \Eolymp\Printer\PrinterConnectorServerMessage\Hello|null
     */
    public function getHello()
    {
        return $this->readOneof(100);
    }

    public function hasHello()
    {
        return $this->hasOneof(100);
    }

    /**
     * Generated from protobuf field <code>.eolymp.printer.PrinterConnectorServerMessage.Hello hello = 100;</code>
     * @param \Eolymp\Printer\PrinterConnectorServerMessage\Hello $var
     * @return $this
     */
    public function setHello($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Printer\PrinterConnectorServerMessage\Hello::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.printer.PrinterConnectorServerMessage.Print print = 110;</code>
     * @return \Eolymp\Printer\PrinterConnectorServerMessage\PBPrint|null
     */
    public function getPrint()
    {
        return $this->readOneof(110);
    }

    public function hasPrint()
    {
        return $this->hasOneof(110);
    }

    /**
     * Generated from protobuf field <code>.eolymp.printer.PrinterConnectorServerMessage.Print print = 110;</code>
     * @param \Eolymp\Printer\PrinterConnectorServerMessage\PBPrint $var
     * @return $this
     */
    public function setPrint($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Printer\PrinterConnectorServerMessage\PBPrint::class);
        $this->writeOneof(110, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->whichOneof("message");
    }

}

