<?php

return [

    'baseUrl' => 'https://danielmorgan.co.uk',

    'production' => false,

    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => ['-date'],
        ],
        'roadTrips' => [
            'path' => 'road-trips/{filename}',
            'sort' => ['year', 'month'],
        ],
    ],

    'cache_bust' => function ($page, $filePath) {
        return $page->production
            ? "{$filePath}?v={$page->version}"
            : "{$filePath}";
    },

    'allPhotos' => function ($page, $mediaPath) {
        $markdown = '';
        foreach (glob("source/$mediaPath/*") as $photo) {
            $url = str_replace('source', '', $photo);
            $markdown .= "[![]($url)]($url)";
        }
        return $markdown;
    }

];
