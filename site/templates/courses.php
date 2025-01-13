<?php
    // require_once kirby()->root('site') . '/helpers/db-connect.php';
    require_once kirby()->root('site') . '/helpers/db-filters.php';
    
    use Kirby\Database\Db;

    $filter = get('filter');
    $data = getCoursesPerYear($filter);

    function isActive($currentFilter, $filterValue) 
    {
        if (!$currentFilter && $filterValue === 'all') {
            return 'active';
        }
        return $currentFilter === $filterValue ? 'active' : '';
    }
?>

<?php snippet('header') ?>

<div class="courses-heading">
    <p class="primary-heading"><?= $page->title()->html() ?></p>

    <p class="subheading">First year   Second year   Third year</p>

    <div class="header-btns">
        <a href="?filter=all" class="courses-btn <?= isActive($filter, 'all') ?>">All courses</a>
        <a href="?filter=firstyear" class="courses-btn <?= isActive($filter, 'firstyear') ?>">First year</a>
        <a href="?filter=secondyear" class="courses-btn <?= isActive($filter, 'secondyear') ?>">Second year</a>
        <a href="?filter=thirdyear" class="courses-btn <?= isActive($filter, 'thirdyear') ?>">Third year</a>
        <a href="?filter=nomads" class="courses-btn <?= isActive($filter, 'nomads') ?>">Nomads</a>
    </div>

</div>

<div class="profile-filters-container">
    <div class="profile-filter">
        <button class="courses-btn" data-filter="all">All courses</button>
        <button class="courses-btn" data-filter="programming">AV</button>
        <button class="courses-btn" data-filter="secondyear">Web</button>
        <button class="courses-btn" data-filter="thirdyear">3D VFX</button>
        <button class="courses-btn" data-filter="nomads">General</button>
    </div>
</div>

<div class="study-program">
    <table class="courses-table">
        <thead>
            <tr>
                <th>Period</th>
                <th>Subject</th>
                <th class="svg-colomn"></th>
                <th>Study points</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $record): ?>
                <?php $profileName = getProfile($record->profile_id); ?>
                
                <tr>
                    <td><?= $record->period ?></td>
                    <td class="course-subject">
                        <p class="profile"><?= getProfile($record->profile_id) ?></p>
                        <p><?= $record->subject ?></p>
                    </td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </td>
                    <td class="credits"><?= $record->credits ?> Credits</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php snippet('footer') ?>
