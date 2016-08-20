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
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return string $source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set medium
     *
     * @param string $medium
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * Get medium
     *
     * @return string $medium
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Get keyword
     *
     * @return string $keyword
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }
}
