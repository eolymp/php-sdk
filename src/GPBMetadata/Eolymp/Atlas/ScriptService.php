<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/script_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class ScriptService
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
        \GPBMetadata\Eolymp\Atlas\Script::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!eolymp/atlas/script_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/script.proto"9
CreateScriptInput$
script (2.eolymp.atlas.Script"\'
CreateScriptOutput
	script_id (	"�
UpdateScriptInput4
patch (2%.eolymp.atlas.UpdateScriptInput.Patch
	script_id (	$
script (2.eolymp.atlas.Script"N
Patch
ALL 
NAME

SECRET
RUNTIME

SOURCE_URL	
FILES"
UpdateScriptOutput"&
DeleteScriptInput
	script_id (	"
DeleteScriptOutput"9
DescribeScriptInput
	script_id (	
versiond ("<
DescribeScriptOutput$
script (2.eolymp.atlas.Script"#
ListScriptsInput
versiond ("G
ListScriptsOutput
total (#
items (2.eolymp.atlas.Script2�
ScriptService�
CreateScript.eolymp.atlas.CreateScriptInput .eolymp.atlas.CreateScriptOutput":��
��
atlas:problem:write��
��
  �?��
���
/scripts�
UpdateScript.eolymp.atlas.UpdateScriptInput .eolymp.atlas.UpdateScriptOutput"F��
��
atlas:problem:write��
��
  �?��
���/scripts/{script_id}�
DeleteScript.eolymp.atlas.DeleteScriptInput .eolymp.atlas.DeleteScriptOutput"F��
��
atlas:problem:write��
��
  �?��
���*/scripts/{script_id}�
DescribeScript!.eolymp.atlas.DescribeScriptInput".eolymp.atlas.DescribeScriptOutput"E��
��
atlas:problem:read��
��
  �A��
d���/scripts/{script_id}�
ListScripts.eolymp.atlas.ListScriptsInput.eolymp.atlas.ListScriptsOutput"9��
��
atlas:problem:read��
��
  �A��
d���
/scriptsB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

