<?php
require_once kirby()->root('site') . '/helpers/db-connect.php';

use Kirby\Database\Db;

getDatabaseConnection();

$data = Db::select('classes', '*');

?>

<?php snippet('header') ?>

<ul>
    <?php foreach ($data as $record): ?>
        <li>
            Jaar: <?= $record->year ?>,
            Periode: <?= $record->period ?>,
            Subject: <?= $record->subject ?>,
            Studiepunten: <?= $record->credits ?>
        </li>
    <?php endforeach ?>
</ul>

<?php snippet('footer') ?>