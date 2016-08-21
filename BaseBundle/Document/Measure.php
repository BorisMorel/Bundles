<?php

namespace BOMO\BaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document
 */
class Measure
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $version;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $hitType;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $documentLocation;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $documentReferer;

    /**
     * @MongoDB\ReferenceOne(targetDocument="WizbiiCreator")
     */
    protected $wizbiiCreator;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $wizbiiCreatorType;    

    /**
     * @MongoDB\Field(type="string")
     */
    protected $eventCategory;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $eventAction;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $eventLabel;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $eventValue;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $tacking;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $dataSource;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $campaignName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $campaignSource;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $campaignMedium;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $campaignKeyword;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $campaignContent;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $screenName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $applicationName;    

    /**
     * @MongoDB\Field(type="string")
     */
    protected $applicationVersion;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $queueTime;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $cacheBurster;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Get version
     *
     * @return string $version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set hitType
     *
     * @param string $hitType
     * @return $this
     */
    public function setHitType($hitType)
    {
        $this->hitType = $hitType;
        return $this;
    }

    /**
     * Get hitType
     *
     * @return string $hitType
     */
    public function getHitType()
    {
        return $this->hitType;
    }

    /**
     * Set documentLocation
     *
     * @param string $documentLocation
     * @return $this
     */
    public function setDocumentLocation($documentLocation)
    {
        $this->documentLocation = $documentLocation;
        return $this;
    }

    /**
     * Get documentLocation
     *
     * @return string $documentLocation
     */
    public function getDocumentLocation()
    {
        return $this->documentLocation;
    }

    /**
     * Set documentReferer
     *
     * @param string $documentReferer
     * @return $this
     */
    public function setDocumentReferer($documentReferer)
    {
        $this->documentReferer = $documentReferer;
        return $this;
    }

    /**
     * Get documentReferer
     *
     * @return string $documentReferer
     */
    public function getDocumentReferer()
    {
        return $this->documentReferer;
    }

    /**
     * Set wizbiiCreator
     *
     * @param BOMO\BaseBundle\Document\WizbiiCreator $wizbiiCreator
     * @return $this
     */
    public function setWizbiiCreator(\BOMO\BaseBundle\Document\WizbiiCreator $wizbiiCreator)
    {
        $this->wizbiiCreator = $wizbiiCreator;
        return $this;
    }

    /**
     * Get wizbiiCreator
     *
     * @return BOMO\BaseBundle\Document\WizbiiCreator $wizbiiCreator
     */
    public function getWizbiiCreator()
    {
        return $this->wizbiiCreator;
    }

    /**
     * Set wizbiiCreatorType
     *
     * @param string $wizbiiCreatorType
     * @return $this
     */
    public function setWizbiiCreatorType($wizbiiCreatorType)
    {
        $this->wizbiiCreatorType = $wizbiiCreatorType;
        return $this;
    }

    /**
     * Get wizbiiCreatorType
     *
     * @return string $wizbiiCreatorType
     */
    public function getWizbiiCreatorType()
    {
        return $this->wizbiiCreatorType;
    }

    /**
     * Set eventCategory
     *
     * @param string $eventCategory
     * @return $this
     */
    public function setEventCategory($eventCategory)
    {
        $this->eventCategory = $eventCategory;
        return $this;
    }

    /**
     * Get eventCategory
     *
     * @return string $eventCategory
     */
    public function getEventCategory()
    {
        return $this->eventCategory;
    }

    /**
     * Set eventAction
     *
     * @param string $eventAction
     * @return $this
     */
    public function setEventAction($eventAction)
    {
        $this->eventAction = $eventAction;
        return $this;
    }

    /**
     * Get eventAction
     *
     * @return string $eventAction
     */
    public function getEventAction()
    {
        return $this->eventAction;
    }

    /**
     * Set eventLabel
     *
     * @param string $eventLabel
     * @return $this
     */
    public function setEventLabel($eventLabel)
    {
        $this->eventLabel = $eventLabel;
        return $this;
    }

    /**
     * Get eventLabel
     *
     * @return string $eventLabel
     */
    public function getEventLabel()
    {
        return $this->eventLabel;
    }

    /**
     * Set eventValue
     *
     * @param int $eventValue
     * @return $this
     */
    public function setEventValue($eventValue)
    {
        $this->eventValue = $eventValue;
        return $this;
    }

    /**
     * Get eventValue
     *
     * @return int $eventValue
     */
    public function getEventValue()
    {
        return $this->eventValue;
    }

    /**
     * Set tacking
     *
     * @param string $tacking
     * @return $this
     */
    public function setTacking($tacking)
    {
        $this->tacking = $tacking;
        return $this;
    }

    /**
     * Get tacking
     *
     * @return string $tacking
     */
    public function getTacking()
    {
        return $this->tacking;
    }

    /**
     * Set dataSource
     *
     * @param string $dataSource
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    /**
     * Get dataSource
     *
     * @return string $dataSource
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * Set campaignName
     *
     * @param string $campaignName
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * Get campaignName
     *
     * @return string $campaignName
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * Set campaignSource
     *
     * @param string $campaignSource
     * @return $this
     */
    public function setCampaignSource($campaignSource)
    {
        $this->campaignSource = $campaignSource;
        return $this;
    }

    /**
     * Get campaignSource
     *
     * @return string $campaignSource
     */
    public function getCampaignSource()
    {
        return $this->campaignSource;
    }

    /**
     * Set campaignMedium
     *
     * @param string $campaignMedium
     * @return $this
     */
    public function setCampaignMedium($campaignMedium)
    {
        $this->campaignMedium = $campaignMedium;
        return $this;
    }

    /**
     * Get campaignMedium
     *
     * @return string $campaignMedium
     */
    public function getCampaignMedium()
    {
        return $this->campaignMedium;
    }

    /**
     * Set campaignKeyword
     *
     * @param string $campaignKeyword
     * @return $this
     */
    public function setCampaignKeyword($campaignKeyword)
    {
        $this->campaignKeyword = $campaignKeyword;
        return $this;
    }

    /**
     * Get campaignKeyword
     *
     * @return string $campaignKeyword
     */
    public function getCampaignKeyword()
    {
        return $this->campaignKeyword;
    }

    /**
     * Set campaignContent
     *
     * @param string $campaignContent
     * @return $this
     */
    public function setCampaignContent($campaignContent)
    {
        $this->campaignContent = $campaignContent;
        return $this;
    }

    /**
     * Get campaignContent
     *
     * @return string $campaignContent
     */
    public function getCampaignContent()
    {
        return $this->campaignContent;
    }

    /**
     * Set screenName
     *
     * @param string $screenName
     * @return $this
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;
        return $this;
    }

    /**
     * Get screenName
     *
     * @return string $screenName
     */
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * Set applicationName
     *
     * @param string $applicationName
     * @return $this
     */
    public function setApplicationName($applicationName)
    {
        $this->applicationName = $applicationName;
        return $this;
    }

    /**
     * Get applicationName
     *
     * @return string $applicationName
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * Set applicationVersion
     *
     * @param string $applicationVersion
     * @return $this
     */
    public function setApplicationVersion($applicationVersion)
    {
        $this->applicationVersion = $applicationVersion;
        return $this;
    }

    /**
     * Get applicationVersion
     *
     * @return string $applicationVersion
     */
    public function getApplicationVersion()
    {
        return $this->applicationVersion;
    }

    /**
     * Set queueTime
     *
     * @param int $queueTime
     * @return $this
     */
    public function setQueueTime($queueTime)
    {
        $this->queueTime = $queueTime;
        return $this;
    }

    /**
     * Get queueTime
     *
     * @return int $queueTime
     */
    public function getQueueTime()
    {
        return $this->queueTime;
    }

    /**
     * Set cacheBurster
     *
     * @param int $cacheBurster
     * @return $this
     */
    public function setCacheBurster($cacheBurster)
    {
        $this->cacheBurster = $cacheBurster;
        return $this;
    }

    /**
     * Get cacheBurster
     *
     * @return int $cacheBurster
     */
    public function getCacheBurster()
    {
        return $this->cacheBurster;
    }
}
