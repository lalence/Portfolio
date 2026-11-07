    <footer class="site-footer">
        <a class="brand" href="index.php"><span class="brand-mark">c<span>.</span></span><span>Clarence <b>Acuna</b></span></a>
        <p>Made with care, curiosity &amp; a little purple.</p>
        <div class="footer-socials" aria-label="Social links">
            <?php foreach ($socialLinks as $social): ?><a href="<?= htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars($social['name'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($social['icon'], ENT_QUOTES, 'UTF-8') ?></a><?php endforeach; ?>
        </div>
        <span class="copyright">© <?= date('Y') ?> Clarence M. Acuna</span>
    </footer>
</div>
</body>
</html>
