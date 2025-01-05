<?php

$faq = page('faq');
$questions = $faq->questions()->toStructure();

?>

<div class="faq">
    <p class="primary-heading">FAQ</p>
    
        <?php foreach ($questions as $q): ?>
            <div class="faq-item">
                <button class="faq-question">
                    <p><?= $q->question()->html() ?></p>

                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                    </svg>
                </button>

                <div class="faq-answer" style="display: none;">
                    <p><?= $q->answer()->html() ?></p>
                </div>
            </div>
        <?php endforeach; ?>
</div> 

<script>

    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {

            button.classList.toggle('active');

            const answer = button.nextElementSibling;

            if (answer.style.display === 'none' || !answer.style.display) {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';
            }
        });
    });

</script>
