<?php
// Cache navigateur pour les pages PHP : 1 heure.
// (30 jours étaient trop longs : les visiteurs ne voyaient pas les mises à jour.)
// Les CSS, images et vidéos peuvent garder un cache plus long, réglé côté serveur.
$cacheSeconds = 3600;
if (!headers_sent()) {
    header('Cache-Control: public, max-age=' . $cacheSeconds);
}

if (!isset($pageTitle))       { $pageTitle = "Mon ePortfolio"; }
if (!isset($pageDescription)) { $pageDescription = ""; }
if (!isset($bodyClass))       { $bodyClass = ""; }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<?php if ($bodyClass): ?>
<body class="<?= htmlspecialchars($bodyClass) ?>">
<?php else: ?>
<body>
<?php endif; ?>