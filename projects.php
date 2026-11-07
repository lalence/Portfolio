<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Projects';
$activePage = 'projects';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero section-wrap"><span class="eyebrow">A WORK IN PROGRESS</span>
        <h1>Ideas made<br><span>into something real.</span></h1>
        <p>Concept projects to show the kind of thoughtful, quality-minded work I’m exploring.</p>
    </section>
    <section class="section-wrap projects-page">
        <div class="projects-intro"><span>THREE STARTING POINTS</span>
        </div>
        <div class="project-grid project-grid--page"><?php foreach ($projects as $project): ?><article class="project-card project-card--large">
                    <?php
                    $imagePath = __DIR__ . '/' . $project['image'];
                    $projectUrl = trim($project['link'] ?? '');
                    $projectScheme = strtolower((string) parse_url($projectUrl, PHP_URL_SCHEME));
                    if (!filter_var($projectUrl, FILTER_VALIDATE_URL) || !in_array($projectScheme, ['http', 'https'], true)) {
                        $projectUrl = '';
                    }
                    ?>
                    <?php if (is_file($imagePath)): ?>
                        <button class="project-image-button" type="button" aria-label="Enlarge image for <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <img class="project-image" src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Screenshot of <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
                        </button>
                    <?php else: ?>
                        <div class="project-image-placeholder" role="img" aria-label="Image placeholder for <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <span class="placeholder-icon">＋</span>
                            <strong>Project image</strong>
                            <span>Drop your PNG here</span>
                            <code>Edit the image path in includes/data.php</code>
                        </div>
                    <?php endif; ?>
                    <div class="project-meta"><span><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8') ?></span><span>CONCEPT</span></div>
                    <h2><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="project-outcome"><?= htmlspecialchars($project['tag'], ENT_QUOTES, 'UTF-8') ?></div>
                    <?php if ($projectUrl !== ''): ?><a class="project-view-link" href="<?= htmlspecialchars($projectUrl, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">View project <span>↗</span></a><?php endif; ?>
                </article><?php endforeach; ?></div>
    </section>
    <section class="section-wrap projects-cta">
        <div><span class="eyebrow">MORE TO COME</span>
            <h2>Every project is<br>a chance to <span>get better.</span></h2>
        </div><a class="button button--primary" href="contact.php">Start a conversation <span>↗</span></a>
    </section>
</main>
<dialog class="project-lightbox" aria-label="Enlarged project image">
    <button class="project-lightbox-close" type="button" aria-label="Close enlarged image">×</button>
    <img src="" alt="">
</dialog>
<?php require __DIR__ . '/includes/footer.php'; ?>
