<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Education';
$activePage = 'education';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero section-wrap"><span class="eyebrow">THE LEARNING JOURNEY</span>
        <h1>Growing one<br><span>lesson at a time.</span></h1>
        <p>A foundation for a career built on curiosity and care.</p>
    </section>
    <section class="section-wrap education-layout">
        <div class="education-intro"><span class="eyebrow">EDUCATION & DEVELOPMENT</span>
            <h2>Every next step<br>starts with <span>learning.</span></h2>
        </div>
        <div class="timeline">
            <article class="timeline-item"><span class="timeline-dot"></span>
                <div class="timeline-top"><span class="eyebrow">COLLEGE</span><span class="timeline-date">2024 — PRESENT</span></div>
                <h3>Information Technology</h3>
                <h4>Pamantasan ng Lungsod ng Valenzuela</h4>
                <div class="tag-list"><span>Web foundations</span><span>Programming</span><span>Problem solving</span></div>
            </article>
            <article class="timeline-item"><span class="timeline-dot"></span>
                <div class="timeline-top"><span class="eyebrow">SECONDARY SCHOOL</span><span class="timeline-date">2022 — 2024</span></div>
                <h3>Secondary Education</h3>
                <h4>Punturin Senior High School</h4>
                <div class="tag-list"><span>Teamwork</span><span>Digital literacy</span></div>
            </article>
            <article class="timeline-item"><span class="timeline-dot"></span>
                <div class="timeline-top"><span class="eyebrow">ONGOING PRACTICE</span><span class="timeline-date">NOW</span></div>
                <h3>Independent Learning</h3>
                <h4>Projects, practice &amp; exploration</h4>
                <div class="tag-list"><span>PHP</span><span>QA basics</span><span>Git</span></div>
            </article>
        </div>
    </section>
    <section class="section-wrap education-bottom"><span class="eyebrow">ALWAYS IN PROGRESS</span>
        <h2>Learn something.<br><span>Make something with it.</span></h2><a class="text-link" href="projects.php">Explore sample projects <span>→</span></a>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>