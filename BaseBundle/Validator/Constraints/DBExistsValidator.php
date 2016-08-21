<?php

namespace BOMO\BaseBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class DBExistsValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value !== 'toto') {
            $this->context
                ->buildViolation($constraint->message)
                ->setParameter('%value%', $value)
                ->addViolation();
        }
    }    
}