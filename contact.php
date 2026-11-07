<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Contact';
$activePage = '';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero section-wrap"><span class="eyebrow">SAY HELLO</span>
        <h1>Good things start<br><span>with a conversation.</span></h1>
        <p>Have an idea, a question, or an opportunity? I’d be glad to hear from you.</p>
    </section>
    <section class="section-wrap contact-layout">
        <div><span class="eyebrow">GET IN TOUCH</span>
            <h2>Let’s find a good<br><span>way to work together.</span></h2>
            <p></p><a class="contact-email" href="mailto:clarenceacuna0013@gmail.com">clarenceacuna0013@gmail.com <span>↗</span></a>
        </div>
        <div class="social-panel"><span class="eyebrow">FIND ME ONLINE</span><?php foreach ($socialLinks as $social): ?><a href="<?= htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><span><?= htmlspecialchars($social['icon'], ENT_QUOTES, 'UTF-8') ?></span><?= htmlspecialchars($social['name'], ENT_QUOTES, 'UTF-8') ?><b>↗</b></a><?php endforeach; ?></div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>