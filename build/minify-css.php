<?php
// À lancer en local avant déploiement : php build/minify-css.php
// Lit css/style.css et génère css/style.min.css

$srcPath = __DIR__ . '/../css/style.css';
$outPath = __DIR__ . '/../css/style.min.css';

if (!file_exists($srcPath)) {
    fwrite(STDERR, "Erreur : {$srcPath} introuvable.\n");
    exit(1);
}

$css = file_get_contents($srcPath);

$css = preg_replace('/\/\*.*?\*\//s', '', $css);       // enlève les commentaires
$css = preg_replace('/\s+/', ' ', $css);                // compresse les espaces
$css = str_replace(
    ['; ', ': ', ' {', '{ ', '} ', ', '],
    [';',  ':',  '{',  '{',  '}',  ','],
    $css
);
$css = trim($css);

file_put_contents($outPath, $css);

$before = strlen(file_get_contents($srcPath));
$after  = strlen($css);
$saved  = $before > 0 ? round((1 - $after / $before) * 100, 1) : 0;

echo "OK : {$outPath} généré ({$before} → {$after} octets, -{$saved}%)\n";