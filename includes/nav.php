<nav class="nav" id="nav">
    <div class="container nav-inner">
        <a href="#hero" class="nav-logo"><?= htmlspecialchars(SITE_NAME) ?></a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <ul class="nav-links" id="navLinks">
            <?php foreach ($nav_links as $link): ?>
            <li><a href="<?= htmlspecialchars($link['href']) ?>" class="nav-link"><?= htmlspecialchars($link['label']) ?></a></li>
            <?php endforeach; ?>
            <li><a href="resume.pdf" class="btn btn-sm" target="_blank" rel="noopener">Resume</a></li>
        </ul>
    </div>
</nav>
