<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portfolio de Luhan Guiggia--Milon, étudiant en BUT Informatique à l'IUT de Lannion. Découvrez mon parcours, mes compétences et mes projets.">
    <link rel="stylesheet" href="styles/style.css">
    <title>Luhan GUIGGIA--MILON | Portfolio</title>
</head>

<body>
    <nav>
        <h1>Luhan Guiggia--Milon</h1>
        <a class="linkedin" href="https://www.linkedin.com/in/luhan-guiggia/" aria-label="Mon profil LinkedIn">
            <svg width="44" height="42" viewBox="0 0 44 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M30 14C33.1826 14 36.2348 15.2643 38.4853 17.5147C40.7357 19.7652 42 22.8174 42 26V40H34V26C34 24.9391 33.5786 23.9217 32.8284 23.1716C32.0783 22.4214 31.0609 22 30 22C28.9391 22 27.9217 22.4214 27.1716 23.1716C26.4214 23.9217 26 24.9391 26 26V40H18V26C18 22.8174 19.2643 19.7652 21.5147 17.5147C23.7652 15.2643 26.8174 14 30 14Z"
                    stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M10 16H2V40H10V16Z" stroke="white" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M6 10C8.20914 10 10 8.20914 10 6C10 3.79086 8.20914 2 6 2C3.79086 2 2 3.79086 2 6C2 8.20914 3.79086 10 6 10Z"
                    stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <a class="github" href="https://github.com/luhan-gui" aria-label="Mon profil GitHub">
            <svg width="43" height="46" viewBox="0 0 43 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0005 38C6.00049 41 6.00049 33 2.00049 32M30.0005 44V36.26C30.0755 35.3063 29.9467 34.3476 29.6225 33.4476C29.2984 32.5476 28.7863 31.7268 28.1205 31.04C34.4005 30.34 41.0005 27.96 41.0005 17.04C41 14.2477 39.9259 11.5624 38.0005 9.54C38.9122 7.09701 38.8477 4.3967 37.8205 2C37.8205 2 35.4605 1.3 30.0005 4.96C25.4165 3.71764 20.5845 3.71764 16.0005 4.96C10.5405 1.3 8.18049 2 8.18049 2C7.15324 4.3967 7.08878 7.09701 8.00049 9.54C6.06074 11.5774 4.98553 14.2869 5.00049 17.1C5.00049 27.94 11.6005 30.32 17.8805 31.1C17.2225 31.7799 16.715 32.5908 16.3911 33.4798C16.0672 34.3689 15.9341 35.3161 16.0005 36.26V44"
                    stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </nav>
    <header>
        <h2>Bonjour!</h2>
        <p>Je suis Guiggia--Milon Luhan,<br> Étudiant en BUT Informatique <br> à l'IUT de Lannion</p>
        <img src="img/header.png" alt="Luhan GUIGGIA--MILON dans un écran indiquant de scroller la page vers le bas">
        <section>
            <button id="btn_parcours" class="btn-open-modal" data-target="#parcours-overlay">Mon parcours</button>
            <a class="btn_cv" href="/assets/pdf/CV_GUIGGIA--MILON_Luhan.pdf" target="_blank" rel="noopener noreferrer">
                Mon CV
            </a>
            <button id="btn_a_propos" class="btn-open-modal" data-target="#propos-overlay">
                À propos de moi
            </button>
        </section>
    </header>

    <section id="parcours-overlay">
        <div class="parcours-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Mon parcours</h2>
            <img src="img/pilote.png" alt="Luhan pilote un avion" style="width: 50%; height: 250px; object-fit: cover;">
            <p class="bulle-texte">"Un billet pour visiter mon aventure ?"</p>
            <h3>Mon parcours académique</h3>
            <a href="https://lycee-ledantec.fr/formation/bac-industriel-sti2d/">Lycée Félix Le Dantec - BAC STI2D
                (SIN)</a>
            <a
                href="https://formations.univ-rennes.fr/mention/bachelor-universitaire-de-technologie-mention-informatique">IUT
                de Lannion - BUT Informatique (en cours)</a>
            <h3>Mon parcours professionnel</h3>
            <button id="btnConnexing" class="btn-open-modal" data-target="#connexing-overlay">Connexing</button>
            <button id="btnEnvoliis" class="btn-open-modal" data-target="#envoliis-overlay">EnvolIis</button>
        </div>

        <div id="connexing-overlay">
            <div class="connexing-content">
                <button class="btnfermer" aria-label="Fermer la fenêtre">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <img src="img/Connexing.png" alt="Logo de Connexing">
                <p>En 2020, j’ai eu l’opportunité de faire un stage d’observation dans l’entreprise Connexing. <br>
                    Pendant une semaine j’ai pu voir les différentes missions d’un DSI.<br>
                    Grâce à ce stage j'ai pu accroître mes connaissances en informatique(notamment sur le fonctionnement
                    d’un serveur).<br>
                    J’ai également pu voir la partie marketing et eu la chance de pouvoir publier un article sur le blog
                    de l’entreprise.</p>
                <a href="https://www.connexing.fr">Lien vers Connexing</a>
            </div>
        </div>

        <div id="envoliis-overlay">
            <div class="envoliis-content">
                <button class="btnfermer" aria-label="Fermer la fenêtre">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <img src="img/envoliis.png" alt="Logo de Envoliis">
                <p>En 2021, j'ai eu une nouvelle opportunité de faire un stage d'observation dans l'entreprise Envoliis.
                    <br>
                    Durant la semaine qu'ils m'ont offert, j'ai pu observé plusieurs métiers tel qu'informaticien,
                    etc...<br>
                    Cela m'a permis de découvrir les composants de serveur, d'avoir eu la chance de visiter un
                    datacenter et de déplacer des machines virtuels.
                </p>
                <a href="https://www.envoliis.com">Lien vers EnvolIis</a>
            </div>
        </div>
    </section>

    <section id="propos-overlay">
        <div class="propos-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>À propos de moi</h2>

            <div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.33325 3.33325L27.4999 9.16659L29.9999 21.6666L21.6666 29.9999L9.16659 27.4999L3.33325 3.33325ZM3.33325 3.33325L15.9766 15.9766M19.9999 31.6666L31.6666 19.9999L36.6666 24.9999L24.9999 36.6666L19.9999 31.6666ZM21.6666 18.3333C21.6666 20.1742 20.1742 21.6666 18.3333 21.6666C16.4923 21.6666 14.9999 20.1742 14.9999 18.3333C14.9999 16.4923 16.4923 14.9999 18.3333 14.9999C20.1742 14.9999 21.6666 16.4923 21.6666 18.3333Z"
                        stroke="#FE9B01" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h3>Créatif</h3>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path
                        d="M3.33325 3.33325L27.4999 9.16659L29.9999 21.6666L21.6666 29.9999L9.16659 27.4999L3.33325 3.33325ZM3.33325 3.33325L15.9766 15.9766M19.9999 31.6666L31.6666 19.9999L36.6666 24.9999L24.9999 36.6666L19.9999 31.6666ZM21.6666 18.3333C21.6666 20.1742 20.1742 21.6666 18.3333 21.6666C16.4923 21.6666 14.9999 20.1742 14.9999 18.3333C14.9999 16.4923 16.4923 14.9999 18.3333 14.9999C20.1742 14.9999 21.6666 16.4923 21.6666 18.3333Z"
                        stroke="#FE9B01" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h3>Adaptation</h3>
            </div>
            <div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="40" height="40" fill="url(#pattern0_378_94)" />
                    <defs>
                        <pattern id="pattern0_378_94" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_378_94" transform="scale(0.00195312)" />
                        </pattern>
                        <image id="image0_378_94" width="512" height="512" preserveAspectRatio="none"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
                <h3>Maîtrise de soi</h3>
            </div>

            <p>À 19 ans, je suis actuellement en études pour travailler dans le développement logiciel et, plus tard,
                j’espère évoluer dans le domaine du jeu vidéo.</p>
            <img src="img/Perfect.png" alt="Luhan qui vise la perfection">

            <p>Durant mon cursus en BUT Informatique à l’IUT de Lannion, j’apprends les bases de plusieurs types de
                langages tels que le bas niveau (C, Assembleur), le Web (HTML, CSS, JS), les bases de données
                (PostgreSQL, MongoDB), le scripting (Bash, PHP) et la Programmation Orientée Objet (Java).</p>
            <img src="img/programmation.png" alt="Luhan qui code en peignoir">

            <p>De mon côté, j’apprends à utiliser des logiciels pour concevoir mon travail (Figma), gérer mes projets
                (Git, Teams, Jira), et présenter mes travaux dans divers formats (PowerPoint, Premiere Pro, Photoshop).
            </p>
            <img src="img/photographie.png" alt="Photographie d'un tunnel d'arbres amenant à la lumière du soleil">

            <p>Mes hobbies m’aident également à continuer de m’améliorer au quotidien. Je pratique la photographie
                occasionnellement avec un Panasonic DMC-FZ48, et j'utilise le logiciel Lightroom pour retoucher mes
                photos.</p>
            <img src="img/photographie_1.png" alt="Photographie de Luhan en train de prendre un paysage en photo">

            <p>J’ai pratiqué le sport en compétition plus jeune, comme le judo et l'athlétisme, mais j’ai décidé de
                passer du côté loisir pour me consacrer à mes études.</p>
            <img src="img/judo.png" alt="Luhan qui s'accroche au bord de l'overlay">

            <p>"Et je m'accroche à la vie !"<br>-Luhan</p>

        </div>
    </section>

    <section class="competence">
        <h2>Mes compétences</h2>
        <h3>Hard Skills</h3>
        <section class="hardskills">
            <div>
                <h4>Programmation</h4>
                <section class="langage">
                    <figure>
                        <img src="img/icons8-c-48.png" alt="Langage C">
                        <figcaption>C</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-logo-java-coffee-cup-48.png" alt="Langage Java">
                        <figcaption>Java</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-python-48.png" alt="Langage Python">
                        <figcaption>Python</figcaption>
                    </figure>
                </section>
            </div>
            <div>
                <h4>Développement Web</h4>
                <section class="langage">
                    <figure>
                        <img src="img/icons8-html-48.png" alt="HTML 5">
                        <figcaption>HTML</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-css-48.png" alt="CSS 3">
                        <figcaption>CSS</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-php-48.png" alt="PHP">
                        <figcaption>PHP</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-javascript-48.png" alt="JS">
                        <figcaption>JavaScript</figcaption>
                    </figure>
                </section>
            </div>
            <div>
                <h4>Base De Données</h4>
                <section class="langage">
                    <figure>
                        <img src="img/icons8-postgresql-48.png" alt="PostgreSQL">
                        <figcaption>PostgreSQL</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-mongodb-48.png" alt="MongoDB">
                        <figcaption>MongoDB</figcaption>
                    </figure>
                </section>
            </div>
            <div>
                <h4>Automatisation</h4>
                <section class="langage">
                    <figure>
                        <img src="img/icons8-frapper-48.png" alt="BASH">
                        <figcaption>BASH</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-docker-48.png" alt="Docker">
                        <figcaption>Docker</figcaption>
                    </figure>
                </section>
            </div>
            <div>
                <h4>Travail Collaboratif</h4>
                <section class="langage">
                    <figure>
                        <img src="img/icons8-git-48.png" alt="GIT">
                        <figcaption>GIT</figcaption>
                    </figure>
                    <figure>
                        <img src="img/icons8-microsoft-teams-2019-48.png" alt="Teams">
                        <figcaption>Teams</figcaption>
                    </figure>
                    <figure>
                        <img src="img/jira.png" alt="Jira">
                        <figcaption>Jira</figcaption>
                    </figure>
                </section>
            </div>
        </section>
        <h3>Compétences Académiques</h3>
        <section class="compacad">
            <button class="btn-open-modal" data-target="#comp-dev-overlay">Réaliser un développement
                d'application</button>
            <button class="btn-open-modal" data-target="#comp-optim-overlay">Optimiser des applications
                informatiques</button>
            <button class="btn-open-modal" data-target="#comp-sys-overlay">Administrer des systèmes informatiques
                complexes</button>
            <button class="btn-open-modal" data-target="#comp-bdd-overlay">Gérer les données de l'information</button>
            <button class="btn-open-modal" data-target="#comp-projet-overlay">Conduire un projet</button>
            <button class="btn-open-modal" data-target="#comp-equipe-overlay">Travailler dans une équipe
                informatique</button>
        </section>
    </section>

    <section class="projet">
        <h2>Mon Portfolio</h2>

        <h3>Mes Projets Personnels</h3>
        <div class="projet-grid">
            <button class="btn-open-modal projet-card" data-target="#projet-borne-overlay">
                <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Borne d'arcade">
                <div class="projet-info">
                    <h4>Borne d'Arcade</h4>
                    <p>Linux & Hardware</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-portfolio-overlay">
                <img src="img/portfolio.png" alt="Portfolio web">
                <div class="projet-info">
                    <h4>Portfolio</h4>
                    <p>HTML & SCSS</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-flipper-table-overlay">
                <img src="img/flipper_de_table.jpg" alt="Flipper de table">
                <div class="projet-info">
                    <h4>Flipper de Table</h4>
                    <p>C++ & Électronique</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-serveur-overlay">
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Baie de serveurs">
                <div class="projet-info">
                    <h4>Serveur Maison</h4>
                    <p>Docker & Réseau</p>
                </div>
            </button>
        </div>

        <h3>Mes Projets Académiques</h3>
        <div class="projet-grid">
            <button class="btn-open-modal projet-card" data-target="#projet-marketplace-overlay">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Paiement en ligne">
                <div class="projet-info">
                    <h4>App Marketplace</h4>
                    <p>Full Stack & Méthode Agile</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-snake-overlay">
                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Code type Matrix">
                <div class="projet-info">
                    <h4>Jeu Snake</h4>
                    <p>C</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-jo-web-overlay">
                <img src="img/jo.png" alt="Design Web">
                <div class="projet-info">
                    <h4>Site Web JO 2024</h4>
                    <p>Conception & Développement</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-a2f-overlay">
                <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Cadenas et cybersécurité">
                <div class="projet-info">
                    <h4>Système d'A2F</h4>
                    <p>PHP & JS</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-pokegest-overlay">
                <img src="https://images.unsplash.com/photo-1613771404784-3a5686aa2be3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Figurines Pokémon">
                <div class="projet-info">
                    <h4>Pokégest</h4>
                    <p>JavaScript</p>
                </div>
            </button>

            <button class="btn-open-modal projet-card" data-target="#projet-ticketing-overlay">
                <img src="https://images.unsplash.com/photo-1531604250646-2f0e818c4f06?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Casque de support client">
                <div class="projet-info">
                    <h4>App de Ticketing</h4>
                    <p>Python & IA Générative</p>
                </div>
            </button>
        </div>

        <h3>Mes Projets Professionnels</h3>
        <div class="projet-grid">
            <button class="btn-open-modal projet-card" data-target="#projet-pinball-overlay">
                <img src="img/frenchtouchpinball.jpg" alt="Flipper classique">
                <div class="projet-info">
                    <h4>Flipper The Invaders</h4>
                    <p>French Touch Pinball</p>
                </div>
            </button>
            <button class="btn-open-modal projet-card" data-target="#projet-etvous-overlay">
                <img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Bureau et ordinateur">
                <div class="projet-info">
                    <h4>Et vous ?</h4>
                    <p>N'hésitez pas à me contacter !</p>
                </div>
            </button>
        </div>
    </section>
    <section id="projet-pinball-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>French Touch Pinball</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5pkDqPWzLtM?si=guM-9lkUUk8wCdyl"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>J'ai travaillé sur ce Flipper The Invaders lors d'un stage de 2 mois pour ma deuxième année de BUT
                Informatique.<br>
                J'ai réalisé à l'aide de 2 collègues un mini-jeu (video mode) qui mélange le concept d'un casse-brique
                et Space Invaders tout en gardant le côté Flipper</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/j2efeJeTfEU?si=fU1TtJTjj5oXhXhy"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>J'ai également créer de zéro un PCB pour gérer des LEDs afin de produire des animations synchronisé avec
                le flipper avec un code Micro-Python</p>
        </div>
    </section>

    <section id="projet-marketplace-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Application Marketplace</h2>
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Interface Marketplace">
            <p>Développement d'une application de type Marketplace dans le cadre de mon cursus universitaire, réalisée
                en appliquant la <strong>méthodologie Agile</strong> pour une gestion de projet efficace et itérative.
            </p>
        </div>
    </section>

    <section id="projet-borne-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Borne d'Arcade</h2>
            <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Borne Arcade">
            <p>Conception et montage complet d'une borne d'arcade de zéro. Création des plans, choix des composants
                électroniques et mécaniques, assemblage et configuration logicielle.<br>
                Utilisation de boutons et joysticks
                <strong>Sanwa</strong> et configuration logicielle sur carte <strong>Brook / Raspberry Pi Pico</strong>
                pour garantir une latence minimale attendu pour un joueur de jeu de combat comme moi. (Je suis TEKKEN
                EMPEROR si jamais 💪💪)
            </p>
        </div>
    </section>
    <section id="projet-flipper-table-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Flipper de Table</h2>

            <div class="carousel-container">
                <div class="carousel-track" id="flipper-track">
                    <img src="img/flipper_de_table.jpg" alt="Flipper">
                    <img src="img/affiche_flipper.png" alt="Affiche">
                </div>
                <button class="carousel-btn prev" id="flipper-prev">&#10094;</button>
                <button class="carousel-btn next" id="flipper-next">&#10095;</button>
            </div>

            <p>Le but de ce flipper de table était de concevoir un flipper peu encombrant, accessible.<br>
                Il a été réalisé en C++ et utilise une carte Arduino MEGA pour le faire fonctionner.<br>
                Mon travail a été de faire fonctionner toutes les parties du flipper(bumper,écran,etc...) ainsi que de
                coder le système de jeu.<br>
                Le flipper a été conçu pour être transportable et facilement démontable.<br>
                Nous avons participé avec mon équipe aux Olympiades des Sciences de l'Ingénieur, c'était une très bonne
                expérience avec des choses à en tirer.</p>
        </div>
    </section>

    <section id="projet-serveur-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Serveur Maison</h2>
            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Serveur Raspberry">
            <p>Mise en place d'un serveur domestique sur un <strong>Raspberry Pi 4B</strong> en utilisant <strong>Ubuntu
                    Server</strong>. Gestion de
                l'infrastructure réseau locale et déploiement de conteneurs <strong>Docker</strong> grâce à
                <strong>Portainer</strong> pour différents
                services auto-hébergés.</p>
        </div>
    </section>

    <section id="projet-portfolio-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Mon Portfolio</h2>
            <img src="img/portfolio.png" alt="Code HTML">
            <p>Conception et développement de ce site web de zéro (from scratch). Utilisation de <strong>HTML
                    sémantique</strong>, de <strong>JavaScript vanilla</strong> pour les animations de modales, et de
                <strong>SCSS</strong> avec variables et mixins pour une architecture CSS propre et maintenable.
            </p>
        </div>
    </section>

    <section id="projet-snake-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Jeu Snake</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WhxMqQhnCoE?si=Z4HWOhZvMjB1sxvM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Développement du célèbre jeu Snake en langage <strong>C</strong>, abordant la gestion de la mémoire, les
                pointeurs et l'affichage bas niveau dans le terminal.</p>
        </div>
    </section>


    <section id="projet-jo-web-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Site Web JO 2024</h2>
            <img src="img/jo2.png" alt="Maquette de site web" style="width: 100%; height: 660px; object-fit: cover;">
            <p>Recueil des besoins utilisateur afin de créer une maquette <strong>Figma</strong> ainsi qu'un site web
                <strong>responsive</strong> à l'image des JO 2024</p>
        </div>
    </section>

    <section id="projet-a2f-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Système d'A2F</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WQe56tWeVgQ?si=VXHutuHK8ctk10tO"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Implémentation d'un système d'Authentification à Double Facteur (2FA) sécurisé en utilisant
                <strong>PHP</strong> côté serveur avec le framework OTPHP et <strong>JavaScript</strong> pour la gestion
                côté client.
            </p>
            <a href="https://github.com/Luhan-gui/Authentikator" target="_blank" rel="noopener noreferrer"
                style="color: #FE9B01; text-decoration: underline; font-weight: bold;">Voir le repo Github</a>
        </div>
    </section>

    <section id="projet-pokegest-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Pokégest</h2>
            <img src="img/poke.png" alt="Pokégest">
            <p>
                <strong>Pokédex Interactif & Simulateur de Combats</strong><br><br>
                PokéGest est une application web dynamique développée en <strong>HTML/CSS</strong>,
                <strong>JavaScript</strong> et <strong>jQuery</strong>. Conçu comme un outil d'analyse complet, ce
                projet permet d'explorer, trier et filtrer instantanément une large base de données de Pokémon (par nom,
                type et statistiques) via une interface fluide et paginée.<br><br>
                Sous le capot, l'application exploite une architecture <strong>Orientée Objet (POO)</strong>. Le code
                intègre un moteur algorithmique avancé capable d'analyser les faiblesses, de déterminer les meilleures
                attaques et de simuler des combats automatisés en croisant de multiples statistiques. Une démonstration
                concrète de logique algorithmique et de manipulation avancée du DOM.<br><br>
                <a href="https://medjed-dev.fr/pokegest/index.html" target="_blank" rel="noopener noreferrer"
                    style="color: #FE9B01; text-decoration: underline; font-weight: bold;">Voir le site en direct</a>
                <a href="https://github.com/Luhan-gui/Pokegest" target="_blank" rel="noopener noreferrer"
                    style="color: #FE9B01; text-decoration: underline; font-weight: bold;">Voir le repo Github</a>
            </p>
        </div>
    </section>

    <section id="projet-ticketing-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>App de Ticketing</h2>
            <img src="https://raw.githubusercontent.com/Marcennaji/architecture-logicielle-BUT2-ressources/main/docs/architecture/01_vue_conceptuelle.png"
                alt="Schéma d'architecture hexagonale">
            <p>
                <strong>Gestionnaire de Tickets & Architecture Hexagonale</strong><br><br>
                Ticketing Starter est une application de gestion de tickets développée dans le cadre de mon cursus en
                BUT Informatique. Conçu entièrement en <strong>Python</strong> en exploitant le framework
                <strong>FastAPI</strong>, ce projet pédagogique se concentre sur la création d'une base logicielle
                robuste, maintenable et évolutive.<br><br>
                Sous le capot, le projet repose sur une <strong>Architecture Hexagonale (Ports & Adapters)</strong>. Le
                code est structuré de manière concentrique pour isoler strictement la logique métier des dépendances
                externes (comme l'API REST ou la base de données SQLite). L'application du principe d'inversion de
                dépendances garantit que le cœur du programme ne dépend d'aucun framework. Ce projet illustre également
                ma rigueur de développement grâce à l'intégration d'une suite de tests (avec <strong>pytest</strong>) et
                le respect automatisé des normes de code <strong>PEP 8</strong>.<br><br>
                <a href="https://github.com/Luhan-gui/ticketing/tree/main" target="_blank" rel="noopener noreferrer"
                    style="color: #FE9B01; text-decoration: underline; font-weight: bold;">Voir le code source sur
                    GitHub</a>
            </p>
        </div>
    </section>

    <section id="projet-etvous-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Contactez-moi !</h2>
            <img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Espace de travail et contact">
            <p>Mon profil vous intéresse ? N'hésitez pas à me contacter sur <strong>LinkedIn</strong> ou via
                <strong>GitHub</strong> pour discuter de futures opportunités ou de projets passionnants !
            </p>
        </div>
    </section>
    <section id="comp-dev-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Développement d'application</h2>
            <p>
                <strong>Conception, codage et validation d'architectures logicielles.</strong><br><br>
                Cette compétence clé du BUT Informatique valide la capacité à concevoir et implémenter des solutions
                robustes répondant à des besoins métiers complexes. Elle couvre aussi bien la programmation orientée
                objet que le développement d'applications web modernes.<br><br>
                Elle implique la maîtrise des cycles de vie du logiciel, la mise en œuvre de patterns d'architecture
                (comme l'architecture hexagonale ou le modèle MVC), la création d'API structurées (FastAPI, Java) et la
                mise en place de tests unitaires rigoureux pour garantir la qualité de livraison.
            </p>
        </div>
    </section>

    <section id="comp-optim-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Optimiser des applications</h2>
            <p>
                <strong>Analyse algorithmique et maîtrise des performances logicielles.</strong><br><br>
                L'optimisation consiste à évaluer, mesurer et améliorer l'efficacité d'un programme informatique. Cela
                passe par l'analyse fine de la complexité temporelle (vitesse d'exécution) et spatiale (empreinte en
                mémoire vive).<br><br>
                Cette compétence se traduit par le choix judicieux de structures de données adaptées, l'implémentation
                d'algorithmes complexes de recherche ou de pathfinding (notamment en langage C ou C++), et la
                refactorisation de code existant pour rationaliser l'utilisation des ressources système.
            </p>
        </div>
    </section>

    <section id="comp-sys-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Administrer des systèmes complexes</h2>
            <p>
                <strong>Déploiement, sécurisation et automatisation d'infrastructures.</strong><br><br>
                Cette compétence englobe la gestion des systèmes d'exploitation communicants et des architectures
                réseaux. Elle demande une forte capacité à virtualiser, isoler et orchestrer des services de manière
                fiable.<br><br>
                Les compétences acquises permettent de configurer des serveurs Linux sécurisés, d'automatiser des tâches
                récurrentes d'administration via du scripting lourd (BASH), de gérer des réseaux locaux et de déployer
                des architectures conteneurisées avec Docker pour l'hébergement d'applications.
            </p>
        </div>
    </section>

    <section id="comp-bdd-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Gérer les données de l'information</h2>
            <p>
                <strong>Modélisation, requêtage et sécurisation des bases de données.</strong><br><br>
                L'information est au cœur de tout système informatique. Cette compétence valide la maîtrise du cycle de
                vie des données, depuis leur modélisation conceptuelle jusqu'à leur exploitation en production.<br><br>
                Elle intègre la conception de schémas relationnels optimisés (PostgreSQL) et non-relationnels (MongoDB),
                l'écriture de requêtes complexes pour extraire de l'information efficacement, ainsi que l'administration
                des systèmes de gestion de bases de données (SGBD) dans le respect des contraintes de sécurité et
                d'intégrité.
            </p>
        </div>
    </section>

    <section id="comp-projet-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Conduire un projet</h2>
            <p>
                <strong>Planification, méthodologies de suivi et gestion de la relation client.</strong><br><br>
                Piloter un projet informatique demande de l'organisation et une méthodologie rigoureuse pour aligner le
                développement technique avec les besoins fonctionnels et financiers d'un client.<br><br>
                Cette compétence se traduit par la mise en œuvre de méthodes agiles (Scrum), la définition de jalons
                clairs, l'estimation des charges de travail et l'utilisation d'outils professionnels de suivi et de
                planification de tâches comme Jira pour structurer l'avancement des livrables.
            </p>
        </div>
    </section>

    <section id="comp-equipe-overlay" class="overlay-projet">
        <div class="projet-overlay-content">
            <button class="btnfermer" aria-label="Fermer la fenêtre">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <h2>Travailler dans une équipe informatique</h2>
            <p>
                <strong>Collaboration, communication technique et intégration continue.</strong><br><br>
                Le développement moderne ne se fait jamais seul. Savoir collaborer au sein d'une équipe technique est
                indispensable pour mener à bien des projets d'envergure sans conflits de code ni pertes
                d'informations.<br><br>
                Elle implique l'utilisation avancée d'outils de gestion de version collective (Git et les plateformes
                d'hébergement de dépôts comme GitHub), l'adoption de conventions de nommage partagées (comme la PEP 8),
                et une communication transparente à travers des outils collaboratifs comme Microsoft Teams.
            </p>
        </div>
    </section>
    <footer>
        <p>Merci de votre visite !</p>
        <p>Si jamais vous avez des questions, n'hésitez pas à me contacter par mail !</p>
        <div class="contact-mail">
            <a href="mailto:luhan.guiggia@medjed-dev.fr">luhan.guiggia@medjed-dev.fr</a>
        </div>
        <p>Site web réalisé par Luhan Guiggia--Milon. Hébergé chez OVH Cloud</p>
    </footer>
</body>
<script>
    // ==========================================
    // 1. GESTION DES MODALES (OVERLAYS)
    // ==========================================
    const openButtons = document.querySelectorAll('.btn-open-modal');
    const closeButtons = document.querySelectorAll('.btnfermer');

    // Action pour OUVRIR les modales
    openButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');
            if (targetId) {
                const modal = document.querySelector(targetId);
                if (modal) {
                    modal.classList.add('active');
                }
            }
        });
    });

    // Action pour FERMER les modales (via la croix)
    closeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // On cherche le conteneur principal de l'overlay
            const modal = btn.closest('.overlay-projet, [id$="-overlay"]');
            if (modal) {
                modal.classList.remove('active');
            }
        });
    });

    // Optionnel mais très pratique : fermer l'overlay en cliquant dans le vide (sur le fond noir)
    const allOverlays = document.querySelectorAll('.overlay-projet, [id$="-overlay"]');
    allOverlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                overlay.classList.remove('active');
            }
        });
    });

    // ==========================================
    // 2. GESTION DU CARROUSEL FLIPPER DE TABLE
    // ==========================================
    const track = document.getElementById('flipper-track');
    const btnPrev = document.getElementById('flipper-prev');
    const btnNext = document.getElementById('flipper-next');
    let currentIndex = 0;

    // On vérifie que le carrousel existe bien sur la page avant d'activer le code
    if (track && btnPrev && btnNext) {
        // On compte automatiquement combien d'images sont présentes dans le carrousel
        const images = track.querySelectorAll('img');
        const totalImages = images.length;

        // Fonction pour déplacer les images
        const updateCarousel = () => {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
        };

        // Clic sur le bouton Suivant
        btnNext.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalImages;
            updateCarousel();
        });

        // Clic sur le bouton Précédent
        btnPrev.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateCarousel();
        });
    }
</script>

</html>