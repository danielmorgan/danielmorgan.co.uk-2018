<?php

return [

    'baseUrl' => 'https://danielmorgan.co.uk',

    'production' => false,

    'collections' => [],

    'cache_bust' => function ($page, $filePath) {
        if ($page->production) {
            return $filePath . '?v=' . $page->version;
        }

        return $filePath;
    },

];
