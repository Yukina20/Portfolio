<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="#presentation">Présentation</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="#projects">Projets</a></li>
        <li><a href="#skills">Compétences</a></li>
    </ul>
</nav>

<section id="presentation" class="section">
    <h2>Présentation</h2>
    <div class="intro">
        <img src="../../images/photo-profil.jpg" alt="Photo de profil" class="photo-profil">
        <p>Bonjour, je suis Victoria Dubuc, étudiante en dernière année de BTS SIO, spécialité SLAM. Passionnée par les technologies de l'information, je me suis spécialisée dans le développement d'applications web, la gestion des bases de données et la création de solutions interactives. Mon parcours m'a permis de travailler sur divers projets, dont une application de prévention pour les jeunes conducteurs et un quiz de prévention des risques sonores.</p>
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


<!-- Section Projets -->
<section id="projects" class="section">
    <h2>Projets</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3>Application de Prévention pour Jeunes Conducteurs</h3>
            <p>Développement d'une application web pour sensibiliser les jeunes conducteurs sur les dangers de l'alcool au volant. L'application permettait de simuler des tests d'alcoolémie et donnait des conseils de sécurité.</p>
            <a href="https://lienversleprojet.com" class="btn-view">Voir le projet</a>
        </div>
        <div class="project-card">
            <h3>Quiz de Prévention contre les Risques Sonores</h3>
            <p>Création d'un quiz interactif pour sensibiliser à la prévention des risques sonores, destiné aux jeunes exposés à des environnements bruyants. Ce projet utilise des technologies web modernes comme PHP et MySQL pour gérer les données des utilisateurs.</p>
            <a href="https://lienversleprojet.com" class="btn-view">Voir le projet</a>
        </div>
    </div>
</section>


<!-- Section Compétences -->
<section id="skills" class="section">
    <h2>Compétences</h2>
    <ul>
        <li><strong>Développement Web</strong> : HTML, CSS, PHP, JavaScript</li>
        <li><strong>Bases de données</strong> : MySQL</li>
        <li><strong>Développement d'applications</strong> : Conception d'applications interactives pour la prévention</li>
        <li><strong>Développement de jeux vidéo</strong> : (Mentionne les technologies ou moteurs si tu as travaillé avec des outils spécifiques comme Unity, Unreal, etc.)</li>
    </ul>
</section>


<!-- Section Veille Technologique -->
<section id="veille-techno" class="section">
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





<footer>
    <footer>
        <p>&copy; 2024 Victoria Dubuc. Tous droits réservés.</p>
        <p><a href="mailto:victoria.dubuc@example.com">Contactez-moi</a></p>
        <ul>
            <li><a href="https://www.linkedin.com/in/victoria-dubuc">LinkedIn</a></li>
            <li><a href="https://github.com/victoriadubuc">GitHub</a></li>
        </ul>
    </footer>


<script src="../../js/script.js"></script> <!-- Chemin vers le fichier JavaScript -->
</body>
</html>
