<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/member_user.proto

namespace GPBMetadata\Eolymp\Community;

class MemberUser
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Community\EmailType::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x8F\x05\x0A\"eolymp/community/member_user.proto\x12\x10eolymp.community\x1A\x1Fgoogle/protobuf/timestamp.proto\"\xF6\x03\x0A\x04User\x12\x0E\x0A\x06issuer\x18\x01 \x01(\x09\x12\x0F\x0A\x07subject\x18\x02 \x01(\x09\x12\x10\x0A\x08nickname\x18\x0A \x01(\x09\x12\x1F\x0A\x17nickname_change_timeout\x18\x0B \x01(\x0D\x12\x0D\x0A\x05email\x18\x14 \x01(\x09\x12\x16\x0A\x0Eemail_verified\x18\x15 \x01(\x08\x12\x18\x0A\x10email_restricted\x18\x0C \x01(\x08\x128\x0A\x13email_subscriptions\x18\x16 \x03(\x0E2\x1B.eolymp.community.EmailType\x12\x10\x0A\x08password\x18\x1E \x01(\x09\x12\x14\x0A\x0Cpassword_age\x18\x1F \x01(\x0D\x12\x0C\x0A\x04name\x18( \x01(\x09\x12\x0F\x0A\x07picture\x182 \x01(\x09\x12,\x0A\x08birthday\x18< \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x0F\x0A\x07country\x18F \x01(\x09\x12\x0C\x0A\x04city\x18I \x01(\x09\x12\x0F\x0A\x07team_id\x18d \x01(\x09\x128\x0A\x0Bpreferences\x18\xA0\x06 \x01(\x0B2\".eolymp.community.User.Preferences\x1A@\x0A\x0BPreferences\x12\x0E\x0A\x06locale\x18\x01 \x01(\x09\x12\x10\x0A\x08timezone\x18\x02 \x01(\x09\x12\x0F\x0A\x07runtime\x18\x0A \x01(\x09B5Z3github.com/eolymp/go-sdk/eolymp/community;communityb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

