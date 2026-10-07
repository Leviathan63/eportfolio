<?php
// Variable attendue : $currentPage (slug, pour construire les liens de validation W3C)

// URLs publiques de la page et de la feuille de style, construites à partir de la requête
// en cours : elles suivent automatiquement le domaine et le dossier d'hébergement.
$scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host    = $_SERVER['HTTP_HOST'] ?? 'localhost';
$baseDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$siteUrl = $scheme . '://' . $host . $baseDir . '/';
$pageUrl = rawurlencode($siteUrl . $currentPage . '.php');
$cssUrl  = rawurlencode($siteUrl . 'css/style.min.css');
?>
    <footer class="d-flex align-items-center justify-content-center flex-wrap text-center">
        <div class="badges-validation position-absolute start-0 ms-3">
            <p><em>Validation HTML5 et CSS3</em></p>
            <div class="conteneur-badges">
                <a href="https://validator.w3.org/nu/?doc=<?= $pageUrl ?>" target="_blank" rel="noopener noreferrer">
                    <img src="images/html5-validator-badge-blue.png" alt="Badge de validation HTML5" width="70" loading="lazy">
                </a>
                <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?= $cssUrl ?>" target="_blank" rel="noopener noreferrer">
                    <img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Badge de validation CSS3" width="70" loading="lazy">
                </a>
            </div>
        </div>
        <p class="mb-0">&copy; <?= date('Y') ?> Thibault Larroque, tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>