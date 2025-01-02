<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('public/css/index.css') ?>

</head>
<body>

    <div class="wrapper">
        <header class="header">

            <div class="logo">
                <img src="/public/images/kdg-logo.png" class="logo-img">
                <a href="<?= $site->url() ?>" class="logo-title"><?= $site->title() ?></a>
            </div>


            <div class="header-content">
                <nav class="menu">
                    <ul>
                        <?php foreach($site->children()->listed() as $item): ?>
                            <li><a href="<?= $item->url() ?>" class="<?= r($item->isActive(), 'active') ?>"><?= $item->title() ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </nav>  


                <form action="" method="get" class="search">
                    <input type="text" name="search" placeholder="Search in site" value="">
                    
                    <button type="submit" class="search-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
            </div>

        </header>
    </div>