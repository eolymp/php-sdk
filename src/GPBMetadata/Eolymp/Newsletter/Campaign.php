<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/newsletter/campaign.proto

namespace GPBMetadata\Eolymp\Newsletter;

class Campaign
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Community\EmailType::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC8\x05\x0A eolymp/newsletter/campaign.proto\x12\x11eolymp.newsletter\x1A\x18eolymp/ecm/content.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\"\x94\x04\x0A\x08Campaign\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12)\x0A\x04type\x18\x02 \x01(\x0E2\x1B.eolymp.community.EmailType\x12.\x0A\x0Acreated_at\x18\x14 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x0C\x0A\x04name\x18\x0A \x01(\x09\x12\x0F\x0A\x07subject\x18\x0B \x01(\x09\x12\$\x0A\x07content\x18\x0C \x01(\x0B2\x13.eolymp.ecm.Content\x12\x18\x0A\x10recipients_count\x18\x1E \x01(\x0D\x12\x15\x0A\x0Dpending_count\x18\x1F \x01(\x0D\x12\x12\x0A\x0Asent_count\x18  \x01(\x0D\x12\x13\x0A\x0Berror_count\x18! \x01(\x0D\x1As\x0A\x0BTranslation\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0E\x0A\x06locale\x18f \x01(\x09\x12\x0F\x0A\x07subject\x18g \x01(\x09\x12\$\x0A\x07content\x18h \x01(\x0B2\x13.eolymp.ecm.Content\x12\x11\x0A\x09automatic\x18i \x01(\x08\"J\x0A\x05Patch\x12\x07\x0A\x03ALL\x10\x00\x12\x08\x0A\x04TYPE\x10\x01\x12\x08\x0A\x04NAME\x10\x05\x12\x0B\x0A\x07SUBJECT\x10\x02\x12\x0B\x0A\x07CONTENT\x10\x03\x12\x0A\x0A\x06LOCALE\x10\x04\"A\x0A\x05Extra\x12\x11\x0A\x0DUNKNOWN_EXTRA\x10\x00\x12\x11\x0A\x0DCONTENT_VALUE\x10\x01\x12\x12\x0A\x0ECONTENT_RENDER\x10\x02B7Z5github.com/eolymp/go-sdk/eolymp/newsletter;newsletterb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

