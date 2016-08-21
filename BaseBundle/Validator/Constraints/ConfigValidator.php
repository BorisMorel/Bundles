<?php

namespace BOMO\BaseBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use BOMO\BaseBundle\Manager\ConfigManager;

class ConfigValidator extends ConstraintValidator
{
    private $configManager;

    public function __construct(ConfigManager $configManager)
    {
        $this->configManager = $configManager;
    }

    public function validate($value, Constraint $constraint)
    {
        $temp = $this->configManager->getConfig();
        $target = explode(".", $constraint->target);
        
        foreach ($target as $piece) {
            $temp = $temp[$piece];
        }
        
        if ($temp < $value) {
            $this->context
                ->buildViolation($constraint->message)
                ->setParameter('%value%', $temp)
                ->addViolation();
        }
    }    
}