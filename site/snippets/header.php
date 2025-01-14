<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('public/css/index.css') ?>

</head>
<body>

<div class="overlay"></div>

<div class="wrapper">
    <header class="header">
        <div class="logo">
            <img src="/public/images/kdg-logo.png" class="logo-img">
            <a href="<?= $site->url() ?>" class="logo-title"><?= $site->title() ?></a>
        </div>

    <button class="menu-btn" aria-label="Toggle menu">
        <div class="hamburger-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
            </svg>
        </div>

        <div class="close-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
    </button>

    <div class="header-content">
        <nav class="menu-desktop">
            <ul>
                <?php foreach($site->children()->listed() as $item): ?>
                    <li><a href="<?= $item->url() ?>" class="<?= r($item->isActive(), 'active') ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>  

    <?php snippet('search-form') ?>

    </div>


    </header>
</div>

    <div class="menu-phone">
        <ul class="menu-items">
            <?php foreach($site->children()->listed() as $item): ?>
                <li><a href="<?= $item->url() ?>" class="<?= r($item->isActive(), 'active') ?>"><?= $item->title() ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuButton = document.querySelector('.menu-btn');
        const menu = document.querySelector('.menu-phone');
        const overlay = document.querySelector('.overlay'); 
        
        menuButton.addEventListener('click', () => {
            if(menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = "block"; 
                overlay.style.display = "block";  
            } else {
                menu.style.display = "none"; 
                overlay.style.display = "none"; 
            }
        });
    });
</script>
