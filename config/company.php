<?php

return [
    'key' => env('COMPANY_KEY', 'default'),

    'name' => env('COMPANY_NAME', 'Equipment Company'),
    'legal_name' => env('COMPANY_LEGAL_NAME', env('COMPANY_NAME', 'Equipment Company')),
    'domain' => env('COMPANY_DOMAIN', 'example.com'),

    'email' => env('COMPANY_EMAIL', 'info@example.com'),
    'phone' => env('COMPANY_PHONE'),

    'address' => env('COMPANY_ADDRESS'),
    'city' => env('COMPANY_CITY'),
    'state' => env('COMPANY_STATE'),
    'zip' => env('COMPANY_ZIP'),

    'meta_title' => env('SEO_TITLE', env('COMPANY_NAME', 'Equipment Company')),
    'meta_description' => env('SEO_DESCRIPTION', 'Local heavy equipment sales company.'),
];
