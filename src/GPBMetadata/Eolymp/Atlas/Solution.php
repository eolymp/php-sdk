<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/solution.proto

namespace GPBMetadata\Eolymp\Atlas;

class Solution
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xA0\x04\x0A\x1Beolymp/atlas/solution.proto\x12\x0Ceolymp.atlas\"\xBB\x03\x0A\x08Solution\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0C\x0A\x04name\x18\x03 \x01(\x09\x12\x0E\x0A\x06secret\x18\x04 \x01(\x08\x12\x0F\x0A\x07runtime\x18\x0A \x01(\x09\x12\x0E\x0A\x06source\x18\x0B \x01(\x09\x12)\x0A\x04type\x18\x14 \x01(\x0E2\x1B.eolymp.atlas.Solution.Type\x12-\x0A\x06status\x18\x1E \x01(\x0E2\x1D.eolymp.atlas.Solution.Status\x12\x15\x0A\x0Dsubmission_id\x18\x1F \x01(\x09\"\xA8\x01\x0A\x04Type\x12\x09\x0A\x05UNSET\x10\x00\x12\x0B\x0A\x07CORRECT\x10\x01\x12\x0D\x0A\x09INCORRECT\x10\x02\x12\x10\x0A\x0CWRONG_ANSWER\x10\x03\x12\x0B\x0A\x07TIMEOUT\x10\x04\x12\x0C\x0A\x08OVERFLOW\x10\x05\x12\x17\x0A\x13TIMEOUT_OR_ACCEPTED\x10\x06\x12\x18\x0A\x14OVERFLOW_OR_ACCEPTED\x10\x07\x12\x0C\x0A\x08DONT_RUN\x10\x08\x12\x0B\x0A\x07FAILURE\x10\x09\"H\x0A\x06Status\x12\x12\x0A\x0EUNKNOWN_STATUS\x10\x00\x12\x0B\x0A\x07PENDING\x10\x09\x12\x08\x0A\x04PASS\x10\x01\x12\x08\x0A\x04FAIL\x10\x02\x12\x09\x0A\x05ERROR\x10\x03B-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

