<?php
    // require_once kirby()->root('site') . '/helpers/db-connect.php';
    require_once kirby()->root('site') . '/helpers/db-filters.php';
    
    use Kirby\Database\Db;

    $filter = get('filter');
    $data = [];

    // Detecteer of de filter een jaar of profiel is
    if (in_array($filter, ['firstyear', 'secondyear', 'thirdyear', 'all'])) 
    {
        // Jaarfilter toepassen
        $data = filterPerYear($filter);
    } 
    elseif (in_array($filter, ['av', 'web', '3D', 'general', 'all'])) 
    {
        // Profielfilter toepassen
        $data = filterPerProfile($filter);
    } 
    else 
    {
        // Geen geldig filter; toon standaard alle data
        $data = getClasses();
    }

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
        <a href="?filter=all" class="year-filter-btn <?= isActive($filter, 'all') ?>">All courses</a>
        <a href="?filter=firstyear" class="year-filter-btn <?= isActive($filter, 'firstyear') ?>">First year</a>
        <a href="?filter=secondyear" class="year-filter-btn <?= isActive($filter, 'secondyear') ?>">Second year</a>
        <a href="?filter=thirdyear" class="year-filter-btn <?= isActive($filter, 'thirdyear') ?>">Third year</a>
        <a href="?filter=nomads" class="year-filter-btn <?= isActive($filter, 'nomads') ?>">Nomads</a>
    </div>

</div>

<div class="profile-filters-container">
    <div class="profile-filter">
       <a href="?filter=all" class="profile-filter-btn <?= isActive($filter, 'all') ?>">All profiles</a>
       <a href="?filter=av" class="profile-filter-btn <?= isActive($filter, 'av') ?>">AV</a>
       <a href="?filter=web" class="profile-filter-btn <?= isActive($filter, 'web') ?>">Web</a>
       <a href="?filter=3D" class="profile-filter-btn <?= isActive($filter, '3D') ?>">3D VFX</a>
       <a href="?filter=general" class="profile-filter-btn <?= isActive($filter, 'general') ?>">General</a>
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
