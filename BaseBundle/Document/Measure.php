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
     * @ReferenceOne(targetDocument="WizbiiCreator")
     */
    protected $wizbiiCreator;

    /**
     * @ReferenceOne(targetDocument="Event")
     */
    protected $event;

    /**
     * @ReferenceOne(targetDocument="Campaign")
     */
    protected $campaign;

    /**
     * @ReferenceOne(targetDocument="Application")
     */
    protected $application;
}

