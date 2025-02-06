<?php

$baseApiUrl = "https://" . env('SHOPIFY_API_KEY') . ":" . env('SHOPIFY_ACCESS_TOKEN') . "@" . env('SHOPIFY_DOMAIN');

return [
    'api_key' => env('SHOPIFY_API_KEY'),
    'access_token' => env('SHOPIFY_ACCESS_TOKEN'),
    'shop_url' => env('SHOPIFY_DOMAIN'),
    'base_api_url' => $baseApiUrl,
    'api' => [
        'products' => $baseApiUrl . "/products",
    ]
];
