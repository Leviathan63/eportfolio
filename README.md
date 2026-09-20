# Migration PHP — ePortfolio (v2 avec dossier templates/)

## Structure

```
templates/
  header.php   → <head>, meta, police Poppins, cache navigateur
  nav.php      → menu, marque la page active
  footer.php   → pied de page, année dynamique
  layout.php   → fonction render_page() qui redirige vers les 3 fichiers
                 ci-dessus + le contenu de la page

content/
  <page>-content.php   → uniquement le contenu spécifique de chaque page
                          (ce qui va dans <main>)

<page>.php (racine)   → 3 lignes : require layout.php + appel render_page()
```

## Comment ça marche

Chaque page à la racine (`about.php`, `contact.php`, etc.) ne fait que :

```php
<?php
require __DIR__ . '/templates/layout.php';
render_page('À propos', 'Présentation du parcours BUT RT', 'about', 'about-content.php');
```

`render_page()` (dans `templates/layout.php`) se charge de tout assembler
dans l'ordre : `header.php` → `nav.php` → contenu de la page (`content/*.php`)
→ `footer.php`. C'est une fonction, pas une classe — reste 100% procédural.

## À faire avant d'utiliser ces fichiers

1. **CSS** : copier ton `css/style.css` existant dans `css/`, puis :
   ```
   php build/minify-css.php
   ```

2. **Contenu des pages** : chaque fichier dans `content/` contient un
   repère `<!-- TODO: contenu existant de X.html à coller ici -->`.
   Colle-y le contenu HTML actuel de la page correspondante (tout ce qui
   allait dans `<main>` — grilles CSS, `aside`, etc. restent valables).

3. **Déploiement** : penser à commiter `css/style.min.css` avant de
   pousser sur `main`.

## Rappel branches

- Travail courant sur `dev`.
- Merge vers `main` seulement pour figer un rendu de formation :
  ```
  git checkout main
  git merge dev
  git push origin main
  ```

## Hébergement

Site hébergé sur **Eohost** (pas de changement d'hébergeur prévu pour
l'instant).
