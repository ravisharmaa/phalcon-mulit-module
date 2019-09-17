<?php

$config = require __DIR__ .'/../../../config/config.php';


$moduleConfiguration = new Phalcon\Config([
    'application' => [
        'controllersDir' => __DIR__ .'../Controllers/',
        'modelsDir' =>    __DIR__. '../Models/',
        'viewsDir' => __DIR__. '../Views/',
        'baseUri' => 'http://localhost/phalcon-web/public/config/',
        'publicUrl' => 'http://localhost/phalcon-web/public/config/'
    ]
]);

$config->merge($moduleConfiguration);

return $config;
