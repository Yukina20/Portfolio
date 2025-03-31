<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<section>

<nav>
    <ul>
        <li>Dubuc Victoria</li>
        <li><a href="#presentation">Présentation</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="#projects">Compétences</a></li>
        <li><a href="#skills">Projets</a></li>
        <li><a href="#veille">Veille</a></li> <!-- Nouveau lien ajouté -->
        <li><a href="#contact">Contact</a></li> <!-- Nouveau lien ajouté -->
        <li><a href="#Tableau">Tableau</a></li> <!-- Nouveau lien ajouté -->
    </ul>
</nav>

<section id="presentation" class="section">
    <h2>Présentation</h2>
    <div class="intro">
        <img src="images/DALL·E-2025-03-27-08.31.png" alt="Photo de profil" class="photo-logo">
        <div class="intro-text">
            <p>Étudiante en dernière année de BTS SIO, spécialité SLAM.</p>
            <p>Passionnée par les technologies de l'information, je me suis spécialisée dans le développement d'applications web, la gestion des bases de données et la création de solutions interactives.</p>
            <p>J’ai travaillé sur divers projets, dont une application de prévention pour les jeunes conducteurs et un quiz sur les risques sonores.</p>
        </div>
    </div>

    <div class="links">
        <p>Vous pouvez consulter mes travaux sur :</p>
        <ul>
            <li><a href="https://www.linkedin.com/in/victoria-dubuc">LinkedIn</a></li>
            <li><a href="https://github.com/victoriadubuc">GitHub</a></li>
        </ul>
    </div>
</section>

<section id="about" class="section">
    <h2>À propos</h2>
    <p>Je suis actuellement en dernière année de BTS SIO (Services Informatiques aux Organisations) et j'ai acquis des compétences solides dans le développement web (PHP, MySQL, HTML, CSS) et la gestion de bases de données. Lors de mon premier stage, j'ai eu l'opportunité de développer une application de prévention pour les jeunes conducteurs concernant les risques liés à l'alcool. Actuellement, je suis en stage pour la création d'un quiz de prévention contre les risques sonores, un projet que je trouve particulièrement intéressant et utile pour la sensibilisation.</p>
    <p>Je suis particulièrement passionnée par le développement d'applications, la création de sites web interactifs et le développement de jeux vidéo. J'aime relever des défis techniques et apprendre de nouvelles technologies.</p>
</section>

<!-- Section Compétences -->
<section id="skills" class="section">
    <h2>Compétences</h2>
    <div class="skills-list">
        <div class="skill-item">
            <i class="fas fa-code"></i>
            <p>Développement Web</p>
            <p>HTML, CSS, JavaScript, PHP, Symfony</p>
        </div>
        <div class="skill-item">
            <i class="fas fa-database"></i>
            <p>Bases de données</p>
            <p>MySQL</p>
        </div>
        <div class="skill-item">
            <i class="fas fa-laptop-code"></i>
            <p>Développement d'applications</p>
            <p>C#, Windows Forms</p>
        </div>
        <div class="skill-item">
            <i class="fas fa-mobile-alt"></i>
            <p>Applications mobiles</p>
            <p>Android Studio, Java</p>
        </div>
        <div class="skill-item">
            <i class="fas fa-gamepad"></i>
            <p>Développement de jeux</p>
            <p>Unreal Engine</p>
        </div>
    </div>
</section>

<!-- Section Projets -->
<!-- Section Projets -->
<section id="projects" class="section">
    <h2>Projets</h2>
    <div class="projects-container">
        <div class="projects-list">
            <!-- Projet 1 : MENAGELEC -->
            <div class="project-item">
                <h3>MENAGELEC</h3>
                <p>MENAGELEC est une entreprise spécialisée dans la vente et le dépannage de pièces détachées pour appareils électroménagers.</p>
                <p><strong>Technologies :</strong> C#, Windows Forms, SQL Server</p>
            </div>

            <!-- Projet 2 : Gest Megot -->
            <div class="project-item">
                <h3>Gest Megot</h3>
                <p>Application de gestion des spots de mégots de cigarettes dans les lieux publics.</p>
                <p><strong>Technologies :</strong> C#, Windows Forms</p>
            </div>

            <!-- Autres projets vont ici mais seront masqués -->
            <!-- Projet 3 : RocketLaon -->
            <div class="project-item">
                <img src="images/rocketleague.jpg" alt="Rocket League">
                <h3>RocketLaon</h3>
                <p>Site Web pour une compétition Esport Rocket League, avec suivi des scores et des classements.</p>
                <p><strong>Technologies :</strong> PHP, HTML, CSS</p>
            </div>

            <!-- Projet 4 : Le Monde Est Vache -->
            <div class="project-item">
                <img src="images/LeMondeEstVache.jpg" alt="Rocket League">
                <h3>Le Monde Est Vache</h3>
                <p>Site e-commerce pour la boutique "Le Monde Est Vache", spécialisée dans la vente de produits artisanaux.</p>
                <p><strong>Technologies :</strong> PHP, HTML, CSS</p>
            </div>

            <!-- Projet 5 : Telem -->
            <div class="project-item">
                <h3>Telem</h3>
                <p>Site e-commerce pour vendre et gérer des pièces détachées d'appareils électroménagers.</p>
                <p><strong>Technologies :</strong> Symfony, PHP, HTML, Twig, SCSS</p>
            </div>

            <!-- Projet 6 : Dose Bar -->
            <div class="project-item">
                <h3>Dose Bar</h3>
                <p>Jeu de prévention pour les jeunes conducteurs sur les risques liés à l'alcool et à la vitesse.</p>
                <p><strong>Technologies :</strong> Java, Android Studio</p>
            </div>

            <!-- Projet 7 : Maitre du Son -->
            <div class="project-item">
                <img src="images/SoundMaster.png" alt="Dose Bar"></img>
                <h3>Maitre du Son</h3>
                <p>Jeu éducatif pour sensibiliser aux risques auditifs liés à l'exposition prolongée à des bruits forts.</p>
                <p><strong>Technologies :</strong> C++, Unreal Engine</p>
            </div>

                <!-- Projet 8 : Anime Gate -->
                <div class="project-item">
                    <h3>Anime Gate</h3>
                    <p>Anime Gate est un site permettant aux utilisateurs de découvrir, noter et organiser leurs séries animées préférées.</p>
                    <p><strong>Technologies :</strong> PHP, Symfony, HTML, Twig, SCSS</p>
                </div>
        </div>
    </div>
</section>


<!-- Section Veille Technologique -->
<section id="veille" class="section">
    <h2>Veille Technologique</h2>
    <div class="articles">
        <!-- Article 1 : Langages et frameworks web -->
        <div class="article-card">
            <a href="https://www.blogdumoderateur.com/developpement-web-langages-informatiques-indispensables-connaitre-2025/?utm_source=chatgpt.com" class="article-link">
                <img src="https://f.hellowork.com/blogdumoderateur/2025/01/langages-informatiques-2025-tiobe.jpg" alt="Image de l'article 1" class="article-img">
                <h3>Les langages informatiques et frameworks indispensables à connaître en 2025</h3>
                <p>Dans cet article, découvrez les langages et frameworks incontournables pour le développement web en 2025. De React à Laravel, les outils pour construire des applications performantes et modernes sont détaillés.</p>
            </a>
        </div>

        <!-- Article 2 : Développement de jeux avec Unreal Engine -->
        <div class="article-card">
            <a href="https://www.agence-application-mobile.ch/technologie-developpement-applications-mobiles/?utm_source=chatgpt.com" class="article-link">
                <img src="https://i0.wp.com/blog.mbadmb.com/wp-content/uploads/2024/05/historique-du-jeu-video-1970-2020.webp?resize=1280%2C685&ssl=1" alt="Image de l'article 2" class="article-img">
                <h3>Développement de jeux vidéo avec Unreal Engine : Le guide complet</h3>
                <p>Unreal Engine révolutionne le développement de jeux vidéo avec ses capacités impressionnantes. Cet article vous guide à travers les outils et techniques qui permettent de créer des jeux en 3D avec une qualité graphique de pointe.</p>
            </a>
        </div>

        <!-- Article 3 : React Native et le développement d'applications mobiles -->
        <div class="article-card">
            <a href="https://www.reactnative.express/react-native-why-its-revolutionizing-app-development/" class="article-link">
                <img src="https://www.agence-application-mobile.ch/wp-content/uploads/2024/09/technologie-utilisee-application-mobile.webp" alt="Image de l'article 3" class="article-img">
                <h3>Pourquoi React Native révolutionne le développement d'applications mobiles</h3>
                <p>React Native a transformé la manière dont les applications mobiles sont développées, permettant de créer des applications mobiles performantes et réactives avec un seul code pour iOS et Android. Découvrez pourquoi il est devenu incontournable.</p>
            </a>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <h2>Contact</h2>
    <form action="mailto:victoria.dubuc@example.com" method="post" enctype="text/plain">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Votre nom" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" placeholder="Votre message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>

<section id="Tableau" class="section">
    <h2>Tableau des Projets</h2>

    <table border="1">
        <thead>
        <tr>
            <th rowspan="2">Réalisations professionnelles<br>(intitulé et liste des documents et productions associés)</th>
            <th rowspan="2">Période (sous la forme du JJ/MM/AA au JJ/MM/AA)</th>
            <th colspan="6">Compétences mises en œuvre</th>
        </tr>
        <tr>
            <th>Gérer le patrimoine informatique</th>
            <th>Répondre aux incidents</th>
            <th>Développer la présence en ligne</th>
            <th>Travailler en mode projet</th>
            <th>Mettre à disposition un service</th>
            <th>Organiser son développement professionnel</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="8" style="text-align: center;"><b>Réalisation en cours de formation</b></td>
        </tr>
        <tr>
            <td>GestMegot</td>
            <td>06/05/2024</td>
            <td>X</td>
            <td></td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td></td>
        </tr>
        <tr>
            <td>Le Monde Est Vache</td>
            <td>13/02/2024</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Rocket Laon</td>
            <td>09/2023 - 05/2024</td>
            <td></td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
        </tr>
        <tr>
            <td>MENAGELEC</td>
            <td>07/10/2024 - 30/10/2024</td>
            <td>X</td>
            <td>X</td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td></td>
        </tr>
        <tr>
            <td>Telem</td>
            <td>11/2024 - 01/2025</td>
            <td></td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td></td>
        </tr>
        <tr>
            <td>Anime Gate</td>
            <td>En cours depuis </td>
            <td>X</td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
        </tr>
        <tr>
            <td colspan="8" style="text-align: center;"><b>Réalisations en milieu professionnel en cours de première année</b></td>
        </tr>
        <tr>
            <td>Drink Cards</td>
            <td>27/05/2024 - 28/06/2024</td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
        </tr>
        <tr>
            <td colspan="8" style="text-align: center;"><b>Réalisations en milieu professionnel en cours de seconde année</b></td>
        </tr>
        <tr>
            <td>Sound Master</td>
            <td>06/01/2025 - 07/02/2025</td>
            <td></td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
        </tr>
        </tbody>
    </table>
</section>

<section>
<footer>
    <p>&copy; 2024 Victoria Dubuc. Tous droits réservés.</p>
    <ul>
        <li><a href="https://www.linkedin.com/in/victoria-dubuc">LinkedIn</a></li>
        <li><a href="https://github.com/Yukina20">GitHub</a></li>
    </ul>
</footer>

<script src="../../js/script.js"></script> <!-- Chemin vers le fichier JavaScript -->
</section>
</html>