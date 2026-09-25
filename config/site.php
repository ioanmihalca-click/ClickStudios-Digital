<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Page Order
    |--------------------------------------------------------------------------
    |
    | Route names of the public pages, in reading order. Drives the "03 / 05"
    | counter in the page meta bar, the "next" link in the footer, the sitemap
    | and llms.txt. Labels come from messages.menu.{name}.
    |
    */

    'pages' => ['home', 'services', 'portfolio', 'about', 'contact'],

    /*
    |--------------------------------------------------------------------------
    | Business Details
    |--------------------------------------------------------------------------
    |
    | One source for the contact page, the JSON-LD markup and the Markdown
    | versions of the pages, so name / address / phone stay consistent.
    |
    */

    'business' => [
        'name' => 'Click Studios Digital',
        'email' => 'contact@clickstudios-digital.com',
        'phone' => '+40734411115',
        'phone_display' => '+40 734 411 115',
        'street' => 'Nisiparilor 35',
        'locality' => 'Baia Mare',
        'region' => 'Maramureș',
        'postal_code' => '430122',
        'country' => 'RO',
        'latitude' => '47.6573',
        'longitude' => '23.5705',
        'social' => [
            'GitHub' => 'https://github.com/ioanmihalca-click',
            'TikTok' => 'https://www.tiktok.com/@clickstudiosdigital',
            'YouTube' => 'https://www.youtube.com/@clickstudiosdigital',
        ],
    ],

];
