<?php snippet('header') ?>

<div class="events-header">
    <p class="primary-heading"><?= $page->subtitle() ?></p>
    <p class="paragraph-text"><?= nl2br($page->text()) ?></p>
</div>

<div class="schedule">
    <p class="section-title"><?= $page->InfoDaysTitle() ?></p>

    <div class="infodays-wrapper">
        <?php snippet('events', [
            'icon' => 'public/images/calendar.png',
            'date' => 'May 20th',
            'location' => 'Location: Main Campus'
        ]); ?>

        <?php snippet('events', [
            'icon' => 'public/images/calendar.png',
            'date' => 'June 15th',
            'location' => 'Location: East Campus'
        ]); ?>

        <?php snippet('events', [
            'icon' => 'public/images/calendar.png',
            'date' => 'July 10th',
            'location' => 'Location: West Campus'
        ]); ?>
    </div>
    
</div>


<div class="events-img-wrapper">
    <img src="../../public/images/events-foto.png" alt="Photo of the event activities">
</div>

<div class="events-header schoolevents">
    <p class="primary-heading"><?= $page->SchoolEventsTitle() ?></p>
    <p class="paragraph-text"><?= nl2br($page->SchoolEventsText()) ?></p>
</div>

<div class="schedule">
    <p class="section-title"><?= $page->UpcomingEventsTitle() ?></p>

    <div class="infodays-wrapper">
        <?php snippet('events', [
            'icon' => 'public/images/icons/confetti.png',
            'date' => 'Fraternities/Sororities',
            'location' => 'Date: September 1st'
        ]); ?>
        <?php snippet('events', [
            'icon' => 'public/images/icons/balloon.svg',
            'date' => 'Welcome Ceremony',
            'location' => 'Date: September 10th'
        ]); ?>
        <?php snippet('events', [
            'icon' => 'public/images/icons/cap.svg',
            'date' => 'Graduation Ceremony',
            'location' => 'Date: June 30th'
        ]); ?>
    </div>
</div>

<div class="events-img-wrapper">
    <img src="../../public/images/av-foto.png" alt="AV-related event photo">
</div>

<?php snippet('footer') ?>