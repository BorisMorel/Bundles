<?php

namespace BOMO\BaseBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Config extends Constraint
{
    public $message = 'This value must be lower than %value%';

    public $target;

    public function getRequiredOptions()
    {
        return array(
            'target'
        );
    }
}