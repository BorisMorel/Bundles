<?php

namespace BOMO\BaseBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class DBExists extends Constraint
{
    public $message = 'This %value% dosn\'t exists';

    public $repository;

    public $field;

    public function getRequiredOptions()
    {
        return array(
            'repository',
            'field'
        );
    }
}