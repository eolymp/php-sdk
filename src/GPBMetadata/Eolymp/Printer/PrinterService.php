<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer_service.proto

namespace GPBMetadata\Eolymp\Printer;

class PrinterService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Printer\Printer::initOnce();
        \GPBMetadata\Eolymp\Printer\PrinterJob::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$eolymp/printer/printer_service.protoeolymp.printer"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/printer/printer.proto eolymp/printer/printer_job.proto!eolymp/wellknown/expression.proto">
CreatePrinterInput(
printer (2.eolymp.printer.Printer")
CreatePrinterOutput

printer_id (	"R
UpdatePrinterInput

printer_id (	(
printer (2.eolymp.printer.Printer"
UpdatePrinterOutput"(
DeletePrinterInput

printer_id (	"
DeletePrinterOutput"*
DescribePrinterInput

printer_id (	"A
DescribePrinterOutput(
printer (2.eolymp.printer.Printer"�
ListPrintersInput
size (
offset
 (
search (	9
filters( (2(.eolymp.printer.ListPrintersInput.Filter�
Filter*
id (2.eolymp.wellknown.ExpressionID0
status (2 .eolymp.wellknown.ExpressionEnum0
name (2".eolymp.wellknown.ExpressionString"K
ListPrintersOutput
total (&
items (2.eolymp.printer.Printer"G
CreatePrinterJobInput

printer_id (	
html (	H B

document"(
CreatePrinterJobOutput
job_id (	"=
DescribePrinterJobInput

printer_id (	
job_id (	"<
DescribePrinterJobOutput 
job (2.eolymp.printer.Job"�
ListPrinterJobsInput

printer_id (	
offset
 (
size (<
filters( (2+.eolymp.printer.ListPrinterJobsInput.Filterf
Filter*
id (2.eolymp.wellknown.ExpressionID0
status (2 .eolymp.wellknown.ExpressionEnum"J
ListPrinterJobsOutput
total ("
items (2.eolymp.printer.Job";
CancelPrinterJobInput

printer_id (	
job_id (	"
CancelPrinterJobOutput";
DeletePrinterJobInput

printer_id (	
job_id (	"
DeletePrinterJobOutput2�
PrinterService�
CreatePrinter".eolymp.printer.CreatePrinterInput#.eolymp.printer.CreatePrinterOutput"=��
��
  �@��
��
��
printer:printer:write���"	/printers�
UpdatePrinter".eolymp.printer.UpdatePrinterInput#.eolymp.printer.UpdatePrinterOutput"J��
��
  �@��
��
��
printer:printer:write���"/printers/{printer_id}�
DeletePrinter".eolymp.printer.DeletePrinterInput#.eolymp.printer.DeletePrinterOutput"J��
��
  �@��
��
��
printer:printer:write���*/printers/{printer_id}�
DescribePrinter$.eolymp.printer.DescribePrinterInput%.eolymp.printer.DescribePrinterOutput"I��
��
  �@��
��
��
printer:printer:read���/printers/{printer_id}�
ListPrinters!.eolymp.printer.ListPrintersInput".eolymp.printer.ListPrintersOutput"<��
��
  �@��
��
��
printer:printer:read���	/printers�
CreatePrinterJob%.eolymp.printer.CreatePrinterJobInput&.eolymp.printer.CreatePrinterJobOutput"O��
��
  �@��
��
��
printer:printer:write���"/printers/{printer_id}/jobs�
DescribePrinterJob\'.eolymp.printer.DescribePrinterJobInput(.eolymp.printer.DescribePrinterJobOutput"X��
��
  �A��
���
��
printer:printer:read���&$/printers/{printer_id}/jobs/{job_id}�
ListPrinterJobs$.eolymp.printer.ListPrinterJobsInput%.eolymp.printer.ListPrinterJobsOutput"N��
��
  �A��
d��
��
printer:printer:read���/printers/{printer_id}/jobs�
DeletePrinterJob%.eolymp.printer.DeletePrinterJobInput&.eolymp.printer.DeletePrinterJobOutput"X��
��
  �@��
2��
��
printer:printer:write���&*$/printers/{printer_id}/jobs/{job_id}B1Z/github.com/eolymp/go-sdk/eolymp/printer;printerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

