<?php

return [

    'baseUrl' => 'https://danielmorgan.co.uk',

    'production' => false,

    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => ['-date'],
        ],
    ],

    'cache_bust' => function ($page, $filePath) {
        return $page->production
            ? "{$filePath}?v={$page->version}"
            : "{$filePath}";
    },

];
