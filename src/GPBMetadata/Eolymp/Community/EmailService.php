<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/email_service.proto

namespace GPBMetadata\Eolymp\Community;

class EmailService
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
        \GPBMetadata\Eolymp\Community\EmailType::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xAF\x08\x0A\$eolymp/community/email_service.proto\x12\x10eolymp.community\x1A\"eolymp/annotations/ratelimit.proto\x1A\x1Eeolymp/annotations/scope.proto\x1A!eolymp/community/email_type.proto\x1A\x18eolymp/ecm/content.proto\"\xC1\x02\x0A\x0ESendEmailInput\x12\x11\x0A\x09member_id\x18\x01 \x01(\x09\x12\x0F\x0A\x07dry_run\x18\x14 \x01(\x08\x12\x0E\x0A\x06bcc_me\x18\x15 \x01(\x08\x12)\x0A\x04type\x18\x0A \x01(\x0E2\x1B.eolymp.community.EmailType\x12\x10\x0A\x08campaign\x18\x0F \x01(\x09\x12\x0E\x0A\x06locale\x18\x0B \x01(\x09\x12\x0F\x0A\x07subject\x18\x0C \x01(\x09\x12\$\x0A\x07content\x18\x0D \x01(\x0B2\x13.eolymp.ecm.Content\x12D\x0A\x0Aparameters\x18\x0E \x03(\x0B20.eolymp.community.SendEmailInput.ParametersEntry\x1A1\x0A\x0FParametersEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01\"%\x0A\x0FSendEmailOutput\x12\x12\x0A\x0Amessage_id\x18\x01 \x01(\x09\"\x19\x0A\x17DescribeEmailUsageInput\"H\x0A\x18DescribeEmailUsageOutput\x12\x14\x0A\x0Cdaily_emails\x18\x02 \x01(\x0D\x12\x16\x0A\x0Emonthly_emails\x18\x03 \x01(\x0D2\xE4\x02\x0A\x0CEmailService\x12\xA2\x01\x0A\x09SendEmail\x12 .eolymp.community.SendEmailInput\x1A!.eolymp.community.SendEmailOutput\"P\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A\x14\x82\xE3\x0A\x1A\x8A\xE3\x0A\x16community:member:write\x82\xD3\xE4\x93\x02\x1D\"\x1B/members/{member_id}/notify\x12\xAE\x01\x0A\x12DescribeEmailUsage\x12).eolymp.community.DescribeEmailUsageInput\x1A*.eolymp.community.DescribeEmailUsageOutput\"A\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A\x14\x82\xE3\x0A\x19\x8A\xE3\x0A\x15community:member:read\x82\xD3\xE4\x93\x02\x0F\x12\x0D/usage/emailsB5Z3github.com/eolymp/go-sdk/eolymp/community;communityb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

