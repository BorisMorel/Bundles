<?php

namespace BOMO\BaseBundle\Transformer;

class MeasureTransformer
{
    const DIRECT = array(
        'v' => 'version',
        't' => 'hitType',
        'dl' => 'documentLocation',
        'dr' => 'documentReferer',
        'wct' => 'wizbiiCreatorType',
        'wci' => 'wizbiiCreator.$id',
        'ec' => 'eventCategory',
        'ea' => 'eventAction',
        'el' => 'eventLabel',
        'ev' => 'eventVersion',
        'tid' => 'tracking',
        'ds' => 'dataSource',
        'cn' => 'campaignName',
        'cs' => 'campaignSource',
        'cm' => 'campaignMedium',
        'ck' => 'campaignKeyword',
        'cc' => 'campaignContent',
        'sn' => 'screenName',
        'an' => 'applicationName',
        'av' => 'applicationVersion',
        'qt' => 'queueTime',
        'z' => 'cacheBurster'             
    );

    const REVERSE = array(
        'version' => 'v',
        'hitType' => 't',
        'documentLocation' => 'dl',
        'documentReferer' => 'dr',
        'wizbiiCreatorType' => 'wct',
        'wizbiiCreator' => 'wci',
        'eventCategory' => 'ec',
        'eventAction' => 'ea',
        'eventLabel' => 'el',
        'eventVersion' => 'ev',
        'tracking' => 'tid',
        'dataSource' => 'ds',
        'campaignName' => 'cn',
        'campaignSource' => 'cs',
        'campaignMedium' => 'cm',
        'campaignKeyword' => 'ck',
        'campaignContent' => 'cc',
        'screenName' => 'sn',
        'applicationName' => 'an',
        'applicationVersion' => 'av',
        'queueTime' => 'qt',
        'cacheBurster' => 'z'             
    );

    public static function directTransform(array $ins)
    {
        $out = array();

        foreach ($ins as $key => $in) {
            if (array_key_exists($key, self::DIRECT)) {
                $out[self::DIRECT[$key]] = $in;
            }                
        }

        return $out;
    }

    public static function reverseTransform(array $ins)
    {
        $out = array();

        foreach ($ins as $key => $in) {
            if (array_key_exists($key, self::REVERSE)) {
                $out[self::REVERSE[$key]] = $in;
            }                
        }

        return $out;
    }
}