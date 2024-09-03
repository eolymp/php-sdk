<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/asset/asset_service.proto

namespace GPBMetadata\Eolymp\Asset;

class AssetService
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
        $pool->internalAddGeneratedFile(
            '
�
 eolymp/asset/asset_service.protoeolymp.asset"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto"�
UploadImageInput
name (	
type (	1
crop
 (2#.eolymp.asset.UploadImageInput.Crop1
size (2#.eolymp.asset.UploadImageInput.Size5
variants (2#.eolymp.asset.UploadImageInput.Size
datad (%
Size
width (
height (@
Crop
top (
right (
bottom (
left ("&
UploadImageOutput
	image_url (	";
UploadFileInput
name (	
type (	
datad ("$
UploadFileOutput
file_url (	"Z
UploadAssetInput
name (	
type (	
aliases (	
ttl (
datad ("&
UploadAssetOutput
	asset_url (	"U
StartMultipartUploadInput
name (	
type (	
aliases (	
ttl ("/
StartMultipartUploadOutput
	upload_id (	"G
UploadPartInput
	upload_id (	
part_number (
datad ("!
UploadPartOutput
token (	"�
CompleteMultipartUploadInput
	upload_id (	>
parts
 (2/.eolymp.asset.CompleteMultipartUploadInput.Partk
Part
number (
token (	
checksum_md5
 (	
checksum_sha1 (	
checksum_sha256 (	"2
CompleteMultipartUploadOutput
	asset_url (	""
ResolveAliasInput
alias (	"\'
ResolveAliasOutput
	asset_url (	2�
AssetService�
UploadImage.eolymp.asset.UploadImageInput.eolymp.asset.UploadImageOutput">��
��
asset:image:write��
��
   @��
d���"/assets/images�

UploadFile.eolymp.asset.UploadFileInput.eolymp.asset.UploadFileOutput"=��
��
asset:image:write��
��
   @��
d���"/assets/files�
UploadAsset.eolymp.asset.UploadAssetInput.eolymp.asset.UploadAssetOutput"7��
��
asset:asset:write��
��
   @��
d���	"/assets�
ResolveAlias.eolymp.asset.ResolveAliasInput .eolymp.asset.ResolveAliasOutput"C��
��
asset:asset:read��
��
   @��
d���"/resolve-asset-alias�
StartMultipartUpload\'.eolymp.asset.StartMultipartUploadInput(.eolymp.asset.StartMultipartUploadOutput"8��
��
atlas:asset:write��
��
   @��
d���
/uploads�

UploadPart.eolymp.asset.UploadPartInput.eolymp.asset.UploadPartOutput"D��
��
atlas:asset:write��
��
   A��
d���"/uploads/{upload_id}�
CompleteMultipartUpload*.eolymp.asset.CompleteMultipartUploadInput+.eolymp.asset.CompleteMultipartUploadOutput"D��
��
atlas:asset:write��
��
   A��
d���/uploads/{upload_id}B-Z+github.com/eolymp/go-sdk/eolymp/asset;assetbproto3'
        , true);

        static::$is_initialized = true;
    }
}

