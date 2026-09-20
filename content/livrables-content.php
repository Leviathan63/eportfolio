<main class="container my-5 flex-grow-1">
        <div class="row g-4 align-items-start">

            <div class="col-12 col-md-4">
                <section>
                    <h2>Plan du site</h2>
                    <p>Hiérarchie des pages du ePortfolio :</p>
                    <pre>
ePortfolio/
│
├── index.php
├── parcours.php
├── eportfolio.php
├── livrables.php
├── about.php
├── contact.php
└── mentions_legales.php
                    </pre>
                </section>
            </div>

            <div class="col-12 col-md-4">
                <section>
                    <h2>Architecture et charte graphique</h2>
                    <p>Le site utilise une structure HTML5 sémantique avec <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code> et <code>&lt;footer&gt;</code>. La charte graphique repose sur :</p>
                    <ul>
                        <li>Couleurs dominantes : rouge, gris foncé et blanc</li>
                        <li>Typographie principale : <strong>Poppins</strong>, sans-serif</li>
                        <li>Design responsive via Bootstrap 5</li>
                    </ul>
                </section>
            </div>

            <aside class="col-12 col-md-4">
                <section>
                    <h2>Responsive Web Design</h2>
                    <p>Le site a été testé sur :</p>
                    <ul>
                        <li><a href="https://www.responsinator.com/" target="_blank" rel="noopener noreferrer">Responsinator</a></li>
                        <li><a href="https://www.websiteplanet.com/fr/webtools/responsive-checker/" target="_blank" rel="noopener noreferrer">Website Planet</a></li>
                        <li><a href="https://gtmetrix.com/" target="_blank" rel="noopener noreferrer">GTMetrix</a></li>
                    </ul>
                    <img src="images/responsive.jpg" alt="Aperçu du test Responsinator" class="image-grande">
                </section>
            </aside>

        </div>
    </main>

    <section class="livrables-pleine-largeur">
        <h2>Arborescence physique</h2>
        <p>Organisation des fichiers et dossiers :</p>
        <img src="images/arborescence_fichiers.png" alt="Arborescence du site web" usemap="#planFichiers" class="image-carte">
        <map name="planFichiers">
            <area shape="rect" coords="155,5,295,55" href="index.php" alt="Accueil">
            <area shape="rect" coords="310,5,420,55" href="eportfolio.php" alt="ePortfolio">
            <area shape="rect" coords="435,5,565,55" href="about.php" alt="About Me">
            <area shape="rect" coords="580,5,695,55" href="parcours.php" alt="Parcours">
            <area shape="rect" coords="710,5,845,55" href="livrables.php" alt="Éléments livrables">
            <area shape="rect" coords="860,5,960,55" href="contact.php" alt="Contact">
            <area shape="rect" coords="975,5,1125,55" href="mentions_legales.php" alt="Mentions légales">
        </map>
        <p><em>Survolez les zones puis cliquez pour accéder aux pages <strong>HTML</strong>.</em></p>
    </section>

    <section class="livrables-pleine-largeur">
        <h2>Gestion de projet</h2>
        <p>Suivi réalisé avec un <strong>diagramme de Gantt</strong> :</p>
        <img src="images/gantt.png" alt="Diagramme de Gantt" class="image-grande gantt">
    </section>