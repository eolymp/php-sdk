<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer.proto

namespace GPBMetadata\Eolymp\Printer;

class Printer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/printer/printer.protoeolymp.printer"�
Printer

id (	
secret (	.
status (2.eolymp.printer.Printer.Status
name
 (	">
Status
UNKNOWN_STATUS 
OFFLINE	
READY
BUSYB1Z/github.com/eolymp/go-sdk/eolymp/printer;printerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

