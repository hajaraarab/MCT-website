<?php

   $about = $page->find('about');
   $latestPosts = $page->find('latest-posts');
   $profileInfo = $page->find('profiles');
   $subjectInfo = $page->find('subjects');
   $discover = $page->find('discover');
   $portfolioInfo = $page->find('portfolio');
   $contact = $page->find('contact');
?>

<?php snippet('header') ?>


<!-- SECTIE -->
<div class="hero-image">
    <img src="/public/images/kdg-school.png" class="school-image">
</div>

<!-- SECTIE -->
<div class="about-latest-container">
    <div class="about">
        <!-- html vermeid XXS aanvallen, en zorgt ervoor dat de tekst correct wordt weergegeven in html -->
        <p class="primary-heading"><?= $about->title()->html() ?></p>

        <p class="paragraph-text"><?= nl2br($about->text()->kirbytext()) ?></p>
    </div>

    <div class="latest-posts">
        
        <p class="primary-heading"><?= $latestPosts->title()->html() ?></p>
        <p class="paragraph-text"><?= nl2br($latestPosts->text()->kirbytext()) ?></p>

        <a href="https://www.instagram.com/mct.kdg/">
            <button class="primary-btn">Follow us</button>
        </a>
    </div>
</div>

<!-- SECTIE -->
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
        <p class="primary-heading"><?= $profileInfo->title()->html() ?></p>
        <p class="paragraph-text"><?= nl2br($profileInfo->text()->kirbytext()) ?></p>
    </div>
</div>


<!-- SECTIE -->
<div class="subject">
    <p class="primary-heading"><?= $subjectInfo->title()->html() ?></p>

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

<!-- SECTIE -->
<div class="discover-your-passion">
    <img src="/public/images/kdg-logo-zwart.png">

    <div class="info">
        <p class="title"><?= $discover->title()->html() ?></p>
        <p class="description"><?= nl2br($discover->text()->kirbytext()) ?></p>
    </div>

    <a href="https://www.kdg.be/inschrijven">
        <button class="secondary-btn">Enroll</button>
    </a>
</div>

<!-- SECTIE -->
<div class="portfolio">
    
    <div class="portfolio-heading">
        <p class="primary-heading"><?= $portfolioInfo->title()->html() ?></p>
        <p> <?= nl2br($portfolioInfo->text()->kirbytext()) ?></p>
    </div>

    <div class="subject-cards-container">
        <?php
        $portfolios = [
            [
                'image' => '/public/images/portfolio-picture-one.png', 
                'title' => 'The Art Of UX Design', 
                'description' => '3rd Year UX/UI',
                'name' => 'Kyrenia De Loenen',
            ],
            [
                'image' => '/public/images/portfolio-picture-two.jpg', 
                'title' => 'Video Edititing Trends', 
                'description' => '3rd Year AV',
                'name' => 'Amir Akodad',
            ],
            [
                'image' => '/public/images/portfolio-picture-one.png', 
                'title' => 'The Art Of UX Design', 
                'description' => '3rd Year UX/UI',
                'name' => 'Kyrenia De Loenen',
            ],
            [
                'image' => '/public/images/portfolio-picture-two.jpg', 
                'title' => 'Video Edititing Trends', 
                'description' => '3rd Year AV',
                'name' => 'Amir Akodad',
            ],
        ]; 
        foreach ($portfolios as $portfolio) {
            snippet('portfolio-card', [
                'image' => $portfolio['image'],
                'title' => $portfolio['title'],
                'description' => $portfolio['description'],
                'name' => $portfolio['name'], 
            ]);
        }
        ?>
    </div>

    <a href="https://www.instagram.com/mct.kdg/">
        <button class="primary-btn">See More</button>
    </a>
   
</div>

<!-- SECTIE -->
<div class="faq-container">
    <?php snippet('faq') ?>
</div>

<!-- SECTIE -->
<div class="contact-us">
    <div class="contact-info">
        <p class="primary-heading"><?= $contact->title()->html() ?></p>
        <p class="paragraph-text"><?= nl2br($contact->text()->html()) ?></p>
    </div>

    <div class="contact-form">
        <form class="contact-us-form">
            <label for="name" class="sub-heading">Name</label>
            <input type="text" placeholder="Your Name">

            <label for="email" class="sub-heading">Email</label>
            <input type="email" placeholder="Your Email">

            <label for="message" class="sub-heading">Message</label>
            <textarea name="message" id="message" placeholder="Your message"></textarea>

            <div class="buttons">
                <a href="https://www.kdg.be/inschrijven">
                    <button class="secondary-btn">Undo</button>
                </a>
                <a href="https://www.instagram.com/mct.kdg/">
                    <button class="primary-btn">Send</button>
                </a>
            </div>
        </form>
    </div>
</div>

<!-- SECTIE -->
<div class="map">
    <img src="/public/images/temporary-pic.png" alt="Temporary picture">
</div>

<?php snippet('footer') ?>