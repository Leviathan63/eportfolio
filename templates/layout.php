<?php

function render_page(string $title, string $description, string $currentPage, string $contentFile): void
{
    $pageTitle       = $title;
    $pageDescription = $description;

    include __DIR__ . '/header.php';
    include __DIR__ . '/nav.php';

    echo "<main>\n";
    include __DIR__ . '/../content/' . $contentFile;
    echo "</main>\n";

    include __DIR__ . '/footer.php';
}