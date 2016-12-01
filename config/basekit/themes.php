<?php

$config = [
	'BaseKitThemeSmarty' => [

	],
	// set auth flash element to use bootstrap ui helper
	'Auth' => [
        'flash' => [
            'element' => 'error',
            'key' => 'auth'
        ]
    ]
];
return $config;
