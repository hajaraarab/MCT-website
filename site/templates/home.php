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

<div class="profiles">
    <div class="profiles-links">

    <?php
        $profiles = [
            [
                'icon' => '/public/images/icons/video-camera.svg',
                'alt' => 'Video Camera Icon', 
                'title' => 'AV', 
                'link' => ''
            ],
            [
                'icon' => '/public/images/icons/controller.svg',
                'alt' => 'Controller Icon',
                'title' => '3D VFX',
                'link' => ''
            ],
            [
                'icon' => '/public/images/icons/laptop.svg',
                'alt' => 'Laptop Icon',
                'title' => 'WEB',
                'link' => '/web'
            ],
            [
                'icon' => '/public/images/icons/airplane.svg',
                'alt' => 'Airplane Icon',
                'title' => 'DIGITAL NOMADS',
                'link' => '/digital-nomads'
            ],
        ];

        foreach ($profiles as $profile) {
            snippet('profile-item', $profile);
        }
        ?>

    </div>
    
    <div class="profiles-info">
        <p class="primary-heading"><?= $page->profiles_heading()->html() ?></p>
        <p class="paragraph-text"><?= $page->profiles_text()->kirbytext() ?></p>
    </div>
</div>



<div class="subject">
    <p class="primary-heading">Subject</p>

    <div class="subject-cards-container">
        <?php
        $subjects = [
            [
                'image' => '/public/images/firstyear-img.jpg', 
                'title' => 'First Year', 
                'description' => 'Discover all first year courses here !',
            ],
            [
                'image' => '/public/images/secondyear-img.png', 
                'title' => 'Second Year', 
                'description' => 'Discover all second year subjects here !',
            ],
            [
                'image' => '/public/images/thirdyear-img.jpg', 
                'title' => 'Third Year', 
                'description' => 'Discover all third year subjects here !', 
            ],
        ]; 
        foreach ($subjects as $subject) {
            snippet('subject-card', [
                'image' => $subject['image'],
                'title' => $subject['title'],
                'description' => $subject['description'],
            ]);
        }
        ?>

    </div>
</div>

<div class="discover-your-passion">
    
</div>
