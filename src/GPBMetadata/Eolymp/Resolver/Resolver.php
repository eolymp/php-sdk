<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/resolver/resolver.proto

namespace GPBMetadata\Eolymp\Resolver;

class Resolver
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        \GPBMetadata\Eolymp\Ranker\Scoreboard::initOnce();
        \GPBMetadata\Eolymp\Universe\Space::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/resolver/resolver.protoeolymp.resolver"eolymp/annotations/ratelimit.protoeolymp/judge/contest.protoeolymp/ranker/scoreboard.protoeolymp/universe/space.proto"�
Authorization�
OAuth2
	client_id (	
token_endpoint (	
authorize_endpoint (	
userinfo_endpoint (	
signout_endpoint (	"�
Record.
target (2.eolymp.resolver.Record.TargetA
Target*
type (2.eolymp.resolver.Record.Type
url (	"?
Type
UNSPECIFIED 	
SPACE
CONTEST

SCOREBOARD" 
ResolveNameInput
name (	"�
ResolveNameOutput.
target (2.eolymp.resolver.Record.Target\'
space
 (2.eolymp.universe.SpaceH (
contest (2.eolymp.judge.ContestH /

scoreboard (2.eolymp.ranker.ScoreboardH 7
oauth2 (2%.eolymp.resolver.Authorization.OAuth2HB	
targetxB
auth2�
Resolverz
ResolveName!.eolymp.resolver.ResolveNameInput".eolymp.resolver.ResolveNameOutput"$��
��
  HB��
d���/names/{name}B3Z1github.com/eolymp/go-sdk/eolymp/resolver;resolverbproto3'
        , true);

        static::$is_initialized = true;
    }
}

