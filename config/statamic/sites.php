<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'default' => [
            'name' => config('app.name'),
            'locale' => 'en_US',
            'url' => '/',
        ],

        'another' => [
            'name' => 'another',
            'locale' => 'en_US',
            'url' => '/another/',
        ],

        'last' => [
            'name' => 'last',
            'locale' => 'en_US',
            'url' => '/last/',
        ],

    ],
];
