<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/ticket.proto

namespace GPBMetadata\Eolymp\Judge;

class Ticket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xCA\x05\x0A\x19eolymp/judge/ticket.proto\x12\x0Ceolymp.judge\x1A\x1Fgoogle/protobuf/timestamp.proto\"\xC6\x04\x0A\x06Ticket\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0Acontest_id\x18\x02 \x01(\x09\x12\x16\x0A\x0Eparticipant_id\x18\x03 \x01(\x09\x12\x11\x0A\x09member_id\x18\x04 \x01(\x09\x12+\x0A\x06status\x18\x05 \x01(\x0E2\x1B.eolymp.judge.Ticket.Status\x12\x0F\x0A\x07subject\x18\x0A \x01(\x09\x12\$\x0A\x07message\x18\x0C \x01(\x0B2\x13.eolymp.ecm.Content\x12\x13\x0A\x0Braw_message\x18\x0B \x01(\x09\x12\x0F\x0A\x07is_read\x18\x15 \x01(\x08\x12\x13\x0A\x0Breply_count\x18\x1E \x01(\x0D\x12.\x0A\x0Acreated_at\x18\x17 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12.\x0A\x0Aupdated_at\x18\x18 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07read_at\x18\x19 \x01(\x0B2\x1A.google.protobuf.Timestamp\x121\x0A\x0Dlast_reply_at\x18\x1A \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x0E\x0A\x06cursor\x18d \x01(\x09\"<\x0A\x05Extra\x12\x0C\x0A\x08NO_EXTRA\x10\x00\x12\x12\x0A\x0EMESSAGE_RENDER\x10\x01\x12\x11\x0A\x0DMESSAGE_VALUE\x10\x02\"D\x0A\x06Status\x12\x12\x0A\x0EUNKNOWN_STATUS\x10\x00\x12\x0C\x0A\x08AWAITING\x10\x01\x12\x0C\x0A\x08RESOLVED\x10\x02\x12\x0A\x0A\x06CLOSED\x10\x03B-Z+github.com/eolymp/go-sdk/eolymp/judge;judgeb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

