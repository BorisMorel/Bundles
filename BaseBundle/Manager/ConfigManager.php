<?php

namespace BOMO\BaseBundle\Manager;

class ConfigManager
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getConfig()
    {
        return $this->config;
    }
}