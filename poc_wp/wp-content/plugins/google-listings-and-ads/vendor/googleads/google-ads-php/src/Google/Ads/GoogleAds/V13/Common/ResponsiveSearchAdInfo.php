<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A responsive search ad.
 * Responsive search ads let you create an ad that adapts to show more text, and
 * more relevant messages, to your customers. Enter multiple headlines and
 * descriptions when creating a responsive search ad, and over time, Google Ads
 * will automatically test different combinations and learn which combinations
 * perform best. By adapting your ad's content to more closely match potential
 * customers' search terms, responsive search ads may improve your campaign's
 * performance.
 * More information at https://support.google.com/google-ads/answer/7684791
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.ResponsiveSearchAdInfo</code>
 */
class ResponsiveSearchAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.AdTextAsset headlines = 1;</code>
     */
    private $headlines;
    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.AdTextAsset descriptions = 2;</code>
     */
    private $descriptions;
    /**
     * First part of text that can be appended to the URL in the ad.
     *
     * Generated from protobuf field <code>optional string path1 = 5;</code>
     */
    protected $path1 = null;
    /**
     * Second part of text that can be appended to the URL in the ad. This field
     * can only be set when `path1` is also set.
     *
     * Generated from protobuf field <code>optional string path2 = 6;</code>
     */
    protected $path2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V13\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $headlines
     *           List of text assets for headlines. When the ad serves the headlines will
     *           be selected from this list.
     *     @type array<\Google\Ads\GoogleAds\V13\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $descriptions
     *           List of text assets for descriptions. When the ad serves the descriptions
     *           will be selected from this list.
     *     @type string $path1
     *           First part of text that can be appended to the URL in the ad.
     *     @type string $path2
     *           Second part of text that can be appended to the URL in the ad. This field
     *           can only be set when `path1` is also set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.AdTextAsset headlines = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeadlines()
    {
        return $this->headlines;
    }

    /**
     * List of text assets for headlines. When the ad serves the headlines will
     * be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.AdTextAsset headlines = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V13\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeadlines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V13\Common\AdTextAsset::class);
        $this->headlines = $arr;

        return $this;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.AdTextAsset descriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * List of text assets for descriptions. When the ad serves the descriptions
     * will be selected from this list.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.AdTextAsset descriptions = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V13\Common\AdTextAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V13\Common\AdTextAsset::class);
        $this->descriptions = $arr;

        return $this;
    }

    /**
     * First part of text that can be appended to the URL in the ad.
     *
     * Generated from protobuf field <code>optional string path1 = 5;</code>
     * @return string
     */
    public function getPath1()
    {
        return isset($this->path1) ? $this->path1 : '';
    }

    public function hasPath1()
    {
        return isset($this->path1);
    }

    public function clearPath1()
    {
        unset($this->path1);
    }

    /**
     * First part of text that can be appended to the URL in the ad.
     *
     * Generated from protobuf field <code>optional string path1 = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkString($var, True);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Second part of text that can be appended to the URL in the ad. This field
     * can only be set when `path1` is also set.
     *
     * Generated from protobuf field <code>optional string path2 = 6;</code>
     * @return string
     */
    public function getPath2()
    {
        return isset($this->path2) ? $this->path2 : '';
    }

    public function hasPath2()
    {
        return isset($this->path2);
    }

    public function clearPath2()
    {
        unset($this->path2);
    }

    /**
     * Second part of text that can be appended to the URL in the ad. This field
     * can only be set when `path1` is also set.
     *
     * Generated from protobuf field <code>optional string path2 = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkString($var, True);
        $this->path2 = $var;

        return $this;
    }

}

