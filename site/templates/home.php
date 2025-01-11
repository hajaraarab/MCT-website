<?php snippet('header') ?>

<div class="hero-image">
    <img src="/public/images/kdg-school.png" class="school-image">
</div>

<div class="about-latest-container">
    <div class="about">

        <!-- html vermeid XXS aanvallen, en zorgt ervoor dat de tekst correct wordt weergegeven in html -->
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
        <p class="primary-heading"><?= $page->profiles_title()->html() ?></p>
        <p class="paragraph-text"><?= $page->profiles_text() ?></p>
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
    <img src="/public/images/kdg-logo-zwart.png">

    <div class="info">
        <p class="title">Discover Your Passion!</p>
        <p class="description">Join us and explore the exciting world of multimedia & creative technologies.</p>
    </div>

    <a href="https://www.kdg.be/inschrijven">
        <button class="secondary-btn">Enroll</button>
    </a>
</div>

<div class="portfolio">
    
    <div class="portfolio-heading">
        <p class="primary-heading"><?= $page->portfolio_title()->html() ?></p>
        <p> <?= $page->portfolio_text()->html() ?></p>
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

<div class="faq-container">
    <?php snippet('faq') ?>
</div>

<div class="contact-us">
    <div class="contact-info">
        <p class="primary-heading">Contact us</p>
        <p class="paragraph-text">More questions, or couldn't find the anwser you were looking for in the FAQ? Contact us here!</p>
    </div>
    <div class="contact-form">
        <form class="contact-us-form">
            <label for="name">Name</label>
            <input type="text" placeholder="Your Name">

            <label for="email">Email</label>
            <input type="email" placeholder="Your Email">

            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Your message"></textarea>

            <div class="buttons">
                <a href="https://www.kdg.be/inschrijven">
                    <button class="secondary-btn">Enroll</button>
                </a>
                <a href="https://www.instagram.com/mct.kdg/">
                    <button class="primary-btn">See More</button>
                </a>
            </div>
        </form>
    </div>
</div>