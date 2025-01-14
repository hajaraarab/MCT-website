<?php

$json = json_decode(file_get_contents(__DIR__ . '/../config/google_oauth.json'), true);

$googleLoginUrl = 'https://accounts.google.com/o/oauth2/auth?' . http_build_query([
    'client_id' => $json['web']['client_id'],
    'redirect_uri' => $json['web']['redirect_uris'][0],
    'response_type' => 'code',
    'scope' => 'https://www.googleapis.com/auth/gmail.send email profile',
    'access_type' => 'offline', // Belangrijk voor refresh token
    'prompt' => 'consent',     // Zorgt ervoor dat Google altijd een nieuw refresh token geeft
]);

header('Location: ' . $googleLoginUrl);
exit;