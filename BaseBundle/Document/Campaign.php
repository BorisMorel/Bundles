<?php

namespace BOMO\BaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Campaign
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $source;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $medium;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $keyword;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $content;
}