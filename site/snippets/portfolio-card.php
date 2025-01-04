<div class="subject-card">
    <img src="<?= $image ?>" alt="<?= $title ?>" class="main-img">

    <div class="subject-card-info">
        
        <div>
            <p class="subject-card-title"><?= $title ?></p>
            <p class="subject-card-description"><?= $description ?></p>
        </div>

        <div class="project-creator">
            <div class="creator-details">
                <img src="/public/images/icons/user-icon.svg" alt="Profile picture of project creator" class="project-creator-icon">                
                <p class="creator-name"><?= $name ?></p>
            </div>

            <div class="creator-actions">
                <img src="/public/images/icons/books-icon.svg" alt="Books icon" class="project-creator-icon">
                <img src="/public/images/icons/pen-icon.svg" alt="Pen icon" class="project-creator-icon">
            </div>
        </div>
    </div>
</div>