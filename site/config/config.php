<?php

return [
    'debug' => true,
    'autoload' => [
        '/helpers/db-connect.php',
    ],
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'security' => 'tls',
            'auth' => true,
            'username' => 'your_email@gmail.com',
            'password' => 'your_app_password',
        ],
        'to' => 'mct.tech.kdg@gmail.com', // Voeg het ontvangende e-mailadres toe
    ],
];
