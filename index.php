<?php
require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/handler/contact.php';
    exit;
}
?>
<?php require_once __DIR__ . '/includes/header.php'; ?>
<?php require_once __DIR__ . '/includes/nav.php'; ?>

<main>

    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <div class="hero-grid"></div>
        </div>
        <div class="container hero-inner">
            <div class="hero-badge">Open to Opportunities</div>
            <h1 class="hero-title">
                Hi, I'm <span class="accent"><?= htmlspecialchars(SITE_NAME) ?></span>
            </h1>
            <h2 class="hero-subtitle">
                <span class="typewriter" id="typewriter"></span><span class="cursor">|</span>
            </h2>
            <p class="hero-desc">
                IT student at Kyambogo University and Diploma holder in Computer Science from MUBS.
                I'm passionate about web development, databases, networking, and turning ideas into working software.
            </p>
            <div class="hero-ctas">
                <a href="#projects" class="btn btn-primary">View My Work</a>
                <a href="#contact" class="btn btn-outline">Get in Touch</a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-num">3rd</span>
                    <span class="stat-label">Year IT Student</span>
                </div>
                <div class="stat">
                    <span class="stat-num">7+</span>
                    <span class="stat-label">Languages Known</span>
                </div>
                <div class="stat">
                    <span class="stat-num">2021</span>
                    <span class="stat-label">Diploma Grad, MUBS</span>
                </div>
            </div>
        </div>
        <a href="#about" class="scroll-hint" aria-label="Scroll to about">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
        </a>
    </section>

    <!-- ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">About</span>
                <h2 class="section-title">Who I Am</h2>
            </div>
            <div class="about-grid">
                <div class="about-avatar">
                    <div class="avatar-ring">
                        <div class="avatar-inner">
                            <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" width="80" height="80">
                                <circle cx="40" cy="32" r="18" fill="var(--accent)" opacity="0.15"/>
                                <circle cx="40" cy="32" r="18" stroke="var(--accent)" stroke-width="2"/>
                                <path d="M10 68c0-16.569 13.431-30 30-30s30 13.431 30 30" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
                                <circle cx="40" cy="32" r="8" fill="var(--accent)" opacity="0.5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="avatar-badges">
                        <div class="avatar-badge">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            Web Dev
                        </div>
                        <div class="avatar-badge">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            Databases
                        </div>
                        <div class="avatar-badge">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Networking
                        </div>
                    </div>
                </div>
                <div class="about-content">
                    <p class="about-lead">
                        I'm Ronno Titus, a 3rd-year Information Technology student at Kyambogo University,
                        Kampala, Uganda. I graduated with a Diploma in Computer Science from Makerere
                        University Business School (MUBS) on 1st October 2021.
                    </p>
                    <p class="about-text">
                        I enjoy building practical software that solves real problems. My interests span
                        web development, database design with MySQL, computer networking, and mobile
                        development with Flutter. I've worked with languages including PHP, Python, Java,
                        C, C++, and JavaScript.
                    </p>
                    <p class="about-text">
                        As a student I believe in learning by doing — my coursework Library Management
                        System project gave me hands-on experience designing database schemas, writing
                        backend logic in PHP, and building user-friendly interfaces. I'm always eager
                        to take on new challenges and grow my skills.
                    </p>
                    <div class="about-chips">
                        <?php
                        $chips = ['Web Development','MySQL Databases','Computer Networking','PHP Backend','Flutter','Problem Solving','Open to Opportunities'];
                        foreach ($chips as $chip): ?>
                        <span class="chip"><?= htmlspecialchars($chip) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="section section-alt" id="skills">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Skills</span>
                <h2 class="section-title">What I Work With</h2>
            </div>
            <div class="skills-grid">
                <?php foreach ($skills as $category => $items): ?>
                <div class="skill-group">
                    <h3 class="skill-category"><?= htmlspecialchars($category) ?></h3>
                    <div class="skill-list">
                        <?php foreach ($items as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-meta">
                                <span class="skill-name"><?= htmlspecialchars($skill['name']) ?></span>
                                <span class="skill-pct"><?= (int)$skill['level'] ?>%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-fill" data-level="<?= (int)$skill['level'] ?>"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="section" id="projects">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Projects</span>
                <h2 class="section-title">Things I've Built</h2>
            </div>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                <article class="project-card<?= $project['featured'] ? ' project-card--featured' : '' ?>">
                    <?php if ($project['featured']): ?>
                    <div class="project-featured-tag">Featured</div>
                    <?php endif; ?>
                    <div class="project-card-body">
                        <h3 class="project-title"><?= htmlspecialchars($project['title']) ?></h3>
                        <p class="project-desc"><?= htmlspecialchars($project['description']) ?></p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                            <span class="tag"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="project-card-footer">
                        <a href="<?= htmlspecialchars($project['github']) ?>" class="project-link" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.165c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729 1.205.085 1.84 1.237 1.84 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23A11.51 11.51 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.235 1.91 1.235 3.22 0 4.61-2.807 5.625-5.48 5.92.43.372.823 1.102.823 2.222v3.293c0 .322.218.694.825.577C20.565 21.796 24 17.298 24 12 24 5.37 18.627 0 12 0z"/></svg>
                            Code
                        </a>
                        <a href="<?= htmlspecialchars($project['demo']) ?>" class="project-link" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                            Demo
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section class="section section-alt" id="experience">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Experience</span>
                <h2 class="section-title">My Journey</h2>
            </div>
            <div class="timeline">
                <?php foreach ($experience as $i => $job): ?>
                <div class="timeline-item" data-index="<?= $i ?>">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3 class="timeline-role"><?= htmlspecialchars($job['role']) ?></h3>
                                <p class="timeline-company"><?= htmlspecialchars($job['company']) ?></p>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-period"><?= htmlspecialchars($job['period']) ?></span>
                                <span class="timeline-location"><?= htmlspecialchars($job['location']) ?></span>
                            </div>
                        </div>
                        <ul class="timeline-bullets">
                            <?php foreach ($job['bullets'] as $bullet): ?>
                            <li><?= htmlspecialchars($bullet) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="section-header" style="margin-top:4rem;">
                <span class="section-tag">Education</span>
                <h2 class="section-title">Academic Background</h2>
            </div>
            <div class="edu-grid">
                <?php foreach ($education as $edu): ?>
                <div class="edu-card">
                    <div class="edu-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/></svg>
                    </div>
                    <div class="edu-content">
                        <h3 class="edu-degree"><?= htmlspecialchars($edu['degree']) ?></h3>
                        <p class="edu-school"><?= htmlspecialchars($edu['school']) ?></p>
                        <p class="edu-period"><?= htmlspecialchars($edu['period']) ?></p>
                        <p class="edu-detail"><?= htmlspecialchars($edu['detail']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Contact</span>
                <h2 class="section-title">Let's Talk</h2>
                <p class="section-sub">I'm open to internships, collaborations, and interesting projects. Drop me a line.</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        </div>
                        <div>
                            <p class="contact-label">Email</p>
                            <a href="mailto:<?= htmlspecialchars(CONTACT_EMAIL) ?>" class="contact-value"><?= htmlspecialchars(CONTACT_EMAIL) ?></a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.165c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729 1.205.085 1.84 1.237 1.84 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23A11.51 11.51 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.235 1.91 1.235 3.22 0 4.61-2.807 5.625-5.48 5.92.43.372.823 1.102.823 2.222v3.293c0 .322.218.694.825.577C20.565 21.796 24 17.298 24 12 24 5.37 18.627 0 12 0z"/></svg>
                        </div>
                        <div>
                            <p class="contact-label">GitHub</p>
                            <a href="https://github.com" target="_blank" rel="noopener" class="contact-value">github.com/ronnotitus</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M20.447 20.452H16.89v-5.569c0-1.328-.026-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a1.977 1.977 0 0 1-1.972-1.98c0-1.093.883-1.98 1.972-1.98s1.972.887 1.972 1.98a1.977 1.977 0 0 1-1.972 1.98zm1.991 13.019H3.347V9h3.981v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </div>
                        <div>
                            <p class="contact-label">LinkedIn</p>
                            <a href="https://linkedin.com" target="_blank" rel="noopener" class="contact-value">linkedin.com/in/ronnotitus</a>
                        </div>
                    </div>
                </div>

                <form class="contact-form" id="contactForm" novalidate>
                    <div id="formStatus" class="form-status" aria-live="polite"></div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Jane Smith" autocomplete="name" required>
                            <span class="field-error" id="nameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="jane@example.com" autocomplete="email" required>
                            <span class="field-error" id="emailError"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="I'd like to discuss..." required>
                        <span class="field-error" id="subjectError"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell me about your project or opportunity..." required></textarea>
                        <span class="field-error" id="messageError"></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full" id="submitBtn">
                        <span class="btn-text">Send Message</span>
                        <span class="btn-loading" hidden>Sending…</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
