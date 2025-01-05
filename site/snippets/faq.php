<?php
// Haal de FAQ-pagina op
$faq = page('faq');

// Verkrijg de vragen en antwoorden uit de structure van het veld
$questions = $faq->questions()->toStructure();
?>

    <div class="faq">
        <p class="primary-heading">FAQ</p>
        <p>Total Questions: <?= $questions->count() ?></p> <!-- Debugging line -->

        <?php foreach ($questions as $q): ?>
            <?= $q->question()->toString() ?>
            <?= var_dump(gettype($q->question())); ?> 
            <div class="faq-item">
                <button class="faq-question"><?= $q->question()->html() ?></button>
                <div class="faq-answer" style="display: none;">
                    <p><?= $q->answer()->html() ?></p>
                </div>
        </div>
        <?php endforeach; ?>
    </div>




<script>
document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.faq-question');
    questions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    });
});

</script>