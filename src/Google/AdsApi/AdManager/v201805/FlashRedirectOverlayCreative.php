<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FlashRedirectOverlayCreative extends \Google\AdsApi\AdManager\v201805\BaseFlashRedirectCreative
{

    /**
     * @var int[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     */
    protected $trackingUrls = null;

    /**
     * @var string $customParameters
     */
    protected $customParameters = null;

    /**
     * @var string $apiFramework
     */
    protected $apiFramework = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\Size $flashAssetSize
     */
    protected $flashAssetSize = null;

    /**
     * @var string $vastPreviewUrl
     */
    protected $vastPreviewUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201805\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201805\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201805\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201805\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param string $flashUrl
     * @param string $fallbackUrl
     * @param string $fallbackPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param int[] $companionCreativeIds
     * @param \Google\AdsApi\AdManager\v201805\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param string $customParameters
     * @param string $apiFramework
     * @param int $duration
     * @param \Google\AdsApi\AdManager\v201805\Size $flashAssetSize
     * @param string $vastPreviewUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $flashUrl = null, $fallbackUrl = null, $fallbackPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, array $companionCreativeIds = null, array $trackingUrls = null, $customParameters = null, $apiFramework = null, $duration = null, $flashAssetSize = null, $vastPreviewUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $flashUrl, $fallbackUrl, $fallbackPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->apiFramework = $apiFramework;
      $this->duration = $duration;
      $this->flashAssetSize = $flashAssetSize;
      $this->vastPreviewUrl = $vastPreviewUrl;
    }

    /**
     * @return int[]
     */
    public function getCompanionCreativeIds()
    {
      return $this->companionCreativeIds;
    }

    /**
     * @param int[]|null $companionCreativeIds
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setCompanionCreativeIds(array $companionCreativeIds = null)
    {
      $this->companionCreativeIds = $companionCreativeIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\ConversionEvent_TrackingUrlsMapEntry[]
     */
    public function getTrackingUrls()
    {
      return $this->trackingUrls;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\ConversionEvent_TrackingUrlsMapEntry[]|null $trackingUrls
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setTrackingUrls(array $trackingUrls = null)
    {
      $this->trackingUrls = $trackingUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomParameters()
    {
      return $this->customParameters;
    }

    /**
     * @param string $customParameters
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setCustomParameters($customParameters)
    {
      $this->customParameters = $customParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getApiFramework()
    {
      return $this->apiFramework;
    }

    /**
     * @param string $apiFramework
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setApiFramework($apiFramework)
    {
      $this->apiFramework = $apiFramework;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param int $duration
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\Size
     */
    public function getFlashAssetSize()
    {
      return $this->flashAssetSize;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\Size $flashAssetSize
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setFlashAssetSize($flashAssetSize)
    {
      $this->flashAssetSize = $flashAssetSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getVastPreviewUrl()
    {
      return $this->vastPreviewUrl;
    }

    /**
     * @param string $vastPreviewUrl
     * @return \Google\AdsApi\AdManager\v201805\FlashRedirectOverlayCreative
     */
    public function setVastPreviewUrl($vastPreviewUrl)
    {
      $this->vastPreviewUrl = $vastPreviewUrl;
      return $this;
    }

}
