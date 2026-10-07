<?php
/**
 * Assemble une page en redirigeant vers les fichiers de templates/
 * et le contenu spécifique de la page, dans content/.
 *
 * Procédural (pas de classe) : une simple fonction qui fait les include.
 *
 * @param string $pageTitle       Contenu de la balise <title>
 * @param string $pageDescription Contenu de la meta description
 * @param string $pageHeading     Titre affiché en <h1> dans l'en-tête
 * @param string $currentPage     Slug de la page (ex: "about"), sert à
 *                                marquer le lien actif et construire les
 *                                liens de validation W3C
 * @param string $contentFile     Nom du fichier dans content/ à inclure
 * @param string $bodyClass       Classe optionnelle sur <body> (ex: "livrables")
 */
function render_page(
    string $pageTitle,
    string $pageDescription,
    string $pageHeading,
    string $currentPage,
    string $contentFile,
    string $bodyClass = ''
): void {
    // basename() : on n'autorise qu'un nom de fichier, jamais un chemin.
    $contentPath = __DIR__ . '/../content/' . basename($contentFile);

    // Vérifié AVANT tout affichage : une faute de frappe donne une erreur claire
    // au lieu d'une page coupée après le menu.
    if (!is_file($contentPath)) {
        http_response_code(500);
        exit('Erreur : fichier de contenu introuvable (' . htmlspecialchars(basename($contentFile)) . ').');
    }

    include __DIR__ . '/header.php';
    include __DIR__ . '/nav.php';
    include $contentPath;
    include __DIR__ . '/footer.php';
}