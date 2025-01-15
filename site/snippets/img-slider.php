<?php
// Haal de variabelen op die zijn doorgegeven aan de snippet
$imagePath1 = $imagePath1 ?? null;
$imagePath2 = $imagePath2 ?? null;
$sliderId = $sliderId ?? uniqid('slider-'); // Genereer een unieke ID voor elke slider

// Controleer of de afbeeldingen bestaan
if (!$imagePath1 || !$imagePath2) {
    echo "<p>Beide afbeeldingen moeten worden opgegeven!</p>";
    return;
}
?>

<div id="<?php echo $sliderId; ?>" class="slider-wrapper">
    <div class="slider">
        <div class="slide">
            <img src="<?php echo $imagePath1; ?>" alt="Event Image 1">
        </div>
        <div class="slide">
            <img src="<?php echo $imagePath2; ?>" alt="Event Image 2">
        </div>
    </div>
    <button class="prev">Previous</button>
    <button class="next">Next</button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(`#<?php echo $sliderId; ?> .slider`);
    const slides = document.querySelectorAll(`#<?php echo $sliderId; ?> .slide`);
    let currentIndex = 0;

    function showSlide(index) {
        const offset = -index * 100;
        slider.style.transform = `translateX(${offset}%)`;
    }

    document.querySelector(`#<?php echo $sliderId; ?> .next`).addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    document.querySelector(`#<?php echo $sliderId; ?> .prev`).addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });
});
</script>