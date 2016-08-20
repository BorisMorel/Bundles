<?php

namespace BOMO\BaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

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
    protected $screenName;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $queueTime;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $cacheBurster;

    /**
     * @MongoDB\ReferenceOne(targetDocument="WizbiiCreator")
     */
    protected $wizbiiCreator;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Event")
     */
    protected $event;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Campaign")
     */
    protected $campaign;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Application")
     */
    protected $application;

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
     * Set event
     *
     * @param BOMO\BaseBundle\Document\Event $event
     * @return $this
     */
    public function setEvent(\BOMO\BaseBundle\Document\Event $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Get event
     *
     * @return BOMO\BaseBundle\Document\Event $event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set campaign
     *
     * @param BOMO\BaseBundle\Document\Campaign $campaign
     * @return $this
     */
    public function setCampaign(\BOMO\BaseBundle\Document\Campaign $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Get campaign
     *
     * @return BOMO\BaseBundle\Document\Campaign $campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set application
     *
     * @param BOMO\BaseBundle\Document\Application $application
     * @return $this
     */
    public function setApplication(\BOMO\BaseBundle\Document\Application $application)
    {
        $this->application = $application;
        return $this;
    }

    /**
     * Get application
     *
     * @return BOMO\BaseBundle\Document\Application $application
     */
    public function getApplication()
    {
        return $this->application;
    }
}
