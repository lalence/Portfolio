<?php
$pageTitle = $pageTitle ?? $siteName;
$activePage = $activePage ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0b0a12">
    <meta name="description" content="Portfolio of Clarence M. Acuna — an aspiring web developer with a quality-first mindset.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> · Clarence Acuna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?= filemtime(__DIR__ . '/../css/style.css') ?>">
    <script src="js/main.js?v=<?= filemtime(__DIR__ . '/../js/main.js') ?>" defer></script>
</head>
<body>
<div class="site-shell">
    <header class="site-header">
        <a class="brand" href="index.php" aria-label="Clarence Acuna home"><span class="brand-mark">c<span>.</span></span><span>Clarence <b>Acuna</b></span></a>
        <nav class="main-nav" aria-label="Main navigation">
            <a class="<?= $activePage === 'home' ? 'is-active' : '' ?>" href="index.php">Home</a>
            <a class="<?= $activePage === 'about' ? 'is-active' : '' ?>" href="about.php">About</a>
            <a class="<?= $activePage === 'education' ? 'is-active' : '' ?>" href="education.php">Education</a>
            <a class="<?= $activePage === 'projects' ? 'is-active' : '' ?>" href="projects.php">Projects</a>
        </nav>
        <a class="button button--small button--primary header-cta" href="contact.php">Let's talk <span>↗</span></a>
        <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false"><span></span><span></span></button>
    </header>
