<?php

namespace BOMO\BaseBundle\Util;

final class OutputError
{
    public static function getOutput($errors)
    {
        $temp = array();

        if (false === is_array($errors)) {
            $errors = array(
                'message' => $error
            );
        } else {
            foreach ($errors as $error) {
                array_push($temp, array(
                    'message' => $error
                ));
            }

            $errors = $temp;
        }

        return array(
            'success' => empty($errors),
            'errors' => $errors
        );
    }
}