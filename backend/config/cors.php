<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Allow API and auth requests
    'allowed_methods' => ['*'],  // Allow all HTTP methods (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => ['http://localhost:3000'],  // React frontend URL
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],  // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,  // reject cookies for authentication
];
