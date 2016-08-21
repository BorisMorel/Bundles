<?php

namespace BOMO\BaseBundle\Util;

final class OutputError
{
    public static function getOutput($errors)
    {
        $res = array();

        if (false === is_array($errors)) {
            $res = array(
                'message' => $error
            );
        } else {
            foreach ($errors as $error) {
                array_push($res, array(
                    'message' => $error
                ));
            }
        }

        return array(
            'success' => empty($errors),
            'errors' => $res
        );
    }
}