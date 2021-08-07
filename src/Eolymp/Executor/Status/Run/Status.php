<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/status.proto

namespace Eolymp\Executor\Status\Run;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.executor.Status.Run.Status</code>
 */
class Status
{
    /**
     * should not be used
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * pending to be executed
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * executing (see output and stderr for partial data)
     *
     * Generated from protobuf enum <code>EXECUTING = 2;</code>
     */
    const EXECUTING = 2;
    /**
     * timeout reached (wall time usage reached)
     *
     * Generated from protobuf enum <code>TIMEOUT = 3;</code>
     */
    const TIMEOUT = 3;
    /**
     * cpu exhausted (cpu time usage reached)
     *
     * Generated from protobuf enum <code>CPU_EXHAUSTED = 4;</code>
     */
    const CPU_EXHAUSTED = 4;
    /**
     * memory limit reached
     *
     * Generated from protobuf enum <code>MEMORY_OVERFLOW = 5;</code>
     */
    const MEMORY_OVERFLOW = 5;
    /**
     * executed, but exit code was non-zero
     *
     * Generated from protobuf enum <code>RUNTIME_ERROR = 6;</code>
     */
    const RUNTIME_ERROR = 6;
    /**
     * executed (it is a final status for tasks without verifier)
     *
     * Generated from protobuf enum <code>EXECUTED = 7;</code>
     */
    const EXECUTED = 7;
    /**
     * executed and output matched answer
     *
     * Generated from protobuf enum <code>ACCEPTED = 8;</code>
     */
    const ACCEPTED = 8;
    /**
     * executed, but output didn't match answer
     *
     * Generated from protobuf enum <code>WRONG_ANSWER = 9;</code>
     */
    const WRONG_ANSWER = 9;
    /**
     * executed, but verifier returned an error during execution (use verifier_log to learn more about failure)
     *
     * Generated from protobuf enum <code>VERIFICATION_FAILURE = 10;</code>
     */
    const VERIFICATION_FAILURE = 10;
    /**
     * run won't be executed due to preconditions (overall timeout, block etc)
     *
     * Generated from protobuf enum <code>SKIPPED = 11;</code>
     */
    const SKIPPED = 11;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::PENDING => 'PENDING',
        self::EXECUTING => 'EXECUTING',
        self::TIMEOUT => 'TIMEOUT',
        self::CPU_EXHAUSTED => 'CPU_EXHAUSTED',
        self::MEMORY_OVERFLOW => 'MEMORY_OVERFLOW',
        self::RUNTIME_ERROR => 'RUNTIME_ERROR',
        self::EXECUTED => 'EXECUTED',
        self::ACCEPTED => 'ACCEPTED',
        self::WRONG_ANSWER => 'WRONG_ANSWER',
        self::VERIFICATION_FAILURE => 'VERIFICATION_FAILURE',
        self::SKIPPED => 'SKIPPED',
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
class_alias(Status::class, \Eolymp\Executor\Status_Run_Status::class);

