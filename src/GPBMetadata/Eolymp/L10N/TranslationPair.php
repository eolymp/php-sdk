<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/l10n/translation_pair.proto

namespace GPBMetadata\Eolymp\L10N;

class TranslationPair
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\L10N\Term::initOnce();
        \GPBMetadata\Eolymp\L10N\Translation::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"eolymp/l10n/translation_pair.protoeolymp.l10neolymp/l10n/translation.proto"�
TranslationPair
term (2.eolymp.l10n.Term(
source (2.eolymp.l10n.Translation-
translation (2.eolymp.l10n.Translation,

suggestion (2.eolymp.l10n.TranslationB+Z)github.com/eolymp/go-sdk/eolymp/l10n;l10nbproto3'
        , true);

        static::$is_initialized = true;
    }
}

