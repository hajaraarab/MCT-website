<?php

session_start(); 

$_SESSION['success'] = 'Sended !'; 

header('Location: /#contact-form');
exit;