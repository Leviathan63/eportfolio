<?php
// Variables attendues : $currentPage (slug), $pageHeading (titre affiché en <h1>)
if (!isset($pageHeading)) { $pageHeading = ""; }

$navItems = [
    'index'             => 'Accueil',
    'eportfolio'        => 'ePortfolio',
    'about'             => 'À propos',
    'parcours'          => 'Parcours',
    'competences'       => 'Compétences & Projets',
    'livrables'         => 'Livrables',
    'contact'           => 'Contact',
    'mentions_legales'  => 'Mentions légales',
];
?>
    <header>
        <div class="conteneur-entete d-flex align-items-center justify-content-center gap-3 flex-wrap">
            <img src="images/drag_hi.png" alt="Logo Thibault" class="logo-entete">
            <h1><?= htmlspecialchars($pageHeading) ?></h1>
        </div>
        <nav aria-label="Navigation principale">
            <ul class="d-flex justify-content-center flex-wrap gap-3 list-unstyled mt-3 mb-0">
                <?php foreach ($navItems as $slug => $label): ?>
                <li><a href="<?= $slug ?>.php"<?= ($currentPage === $slug) ? ' class="active" aria-current="page"' : '' ?>><?= htmlspecialchars($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <nav class="liens-sociaux" aria-label="Réseaux sociaux">
            <a href="https://github.com/Leviathan63" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fa-brands fa-github" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/thibault-larroque-878439421/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
        </nav>
    </header>