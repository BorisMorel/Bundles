<?php

namespace BOMO\BaseBundle\Util;

class FormError
{
    public static function getErrors(\Symfony\Component\Form\Form $form)
    {
        $errors = array();

        foreach ($form->getErrors() as $error) {
            $property = preg_replace('/^[^\.]+\./', '', $error->getCause()->getPropertyPath());
            $errors[$property] = sprintf('[%s] %s', $property, $error->getMessage());
        }

        foreach ($form->all() as $key => $child) {
            if ($error = self::getErrors($child)) {
                $errors = array_merge($errors, $error);
            }
        }
        
        return $errors;
    }
}
