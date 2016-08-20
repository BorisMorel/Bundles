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
}
