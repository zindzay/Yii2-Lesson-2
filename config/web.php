<?php
return [
'id' => 'app_catalog',
'basePath' => realpath(__DIR__ . '/../'),
'components' => [
    'request' => [
        'cookieValidationKey' => 'your secret key here',
    ],
]];