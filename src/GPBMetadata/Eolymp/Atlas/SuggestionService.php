<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/suggestion_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class SuggestionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Atlas\Suggestion::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%eolymp/atlas/suggestion_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/atlas/suggestion.protoeolymp/ecm/content.proto!eolymp/wellknown/expression.proto"Y
CreateSuggestionInput

problem_id (	,

suggestion (2.eolymp.atlas.Suggestion"/
CreateSuggestionOutput
suggestion_id (	"p
UpdateSuggestionInput

problem_id (	
suggestion_id (	,

suggestion (2.eolymp.atlas.Suggestion"
UpdateSuggestionOutput"B
DeleteSuggestionInput

problem_id (	
suggestion_id (	"
DeleteSuggestionOutput"�
ReviewSuggestionInput

problem_id (	
suggestion_id (	/
status (2.eolymp.atlas.Suggestion.Status$
comment (2.eolymp.ecm.Content"
ReviewSuggestionOutput"D
ResubmitSuggestionInput

problem_id (	
suggestion_id (	"
ResubmitSuggestionOutput"�
ListSuggestionsInput

problem_id (	
offset
 (
size (:
filters( (2).eolymp.atlas.ListSuggestionsInput.Filter�
Filter*
id (2.eolymp.wellknown.ExpressionID1
	member_id (2.eolymp.wellknown.ExpressionID0
status (2 .eolymp.wellknown.ExpressionEnum"O
ListSuggestionsOutput
total (\'
items (2.eolymp.atlas.Suggestion"D
DescribeSuggestionInput

problem_id (	
suggestion_id (	"H
DescribeSuggestionOutput,

suggestion (2.eolymp.atlas.Suggestion2�
SuggestionService�
CreateSuggestion#.eolymp.atlas.CreateSuggestionInput$.eolymp.atlas.CreateSuggestionOutput"#��
��

�#>��
���"/suggestions�
UpdateSuggestion#.eolymp.atlas.UpdateSuggestionInput$.eolymp.atlas.UpdateSuggestionOutput"3��
��

�#>��
���"/suggestions/{suggestion_id}�
ReviewSuggestion#.eolymp.atlas.ReviewSuggestionInput$.eolymp.atlas.ReviewSuggestionOutput":��
��

�#>��
���%"#/suggestions/{suggestion_id}/review�
ResubmitSuggestion%.eolymp.atlas.ResubmitSuggestionInput&.eolymp.atlas.ResubmitSuggestionOutput"<��
��

�#>��
���\'"%/suggestions/{suggestion_id}/resubmit�
DeleteSuggestion#.eolymp.atlas.DeleteSuggestionInput$.eolymp.atlas.DeleteSuggestionOutput"3��
��

�#>��
���*/suggestions/{suggestion_id}
ListSuggestions".eolymp.atlas.ListSuggestionsInput#.eolymp.atlas.ListSuggestionsOutput"#��
��
  �A��
d���/suggestions�
DescribeSuggestion%.eolymp.atlas.DescribeSuggestionInput&.eolymp.atlas.DescribeSuggestionOutput"3��
��
  �A��
d���/suggestions/{suggestion_id}B-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

