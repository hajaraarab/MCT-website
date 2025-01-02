<?php snippet('header') ?>

<div class="hero-image">
    <img src="/public/images/kdg-school.png" class="school-image">
</div>

<div class="about-latest-container">
    <div class="about">

        <!-- ->html vermeid XXS aanvallen, en zorgt ervoor dat de tekst correct wordt weergegeven in html -->
        <p class="primary-heading"><?= $page->about_title()->html() ?></p>

        <p class="paragraph-text"><?= nl2br($page->about_text()->html()) ?></p>
    </div>

    <div class="latest-posts">
        
        <p class="primary-heading"><?= $page->last_post_title()->html() ?></p>
        <p class="paragraph-text"><?= nl2br($page->last_post_text()->html()) ?></p>

        <a href="https://www.instagram.com/mct.kdg/">
            <button class="primary-btn">Follow us</button>
        </a>
    </div>
</div>