<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'message' => $_POST['message'] ?? '',
    ];

    if (empty($formData['name']) || empty($formData['email']) || empty($formData['message'])) 
    {
        $_SESSION['error'] = 'Please fill in all required fields';

        header('Location: /#contact-form');
        exit;
    } 
    elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) 
    {
        $_SESSION['error'] = 'Please enter a valid email address.';

        header('Location: /#contact-us');
        exit;
    } 
    else 
    {
        header('Location: /google-login');
        exit;
    }
}
