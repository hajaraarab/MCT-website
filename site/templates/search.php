<?php snippet('header'); ?>

<div class="search-page">


    <?php if ($query = get('search')): ?>
        <h2>Search Results for "<?= esc($query) ?>"</h2>
        <ul>
            <?php
            // Voer de zoekopdracht uit
            $results = site()->search($query, 'title|text'); // Zoek in 'title' en 'text'
            ?>

            <?php if ($results->count()): ?>
                <?php foreach ($results as $result): ?>
                    <li>
                        <a href="<?= $result->url() ?>"><?= $result->title() ?></a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>No results found for "<?= esc($query) ?>".</li>
            <?php endif; ?>
        </ul>
    <?php else: ?>
        <h2>Enter a search term above to find content.</h2>
    <?php endif; ?>
</div>

<?php snippet('footer'); ?>