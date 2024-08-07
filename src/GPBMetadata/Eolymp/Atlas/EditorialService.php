<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/editorial_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class EditorialService
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
        \GPBMetadata\Eolymp\Atlas\Editorial::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$eolymp/atlas/editorial_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/editorial.proto"6
ListEditorialsInput
render (
versiond ("M
ListEditorialsOutput
total (&
items (2.eolymp.atlas.Editorial"O
DescribeEditorialInput
editorial_id (	
render (
versiond ("E
DescribeEditorialOutput*
	editorial (2.eolymp.atlas.Editorial"G
LookupEditorialInput
locale (	
render (
versiond ("C
LookupEditorialOutput*
	editorial (2.eolymp.atlas.Editorial"C
PreviewEditorialInput*
	editorial (2.eolymp.atlas.Editorial"D
PreviewEditorialOutput*
	editorial (2.eolymp.atlas.Editorial"B
CreateEditorialInput*
	editorial (2.eolymp.atlas.Editorial"-
CreateEditorialOutput
editorial_id (	"�
UpdateEditorialInput7
patch
 (2(.eolymp.atlas.UpdateEditorialInput.Patch
editorial_id (	*
	editorial (2.eolymp.atlas.Editorial"<
Patch
ALL 

LOCALE
CONTENT
DOWNLOAD_LINK"
UpdateEditorialOutput",
DeleteEditorialInput
editorial_id (	"
DeleteEditorialOutput2�	
EditorialService�
CreateEditorial".eolymp.atlas.CreateEditorialInput#.eolymp.atlas.CreateEditorialOutput"=��
��
atlas:problem:write��
��
  �?��
���/editorials�
UpdateEditorial".eolymp.atlas.UpdateEditorialInput#.eolymp.atlas.UpdateEditorialOutput"L��
��
atlas:problem:write��
��
  �?��
���/editorials/{editorial_id}�
DeleteEditorial".eolymp.atlas.DeleteEditorialInput#.eolymp.atlas.DeleteEditorialOutput"L��
��
atlas:problem:write��
��
  �?��
���*/editorials/{editorial_id}�
DescribeEditorial$.eolymp.atlas.DescribeEditorialInput%.eolymp.atlas.DescribeEditorialOutput"K��
��
atlas:problem:read��
��
  �A��
d���/editorials/{editorial_id}�
LookupEditorial".eolymp.atlas.LookupEditorialInput#.eolymp.atlas.LookupEditorialOutput";��
��
atlas:problem:read��
��
  �A��
d���
/editorial�
PreviewEditorial#.eolymp.atlas.PreviewEditorialInput$.eolymp.atlas.PreviewEditorialOutput"C��
��
atlas:problem:read��
��
  �A��
d���"/editorial/preview�
ListEditorials!.eolymp.atlas.ListEditorialsInput".eolymp.atlas.ListEditorialsOutput"<��
��
atlas:problem:read��
��
  �A��
d���/editorialsB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

