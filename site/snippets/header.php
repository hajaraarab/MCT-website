<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('public/css/index.css') ?>

</head>
<body>

    <header class="header">
        <!-- Dit zorgt ervoor dat het altijd naar de home pagina gaat en gaat nooit kapot gaan -->
        <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
    </header>
dd

    <nav class="menu">
        <ul>
            <!-- DIT ZORGT ERVOOR DAT ELKE LINK IN DE SITE BESTAND WORDT GEZET IN DE MENU -->
                <!-- ENKEL DE HOOFDMAPPEN NIET DE SUBMAPPEN -->
                <!-- EN DOET DE MAPPEN DIE GEEN NUMMER HEBBEN WEG -->
            <?php foreach($site->children()->listed() as $item): ?>
                <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
            <?php endforeach ?>
        </ul>
    </nav>  


    <form action="<?= url('search') ?>" method="get">
        <input type="text" name="q" placeholder="Search in site" value="">
        <button type="submit">Zoek</button>
    </form>
