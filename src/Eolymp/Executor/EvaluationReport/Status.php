<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/evaluation_report.proto

namespace Eolymp\Executor\EvaluationReport;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.executor.EvaluationReport.Status</code>
 */
class Status
{
    /**
     * should not be used
     *
     * Generated from protobuf enum <code>UNKNOWN_STATUS = 0;</code>
     */
    const UNKNOWN_STATUS = 0;
    /**
     * not yet picked up by agent
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * agent is provisioning the environment
     *
     * Generated from protobuf enum <code>PROVISIONING = 2;</code>
     */
    const PROVISIONING = 2;
    /**
     * agent is initializing the task
     *
     * Generated from protobuf enum <code>INITIALIZING = 3;</code>
     */
    const INITIALIZING = 3;
    /**
     * agent is evaluating the task
     *
     * Generated from protobuf enum <code>EXECUTING = 4;</code>
     */
    const EXECUTING = 4;
    /**
     * evaluation is complete
     *
     * Generated from protobuf enum <code>COMPLETE = 5;</code>
     */
    const COMPLETE = 5;
    /**
     * evaluation failed due to an error in the task
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;
    /**
     * evaluation failed due to an internal error
     *
     * Generated from protobuf enum <code>FAILED = 7;</code>
     */
    const FAILED = 7;

    private static $valueToName = [
        self::UNKNOWN_STATUS => 'UNKNOWN_STATUS',
        self::PENDING => 'PENDING',
        self::PROVISIONING => 'PROVISIONING',
        self::INITIALIZING => 'INITIALIZING',
        self::EXECUTING => 'EXECUTING',
        self::COMPLETE => 'COMPLETE',
        self::ERROR => 'ERROR',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Eolymp\Executor\EvaluationReport_Status::class);
