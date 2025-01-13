<?php

require_once kirby()->root('site') . '/helpers/db-connect.php';

use Kirby\Database\Db;

getDatabaseConnection();

/**
 * Haalt klassen op uit de database met optionele filtering op jaar.
 *
 * @param array|null $query Associatieve array met filters, bijvoorbeeld ['year' => 1].
 * @return array De resultaten van de query.
 */

function getClasses($query = null) 
{
    return empty($query)
        ? Db::select('classes', '*') 
        : Db::select('classes', '*', $query);
}