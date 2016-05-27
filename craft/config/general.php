<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */



return array(
    '*' => array(
      'cpTrigger' => 'eli',
      'omitScriptNameInUrls' => true,
    ),

    'elia.dev' => array(
        // ...
        'devMode' => true,
        'environmentVariables' => array(
            //'basePath' => '/users/brandon/Sites/example.dev/public/',
            'baseUrl'  => 'http://elia.dev/',
        )
    ),

    'example.com' => array(
        // ...

        'environmentVariables' => array(
            'basePath' => '/storage/av12345/www/public_html/',
            'baseUrl'  => 'http://example.com/',
        )
    )
);
