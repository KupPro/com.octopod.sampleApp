<?php

return array(

    'debug' => true,

    'profiler' => false,

    'default' => array(
        'handler' => 'initial',
        'view' => 'screens/initial',
        'cache' => false,
        'orientation' => 'portrait',
        'screen' => '640x960',
    ),

    'scaleScreen' => '640x960',

    'screen' => array(
        '640x960' => array(
            'optimalWidth' => '640',
            'optimalHeight' => '960',
            'minHeight' => '810',
            'maxHeight' => '1136',
            'minWidth' => '630',
            'maxWidth' => '650',
        ),
        '320x480' => array(
            'optimalWidth' => '320',
            'optimalHeight' => '480',
            'minHeight' => '400',
            'maxHeight' => '500',
            'minWidth' => '300',
            'maxWidth' => '359',
        ),
    ),

    'font' => array(),
    'style' => array(),

);