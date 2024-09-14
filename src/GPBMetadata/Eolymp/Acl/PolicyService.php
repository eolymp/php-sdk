<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/policy_service.proto

namespace GPBMetadata\Eolymp\Acl;

class PolicyService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Acl\Policy::initOnce();
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/acl/policy_service.proto
eolymp.acleolymp/annotations/http.proto"eolymp/annotations/ratelimit.proto!eolymp/wellknown/expression.proto"7
CreatePolicyInput"
policy (2.eolymp.acl.Policy"\'
CreatePolicyOutput
	policy_id (	"�
UpdatePolicyInput2
patch
 (2#.eolymp.acl.UpdatePolicyInput.Patch
	policy_id (	"
policy (2.eolymp.acl.Policy"&
Patch
ALL 
NAME

ALLOWS"
UpdatePolicyOutput"&
DeletePolicyInput
	policy_id (	"
DeletePolicyOutput"(
DescribePolicyInput
	policy_id (	":
DescribePolicyOutput"
policy (2.eolymp.acl.Policy"�
ListPoliciesInput
offset
 (
size (5
filters( (2$.eolymp.acl.ListPoliciesInput.Filter�
Filter
query
 (	*
id (2.eolymp.wellknown.ExpressionID1
	principal (2.eolymp.wellknown.ExpressionID0
name (2".eolymp.wellknown.ExpressionString2
resource (2 .eolymp.wellknown.ExpressionEnum"F
ListPoliciesOutput
total (!
items (2.eolymp.acl.Policy2�
PolicyServiceo
CreatePolicy.eolymp.acl.CreatePolicyInput.eolymp.acl.CreatePolicyOutput" ��
��
  �@��
���"	/policies{
UpdatePolicy.eolymp.acl.UpdatePolicyInput.eolymp.acl.UpdatePolicyOutput",��
��
  �@��
���/policies/{policy_id}{
DeletePolicy.eolymp.acl.DeletePolicyInput.eolymp.acl.DeletePolicyOutput",��
��
  �@��
���*/policies/{policy_id}�
DescribePolicy.eolymp.acl.DescribePolicyInput .eolymp.acl.DescribePolicyOutput",��
��
   A��
���/policies/{policy_id}o
ListPolicies.eolymp.acl.ListPoliciesInput.eolymp.acl.ListPoliciesOutput" ��
��
   A��
���	/policiesB)Z\'github.com/eolymp/go-sdk/eolymp/acl;aclbproto3'
        , true);

        static::$is_initialized = true;
    }
}

