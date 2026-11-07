<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'About';
$activePage = 'about';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero section-wrap"><span class="eyebrow">A LITTLE CONTEXT</span>
        <h1>Getting to know<br><span>Clarence.</span></h1>
        <p>A curious builder with a quality-first mindset.</p>
    </section>
    <section class="section-wrap about-layout">
        <div class="about-portrait"><img src="assets/images/graduate.jpg" alt="Illustrated temporary portrait placeholder for Clarence Acuna"><span><br></span></div>
        <div class="about-copy"><span class="eyebrow">MY STORY</span>
            <h2>Making the web<br><span>feel a little better.</span></h2>
            <p>I’m Clarence M. Acuna, an aspiring web developer based in the Philippines. I’m drawn to the place where thoughtful design meets reliable code: pages that are easy to understand, comfortable to use, and carefully put together.</p>
            <p>I also enjoy the quality side of making things. Testing a flow, spotting a rough edge, and refining the small details can turn a good idea into a much better experience. I’m currently building my skills through hands-on projects and steady practice.</p>
            <p>This portfolio is a snapshot of that journey. The education and project examples are starter content and should be updated with my real details before publishing.</p><a class="button button--outline" href="projects.php">See what I’m making <span>↗</span></a>
        </div>
    </section>
    <section class="section-wrap values-section"><span class="eyebrow">WHAT MATTERS TO ME</span>
        <div class="values-grid">
            <article><span>01</span>
                <h3>Clarity</h3>
                <p>Make the next step obvious and the important things easy to find.</p>
            </article>
            <article><span>02</span>
                <h3>Craft</h3>
                <p>Take care with the details, from the first sketch to the final check.</p>
            </article>
            <article><span>03</span>
                <h3>Curiosity</h3>
                <p>Keep learning, ask better questions, and stay open to a better approach.</p>
            </article>
        </div>
    </section>
    <section class="section-wrap skills-section" id="skills">
        <div class="section-heading">
            <div><span class="eyebrow">CURRENT TOOLKIT</span>
                <h2>Skills I’m <span>building.</span></h2>
            </div>
            <p>These are editable starting points. Adjust the skills and levels to match your real experience.</p>
        </div>
        <div class="skills-list"><?php foreach ($skills as $skill): ?><div class="skill-row">
                    <div><b><?= htmlspecialchars($skill['name'], ENT_QUOTES, 'UTF-8') ?></b><span><?= htmlspecialchars($skill['label'], ENT_QUOTES, 'UTF-8') ?></span></div>
                    <div class="skill-meter" aria-label="Sample level <?= (int) $skill['level'] ?> percent"><span style="width: <?= (int) $skill['level'] ?>%"></span></div><small><?= (int) $skill['level'] ?>%</small>
                </div><?php endforeach; ?></div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>