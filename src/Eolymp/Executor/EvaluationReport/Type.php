<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/evaluation_report.proto

namespace Eolymp\Executor\EvaluationReport;

use UnexpectedValueException;

/**
 * Type of the report
 *
 * Protobuf type <code>eolymp.executor.EvaluationReport.Type</code>
 */
class Type
{
    /**
     * Report without type should be ignored.
     *
     * Generated from protobuf enum <code>UNKNOWN_TYPE = 0;</code>
     */
    const UNKNOWN_TYPE = 0;
    /**
     * Update report contains information about runs, inspect runs to see their status.
     * Update report might be partial in case task was split among multiple agents.
     *
     * Generated from protobuf enum <code>TYPE_UPDATE = 1;</code>
     */
    const TYPE_UPDATE = 1;
    /**
     * Error report means agent has encountered an error and can't perform runs.
     * Errors are always related to the source code of the task, such as compilation or linting error. Detailed
     * description of the error can be found in error field (ie. output of the compiler or linter).
     *
     * Generated from protobuf enum <code>TYPE_ERROR = 2;</code>
     */
    const TYPE_ERROR = 2;
    /**
     * Failure report means agent has encountered an failure and can't perform runs.
     * Failure, unlike error, happens due to a problem with executor agent itself or task configuration, such as
     * invalid object id references or checker source does not compile. Detailed description of the failure can be
     * found in the failure field.
     *
     * Generated from protobuf enum <code>TYPE_FAILURE = 3;</code>
     */
    const TYPE_FAILURE = 3;

    private static $valueToName = [
        self::UNKNOWN_TYPE => 'UNKNOWN_TYPE',
        self::TYPE_UPDATE => 'TYPE_UPDATE',
        self::TYPE_ERROR => 'TYPE_ERROR',
        self::TYPE_FAILURE => 'TYPE_FAILURE',
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
class_alias(Type::class, \Eolymp\Executor\EvaluationReport_Type::class);

