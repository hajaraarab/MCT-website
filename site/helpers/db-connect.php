<?php

use Kirby\Database\Db;

function getDatabaseConnection() {
    try {
        // Verbind met de database
        Db::connect([
            'type' => 'sqlite',
            'database' => kirby()->root() . '../site/db/studies.db',
        ]);
    } catch (Exception $e) {
        die("Database connection error: " . $e->getMessage());
    }
}
