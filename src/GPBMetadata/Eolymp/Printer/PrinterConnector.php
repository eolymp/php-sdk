<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer_connector.proto

namespace GPBMetadata\Eolymp\Printer;

class PrinterConnector
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Printer\Printer::initOnce();
        \GPBMetadata\Eolymp\Printer\PrinterJob::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&eolymp/printer/printer_connector.protoeolymp.printer eolymp/printer/printer_job.proto"�
PrinterConnectorClientMessageF
statuse (24.eolymp.printer.PrinterConnectorClientMessage.StatusH F
reportf (24.eolymp.printer.PrinterConnectorClientMessage.ReportH @
Report

id (	*
status (2.eolymp.printer.Job.Status8
Status.
status (2.eolymp.printer.Printer.StatusB	
message"�
PrinterConnectorServerMessageD
hellod (23.eolymp.printer.PrinterConnectorServerMessage.HelloH D
printn (23.eolymp.printer.PrinterConnectorServerMessage.PrintH B
Hello
comment (	(
printer (2.eolymp.printer.Printer)
Print 
job (2.eolymp.printer.JobB	
message2�
PrinterConnectorm
Connect-.eolymp.printer.PrinterConnectorClientMessage-.eolymp.printer.PrinterConnectorServerMessage" (0B1Z/github.com/eolymp/go-sdk/eolymp/printer;printerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

