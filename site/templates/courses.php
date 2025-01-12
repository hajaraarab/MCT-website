<?php
    require_once kirby()->root('site') . '/helpers/db-connect.php';

    use Kirby\Database\Db;

    getDatabaseConnection();

    $filter = get('filter'); 
    $query = []; 

    if ($filter == "firstyear") {
        $query = ['year' => 1]; 
    } elseif ($filter == "secondyear") {
        $query = ['year' => 2];
    } elseif ($filter == "thirdyear") {
        $query = ['year' => 3];
    }

    $data = empty($query)
    ? Db::select('classes', '*') 
    : Db::select('classes', '*', $query);


    function isActive($currentFilter, $filterValue) {
        // Als er geen filter is ingesteld, beschouw 'all' als actief
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

<div class="profile-filter">
    <button class="courses-btn" data-filter="all">All courses</button>
    <button class="courses-btn" data-filter="programming">Programming</button>
    <button class="courses-btn" data-filter="secondyear">3D</button>
    <button class="courses-btn" data-filter="thirdyear">UX/UI</button>
    <button class="courses-btn" data-filter="nomads">AV</button>
</div>

<table>
    <thead>
        <tr>
            <th>Period</th>
            <th>Subject</th>
            <th>Study points</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $record): ?>
            <tr>
                <td><?= $record->period ?></td>
                <td><?= $record->subject ?></td>
                <td><?= $record->credits ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>