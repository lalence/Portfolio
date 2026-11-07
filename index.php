<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Home';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="hero section-wrap">
        <div class="hero-copy">
            <span class="eyebrow"><span class="status-dot"></span> ASPIRING WEB DEVELOPER · QA MINDED</span>
            <h1>Thoughtful digital<br>experiences, <span>built with care.</span></h1>
            <p class="hero-intro">Hi, I’m <strong>Clarence M. Acuna.</strong> I enjoy turning ideas into clear, useful web experiences—and making sure the details feel right.</p>
            <div class="hero-actions"><a class="button button--primary" href="projects.php">Explore my work <span>↗</span></a><a class="button button--outline" href="assets/files/Copy-of-Curriculum-Vitae.pdf" download>Résumé <span>↓</span></a></div>
            <div class="hero-note"><span class="note-line"></span><span>Curious by nature. Careful by design.</span></div>
        </div>
        <div class="hero-visual">
            <div class="portrait-orbit orbit-one"></div>
            <div class="portrait-orbit orbit-two"></div>
            <div class="portrait-frame"><img src="assets/images/image.png" alt="Illustrated temporary portrait placeholder for Clarence Acuna"></div>
            <span class="visual-caption">A little curiosity goes a long way.</span>
        </div>
        <div class="hero-scroll"><span></span> SCROLL TO EXPLORE</div>
    </section>
    <section class="intro-band">
        <div class="section-wrap intro-grid">
            <div><span class="eyebrow">A LITTLE ABOUT HOW I WORK</span>
                <h2>Good work should<br><span>feel good to use.</span></h2>
            </div>
            <div class="intro-text">
                <p>I’m building my skills across web development and quality assurance. I like clean layouts, practical solutions, and the small checks that help a finished experience feel dependable.</p><a class="text-link" href="about.php">More about me <span>→</span></a>
            </div>
            <div class="intro-stamp"><span>CURIOUS<br>BY DEFAULT</span><b>✳</b></div>
        </div>
    </section>
    <section class="section-wrap home-work section-space">
        <div class="section-heading">
            <div><span class="eyebrow">SELECTED CONCEPTS</span>
                <h2>Work in progress,<br><span>made with purpose.</span></h2>
            </div><a class="text-link" href="projects.php">All projects <span>→</span></a>
        </div>
    </section>
    <section class="skills-strip">
        <div class="section-wrap skills-content">
            <div><span class="eyebrow">WHAT I'M EXPLORING</span>
                <h2>Learning through<br><span>making & testing.</span></h2><a class="text-link" href="about.php#skills">See my skills <span>→</span></a>
            </div>
            <div class="skill-chips"><?php foreach (array_slice($skills, 0, 4) as $skill): ?><span><?= htmlspecialchars($skill['name'], ENT_QUOTES, 'UTF-8') ?><i>↗</i></span><?php endforeach; ?></div>
        </div>
    </section>
    <section class="section-wrap home-contact"><span class="eyebrow">HAVE AN IDEA?</span>
        <h2>Let’s make something<br><span>meaningful.</span></h2><a class="button button--primary" href="contact.php">Get in touch <span>↗</span></a>
        <div class="contact-decoration">✳</div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>