<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/slot.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class Slot
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/ads/googleads/v8/enums/slot.protogoogle.ads.googleads.v8.enums"�
SlotEnum"�
Slot
UNSPECIFIED 
UNKNOWN
SEARCH_SIDE

SEARCH_TOP
SEARCH_OTHER
CONTENT
SEARCH_PARTNER_TOP
SEARCH_PARTNER_OTHER	
MIXEDB�
!com.google.ads.googleads.v8.enumsB	SlotProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

