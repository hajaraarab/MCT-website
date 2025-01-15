

<div class="contact-form" id="contact-form">

    <?php if (!empty($_SESSION['error'])): ?>
        <p class="error"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <?php if (!empty($_SESSION['success'])): ?>
        <p class="success"><?= $_SESSION['success'] ?></p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <form class="contact-us-form" id="contact-us-form" method="POST" action="/contact-form">
        <label for="name" class="sub-heading">Name</label>
        <input type="text" name="name" id="name" placeholder="Your Name" value="<?= htmlspecialchars($formData['name'] ?? '', ENT_QUOTES) ?>">

        <label for="email" class="sub-heading">Email</label>
        <input type="email" name="email" id="email" placeholder="Your Email" value="<?= htmlspecialchars($formData['email'] ?? '', ENT_QUOTES) ?>">

        <label for="message" class="sub-heading">Message</label>
        <textarea name="message" id="message" placeholder="Your message"><?= htmlspecialchars($formData['message'] ?? '', ENT_QUOTES) ?></textarea>

        <div class="buttons">
            <button type="submit" class="primary-btn">Send</button>
        </div>
    </form>
</div>