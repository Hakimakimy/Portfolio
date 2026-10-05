<?php
header('Content-Type: text/html; charset=utf-8');

$studentName = "Hakimakimy";
$academicYear = "2025/2026";
$specialization = "Développement Digital - Option Web / Full-Stack";

$modules = [
    [
        'id' => 'M201',
        'code' => 'M201',
        'title' => "Préparation d'un projet web",
        'category' => 'management',
        'desc' => "Analyse des besoins, élaboration du cahier des charges, modélisation UML, wireframing et charte graphique.",
        'techs' => ['UML', 'Figma', 'Agile', 'Cahier des charges'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M201+Wireframe+Spec'
    ],
    [
        'id' => 'M202',
        'code' => 'M202',
        'title' => "Approche agile",
        'category' => 'management',
        'desc' => "Gestion de projet selon la méthodologie Scrum, planification des Sprints, backlog utilisateur et daily standups.",
        'techs' => ['Scrum', 'Trello', 'Jira', 'Kanban'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M202+Scrum+Board'
    ],
    [
        'id' => 'M203',
        'code' => 'M203',
        'title' => "Intégration web",
        'category' => 'frontend',
        'desc' => "Création d'interfaces web modernes, responsive design avec HTML5, CSS3, JavaScript ES6+ et frameworks CSS.",
        'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M203+Integration+CSS'
    ],
    [
        'id' => 'M204',
        'code' => 'M204',
        'title' => "Développement web dynamique",
        'category' => 'backend',
        'desc' => "Conception d'applications web serveur sécurisées avec PHP, Laravel, Node.js, Express, POO, architecture MVC et MySQL.",
        'techs' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PDO'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M204+Laravel+Backend'
    ],
    [
        'id' => 'M205',
        'code' => 'M205',
        'title' => "Développement front-end",
        'category' => 'frontend',
        'desc' => "Création de Single Page Applications (SPA) dynamiques avec React.js / Vue.js, gestion d'état (Redux/Context API) et API REST.",
        'techs' => ['React.js', 'Redux', 'REST API', 'Tailwind'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M205+React+App'
    ],
    [
        'id' => 'M206',
        'code' => 'M206',
        'title' => "Création d'une application mobile",
        'category' => 'mobile',
        'desc' => "Développement mobile multiplateforme avec React Native / Flutter, intégration des composants natifs et consommation d'APIs.",
        'techs' => ['React Native', 'Flutter', 'Mobile UI', 'Expo'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M206+Mobile+Screen'
    ],
    [
        'id' => 'M207',
        'code' => 'M207',
        'title' => "Sécurité d'un site web",
        'category' => 'management',
        'desc' => "Mise en œuvre des bonnes pratiques de cybersécurité, prévention OWASP (XSS, SQLi, CSRF), chiffrement et authentification JWT.",
        'techs' => ['OWASP', 'JWT', 'HTTPS', 'Encryption'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M207+Security+Audit'
    ],
    [
        'id' => 'M208',
        'code' => 'M208',
        'title' => "Cloud & DevOps",
        'category' => 'mobile',
        'desc' => "Conteneurisation d'applications avec Docker, hébergement cloud, intégration/déploiement continu (CI/CD) et administration serveur.",
        'techs' => ['Docker', 'CI/CD', 'Git', 'Vercel/AWS'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M208+Docker+DevOps'
    ],
    [
        'id' => 'M209',
        'code' => 'M209',
        'title' => "Projet de fin d'études (PFE)",
        'category' => 'backend',
        'desc' => "Projet de synthèse complet intégrant l'ensemble des compétences acquises durant la formation en Développement Digital.",
        'techs' => ['Full-Stack', 'Laravel/React', 'PFE', 'UML'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M209+PFE+Dashboard'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
OFPPT ISTA Portfolio |
<?php echo htmlspecialchars($studentName); ?>
</title>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
>

<style>

/* =====================================================
   ROOT THEME - WHITE / ROSE / BURGUNDY
===================================================== */

:root {

    --bg-dark: #ffffff;

    --deep-green: #5a2140;

    --luxury-brown: #c75b87;
    --luxury-brown-hover: #a8446c;

    --accent-green: #c94f82;

    --text-light: #1a0d16;
    --text-muted: #6b5360;

    --glass-bg:
        rgba(255, 255, 255, 0.85);

    --card-bg:
        rgba(255, 255, 255, 0.96);

    --border-color:
        rgba(112, 38, 77, 0.25);

    --shadow:
        0 15px 35px rgba(90, 33, 64, 0.15);

    --font-code:
        'Fira Code',
        'Consolas',
        monospace;

    --font-sans:
        'Inter',
        -apple-system,
        BlinkMacSystemFont,
        sans-serif;
}


/* =====================================================
   SECOND THEME
===================================================== */

body.purple-mode {

    --bg-dark: #ffffff;

    --deep-green: #f8e8ef;

    --luxury-brown: #c75b87;
    --luxury-brown-hover: #a8446c;

    --accent-green: #c94f82;

    --text-light: #1a0d16;
    --text-muted: #6b5360;

    --glass-bg:
        rgba(255, 255, 255, 0.9);

    --card-bg:
        rgba(255, 255, 255, 0.96);

    --border-color:
        rgba(199, 91, 135, 0.3);

    --shadow:
        0 15px 35px rgba(199, 91, 135, 0.15);
}


/* =====================================================
   GLOBAL
===================================================== */

* {

    box-sizing: border-box;

    scroll-behavior: smooth;
}


body {

    font-family:
        var(--font-sans);

    background-color:
        #ffffff;

    color:
        var(--text-light);

    margin: 0;

    overflow-x: hidden;

    transition:
        background-color 0.5s ease,
        color 0.5s ease;

    min-height: 100vh;
}


/* =====================================================
   FLOATING BACKGROUND
===================================================== */

#float-container {

    position: fixed;

    top: 0;
    left: 0;

    width: 100vw;
    height: 100vh;

    pointer-events: none;

    z-index: 1;

    overflow: hidden;
}


.gold-leaf {

    position: absolute;

    background:
        linear-gradient(
            135deg,
            var(--luxury-brown),
            #ffdce9
        );

    width: 8px;
    height: 10px;

    opacity: 0.25;

    border-radius:
        50% 0 50% 0;

    animation:
        luxuryFloat linear infinite;
}


@keyframes luxuryFloat {

    0% {

        transform:
            translateY(105vh)
            rotate(0deg);

        opacity: 0;
    }

    20% {
        opacity: 0.4;
    }

    80% {
        opacity: 0.4;
    }

    100% {

        transform:
            translateY(-10vh)
            rotate(720deg);

        opacity: 0;
    }
}


/* =====================================================
   HEADER
===================================================== */

header {

    background:
        rgba(255, 255, 255, 0.92);

    backdrop-filter:
        blur(12px);

    -webkit-backdrop-filter:
        blur(12px);

    padding:
        0 5%;

    display: flex;

    justify-content:
        space-between;

    align-items:
        center;

    border-bottom:
        1px solid var(--border-color);

    position: sticky;

    top: 0;

    z-index: 1000;

    height: 75px;

    transition:
        background 0.5s ease;
}


body.purple-mode header {

    background:
        rgba(255, 255, 255, 0.95);
}


/* =====================================================
   LOGO
===================================================== */

.logo {

    font-family:
        var(--font-code);

    font-weight:
        800;

    color:
        var(--luxury-brown);

    letter-spacing:
        -0.5px;

    font-size:
        1.3rem;

    display:
        flex;

    align-items:
        center;

    gap:
        8px;

    text-decoration:
        none;
}


.logo span.badge {

    font-size:
        0.65rem;

    background:
        rgba(199, 91, 135, 0.1);

    border:
        1px solid var(--luxury-brown);

    color:
        var(--luxury-brown);

    padding:
        2px 8px;

    border-radius:
        12px;

    letter-spacing:
        0.5px;
}


/* =====================================================
   NAVIGATION
===================================================== */

nav {

    display:
        flex;

    align-items:
        center;

    gap:
        12px;
}


nav a,
.dropdown-btn {

    text-decoration:
        none;

    color:
        var(--text-light);

    padding:
        8px 14px;

    font-weight:
        500;

    font-size:
        0.88rem;

    transition:
        0.3s;

    cursor:
        pointer;

    border:
        none;

    background:
        none;

    border-radius:
        6px;

    display:
        flex;

    align-items:
        center;

    gap:
        6px;
}


nav a:hover,
.dropdown-btn:hover {

    color:
        var(--luxury-brown);

    background:
        rgba(199, 91, 135, 0.06);
}


/* =====================================================
   THEME BUTTON
===================================================== */

.theme-toggle-btn {

    background:
        linear-gradient(
            135deg,
            var(--luxury-brown),
            #a84d75
        );

    color:
        white;

    border:
        none;

    padding:
        8px 16px;

    border-radius:
        20px;

    cursor:
        pointer;

    font-size:
        0.75rem;

    font-weight:
        700;

    transition:
        0.3s;

    display:
        flex;

    align-items:
        center;

    gap:
        6px;

    box-shadow:
        0 4px 12px rgba(90,33,64,0.15);
}


.theme-toggle-btn:hover {

    transform:
        translateY(-2px);

    filter:
        brightness(1.1);
}


/* =====================================================
   DROPDOWN
===================================================== */

.dropdown {
    position: relative;
}


.dropdown-content {

    display: none;

    position: absolute;

    top: 50px;
    right: 0;

    background:
        var(--card-bg);

    backdrop-filter:
        blur(15px);

    min-width:
        280px;

    border:
        1px solid var(--border-color);

    border-radius:
        12px;

    box-shadow:
        var(--shadow);

    animation:
        slideUp 0.3s ease;

    max-height:
        420px;

    overflow-y:
        auto;

    z-index:
        1001;

    padding:
        6px 0;
}


.dropdown-content.show {
    display: block;
}


@keyframes slideUp {

    from {

        opacity: 0;

        transform:
            translateY(10px);
    }

    to {

        opacity: 1;

        transform:
            translateY(0);
    }
}


.dropdown-content a {

    padding:
        10px 18px;

    border-bottom:
        1px solid rgba(0,0,0,0.04);

    font-family:
        var(--font-code);

    font-size:
        0.8rem;

    display:
        flex;

    justify-content:
        space-between;

    align-items:
        center;

    color:
        var(--text-light);

    text-decoration:
        none;
}


.dropdown-content a:hover {

    background:
        rgba(199,91,135,0.1);

    color:
        var(--accent-green);
}


/* =====================================================
   HERO
===================================================== */

.hero {

    min-height:
        65vh;

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    align-items:
        center;

    background:
        radial-gradient(
            circle at center,
            #f9e6ee 0%,
            #ffffff 75%
        );

    padding:
        60px 20px 40px;

    text-align:
        center;

    position:
        relative;

    transition:
        background 0.5s ease;
}


body.purple-mode .hero {

    background:
        radial-gradient(
            circle at center,
            #f8e3ed 0%,
            #ffffff 75%
        );
}


.hero-badge {

    background:
        rgba(199,91,135,0.08);

    border:
        1px solid var(--luxury-brown);

    color:
        var(--luxury-brown);

    padding:
        6px 16px;

    border-radius:
        20px;

    font-family:
        var(--font-code);

    font-size:
        0.8rem;

    margin-bottom:
        20px;

    letter-spacing:
        1px;

    display:
        inline-flex;

    align-items:
        center;

    gap:
        8px;
}


.hero h1 {

    font-size:
        3.5rem;

    margin:
        0;

    font-weight:
        900;

    letter-spacing:
        -1.5px;

    line-height:
        1.1;

    color:
        #24141c;
}


.hero h1 span {

    color:
        var(--luxury-brown);
}


.hero p {

    font-family:
        var(--font-code);

    color:
        var(--accent-green);

    font-size:
        1rem;

    margin:
        20px 0 35px;

    max-width:
        650px;

    line-height:
        1.6;
}


.hero-actions {

    display:
        flex;

    gap:
        15px;

    flex-wrap:
        wrap;

    justify-content:
        center;
}


/* =====================================================
   BUTTONS
===================================================== */

.btn-main {

    background:
        linear-gradient(
            135deg,
            var(--luxury-brown),
            #a84d75
        );

    color:
        white;

    padding:
        14px 32px;

    border-radius:
        8px;

    text-decoration:
        none;

    font-weight:
        700;

    box-shadow:
        0 10px 20px rgba(90,33,64,0.15);

    transition:
        0.3s;

    display:
        inline-flex;

    align-items:
        center;

    gap:
        10px;

    border:
        none;

    cursor:
        pointer;
}


.btn-main:hover {

    transform:
        translateY(-3px)
        scale(1.02);

    filter:
        brightness(1.1);
}


.btn-secondary {

    background:
        white;

    color:
        var(--text-light);

    border:
        1px solid var(--border-color);

    padding:
        14px 28px;

    border-radius:
        8px;

    text-decoration:
        none;

    font-weight:
        600;

    transition:
        0.3s;

    display:
        inline-flex;

    align-items:
        center;

    gap:
        8px;
}


.btn-secondary:hover {

    background:
        #fff0f5;

    color:
        var(--luxury-brown);
}


/* =====================================================
   FILTER BAR
===================================================== */

.modules-nav-wrapper {

    position:
        sticky;

    top:
        75px;

    z-index:
        900;

    background:
        rgba(255,255,255,0.94);

    border-bottom:
        1px solid var(--border-color);

    padding:
        12px 5%;

    backdrop-filter:
        blur(10px);
}


.filter-container {

    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;

    gap:
        15px;

    flex-wrap:
        wrap;

    max-width:
        1400px;

    margin:
        0 auto;
}


.filter-tabs {

    display:
        flex;

    gap:
        8px;

    overflow-x:
        auto;

    padding-bottom:
        4px;

    scrollbar-width:
        thin;
}


.filter-tab {

    background:
        #fff7fa;

    border:
        1px solid var(--border-color);

    color:
        var(--text-muted);

    padding:
        6px 14px;

    border-radius:
        20px;

    font-size:
        0.8rem;

    cursor:
        pointer;

    white-space:
        nowrap;

    transition:
        0.3s;

    font-family:
        var(--font-code);
}


.filter-tab:hover,
.filter-tab.active {

    background:
        var(--luxury-brown);

    color:
        white;

    border-color:
        var(--luxury-brown);
}


.stats-counter {

    font-size:
        0.82rem;

    color:
        var(--text-muted);

    font-family:
        var(--font-code);
}


/* =====================================================
   MODULE SECTION
===================================================== */

.modules-section {

    padding:
        40px 5% 80px;

    max-width:
        1400px;

    margin:
        0 auto;
}


.section-title {

    text-align:
        center;

    margin-bottom:
        40px;
}


.section-title h2 {

    font-size:
        2.2rem;

    color:
        var(--text-light);

    margin:
        0 0 10px;
}


.section-title p {

    color:
        var(--luxury-brown);

    font-family:
        var(--font-code);

    margin:
        0;

    font-size:
        0.9rem;
}


/* =====================================================
   MODULE GRID
===================================================== */

.modules-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            auto-fill,
            minmax(380px, 1fr)
        );

    gap:
        30px;
}


/* =====================================================
   MODULE CARD
===================================================== */

.module-card {

    background:
        var(--card-bg);

    border:
        1px solid var(--border-color);

    border-radius:
        20px;

    overflow:
        hidden;

    backdrop-filter:
        blur(10px);

    transition:
        transform 0.3s ease,
        border-color 0.3s ease,
        box-shadow 0.3s ease;

    display:
        flex;

    flex-direction:
        column;

    box-shadow:
        0 10px 25px rgba(90,33,64,0.08);
}


.module-card:hover {

    transform:
        translateY(-8px);

    border-color:
        var(--luxury-brown);

    box-shadow:
        var(--shadow);
}


.module-header {

    padding:
        22px 25px 15px;

    border-bottom:
        1px solid rgba(0,0,0,0.05);

    position:
        relative;
}


.module-code {

    font-family:
        var(--font-code);

    font-size:
        0.75rem;

    color:
        var(--accent-green);

    background:
        rgba(201,79,130,0.08);

    padding:
        3px 10px;

    border-radius:
        12px;

    display:
        inline-block;

    margin-bottom:
        8px;

    border:
        1px solid rgba(201,79,130,0.2);
}


.module-title {

    font-size:
        1.25rem;

    margin:
        0 0 10px;

    color:
        var(--text-light);

    font-weight:
        700;
}


.module-desc {

    font-size:
        0.85rem;

    color:
        var(--text-muted);

    line-height:
        1.5;

    margin:
        0;
}


.module-tech-stack {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        6px;

    margin-top:
        12px;
}


.tech-tag {

    font-size:
        0.7rem;

    background:
        rgba(199,91,135,0.1);

    color:
        var(--luxury-brown);

    padding:
        2px 8px;

    border-radius:
        4px;

    font-family:
        var(--font-code);
}


/* =====================================================
   UPLOAD AREA
===================================================== */

.exercise-upload-area {

    padding:
        20px 25px;

    background:
        #fffafb;

    flex-grow:
        1;

    display:
        flex;

    flex-direction:
        column;
}


.area-title {

    font-size:
        0.85rem;

    font-family:
        var(--font-code);

    color:
        var(--luxury-brown);

    margin-bottom:
        12px;

    display:
        flex;

    justify-content:
        space-between;

    align-items:
        center;
}


.drop-zone {

    border:
        2px dashed var(--border-color);

    border-radius:
        12px;

    padding:
        16px;

    text-align:
        center;

    background:
        #ffffff;

    cursor:
        pointer;

    transition:
        0.3s;

    margin-bottom:
        15px;
}


.drop-zone:hover,
.drop-zone.dragover {

    border-color:
        var(--luxury-brown);

    background:
        #fff0f5;
}


.drop-zone i {

    font-size:
        1.5rem;

    color:
        var(--luxury-brown);

    margin-bottom:
        6px;
}


.drop-zone p {

    margin:
        0;

    font-size:
        0.78rem;

    color:
        var(--text-muted);
}


.drop-zone span {

    color:
        var(--luxury-brown);

    font-weight:
        600;
}


.file-input-hidden {

    display:
        none;
}


/* =====================================================
   GALLERY
===================================================== */

.gallery-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            auto-fill,
            minmax(75px, 1fr)
        );

    gap:
        10px;

    margin-top:
        5px;
}


.gallery-item {

    position:
        relative;

    aspect-ratio:
        1;

    border-radius:
        8px;

    overflow:
        hidden;

    border:
        1px solid var(--border-color);

    cursor:
        pointer;

    background:
        #ffffff;
}


.gallery-item img {

    width:
        100%;

    height:
        100%;

    object-fit:
        cover;

    transition:
        transform 0.3s ease;
}


.gallery-item:hover img {

    transform:
        scale(1.1);

    opacity:
        0.8;
}


.gallery-item-actions {

    position:
        absolute;

    top:
        0;

    left:
        0;

    width:
        100%;

    height:
        100%;

    background:
        rgba(90,33,64,0.65);

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    gap:
        8px;

    opacity:
        0;

    transition:
        0.2s opacity;
}


.gallery-item:hover
.gallery-item-actions {

    opacity:
        1;
}


.action-btn {

    background:
        rgba(255,255,255,0.2);

    color:
        white;

    border:
        none;

    width:
        26px;

    height:
        26px;

    border-radius:
        50%;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    cursor:
        pointer;

    font-size:
        0.75rem;

    transition:
        0.2s;
}


.action-btn:hover {

    background:
        var(--luxury-brown);

    transform:
        scale(1.1);
}


.action-btn.delete-btn:hover {

    background:
        #e74c3c;
}


.no-exercises {

    font-size:
        0.78rem;

    color:
        var(--text-muted);

    font-style:
        italic;

    text-align:
        center;

    padding:
        10px 0;
}


/* =====================================================
   MODULE FOOTER
===================================================== */

.module-footer {

    padding:
        15px 25px;

    border-top:
        1px solid rgba(0,0,0,0.05);

    display:
        flex;

    justify-content:
        space-between;

    align-items:
        center;
}


.btn-atelier {

    color:
        var(--luxury-brown);

    background:
        white;

    border:
        1px solid var(--border-color);

    padding:
        6px 14px;

    border-radius:
        6px;

    font-family:
        var(--font-code);

    font-size:
        0.78rem;

    cursor:
        pointer;

    transition:
        0.3s;
}


.btn-atelier:hover {

    background:
        var(--luxury-brown);

    color:
        white;
}


/* =====================================================
   MODAL
===================================================== */

.modal {

    display:
        none;

    position:
        fixed;

    z-index:
        2000;

    left:
        0;

    top:
        0;

    width:
        100%;

    height:
        100%;

    background:
        rgba(30,10,20,0.65);

    backdrop-filter:
        blur(12px);

    align-items:
        center;

    justify-content:
        center;

    padding:
        20px;
}


.modal-box {

    background:
        white;

    padding:
        40px;

    border-radius:
        24px;

    border:
        1px solid var(--luxury-brown);

    max-width:
        520px;

    width:
        100%;

    text-align:
        center;

    box-shadow:
        var(--shadow);

    position:
        relative;

    animation:
        modalFadeIn 0.3s ease;
}


@keyframes modalFadeIn {

    from {

        opacity: 0;

        transform:
            scale(0.9);
    }

    to {

        opacity: 1;

        transform:
            scale(1);
    }
}


.modal-footer {

    margin-top:
        25px;

    display:
        flex;

    flex-direction:
        column;

    gap:
        10px;
}


.btn-res {

    padding:
        12px;

    border-radius:
        8px;

    text-decoration:
        none;

    font-weight:
        700;

    display:
        block;

    transition:
        0.3s;

    font-family:
        var(--font-code);

    text-transform:
        uppercase;

    font-size:
        0.8rem;

    text-align:
        center;
}


.btn-ennonce {

    background:
        #f8eef2;

    color:
        var(--text-light);
}


.btn-rapport {

    background:
        var(--luxury-brown);

    color:
        white;
}


.btn-github {

    background:
        var(--accent-green);

    color:
        white;
}


.btn-ennonce:hover {

    background:
        #f0dce4;
}


.btn-rapport:hover,
.btn-github:hover {

    filter:
        brightness(1.1);
}


/* =====================================================
   LIGHTBOX
===================================================== */

.lightbox-modal {

    display:
        none;

    position:
        fixed;

    z-index:
        3000;

    top:
        0;

    left:
        0;

    width:
        100vw;

    height:
        100vh;

    background:
        rgba(20,5,12,0.92);

    backdrop-filter:
        blur(10px);

    flex-direction:
        column;

    justify-content:
        center;

    align-items:
        center;

    padding:
        20px;
}


.lightbox-img {

    max-width:
        90%;

    max-height:
        80vh;

    border-radius:
        12px;

    border:
        1px solid var(--luxury-brown);

    box-shadow:
        0 20px 50px rgba(0,0,0,0.8);

    object-fit:
        contain;
}


.lightbox-caption {

    margin-top:
        15px;

    color:
        white;

    font-family:
        var(--font-code);

    font-size:
        0.9rem;
}


.lightbox-close {

    position:
        absolute;

    top:
        25px;

    right:
        35px;

    color:
        white;

    font-size:
        2rem;

    cursor:
        pointer;

    transition:
        0.3s;
}


.lightbox-close:hover {

    color:
        var(--luxury-brown);
}


/* =====================================================
   FOOTER
===================================================== */

footer {

    text-align:
        center;

    padding:
        50px 20px;

    border-top:
        1px solid var(--border-color);

    background:
        #ffffff;

    font-family:
        var(--font-code);

    font-size:
        0.75rem;

    color:
        var(--text-muted);
}


footer span {

    color:
        var(--luxury-brown);
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 480px) {

    .modules-grid {

        grid-template-columns:
            1fr;
    }

    .hero h1 {

        font-size:
            2.5rem;
    }

    header {

        padding:
            0 15px;
    }

    .logo {

        font-size:
            1rem;
    }

    .logo .badge {

        display:
            none;
    }

    nav {

        gap:
            2px;
    }

    nav > a {

        display:
            none;
    }

    .theme-toggle-btn {

        padding:
            7px 10px;
    }
}

</style>

</head>


<body>

<div id="float-container"></div>


<!-- =====================================================
     HEADER
===================================================== -->

<header>

<a href="index.php" class="logo">

<i class="fa-solid fa-code"></i>

<?php echo htmlspecialchars($studentName); ?>.DEV

<span class="badge">
OFPPT DD 2ND YEAR
</span>

</a>


<nav>

<a href="#modules">

<i class="fa-solid fa-cubes"></i>

Modules

</a>


<div class="dropdown">

<button
class="dropdown-btn"
onclick="toggleDropdown(event)"
>

<i class="fa-solid fa-folder-open"></i>

Repositories.exe ▼

</button>


<div
id="myDropdown"
class="dropdown-content"
>

<?php foreach ($modules as $mod): ?>

<a
href="#"
onclick="openAtelier(
'<?php echo addslashes($mod['code'] . ' - ' . $mod['title']); ?>',
'<?php echo addslashes($mod['desc']); ?>',
'#',
'#',
'https://github.com/Hakimakimy/Portfolio'
)"
>

<span>

&gt;
<?php echo $mod['code']; ?>

<?php echo htmlspecialchars($mod['title']); ?>

</span>

<i class="fa-solid fa-file-pdf"></i>

</a>

<?php endforeach; ?>

</div>

</div>


<button
class="theme-toggle-btn"
onclick="toggleTheme()"
>

<i class="fa-solid fa-circle-half-stroke"></i>

<span id="themeText">
BURGUNDY MODE
</span>

</button>

</nav>

</header>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

<div class="hero-badge">

<i class="fa-solid fa-graduation-cap"></i>

OFPPT ISTA
<?php echo $academicYear; ?>

-

<?php echo htmlspecialchars($specialization); ?>

</div>


<h1 id="heroTitle">

Digital
<span>Elegance</span>

</h1>


<p>

&gt;
system.init(
"2nd Year Digital Development Portfolio -
Specialization Projects & Exercises Showcase"
);

</p>


<div class="hero-actions">

<a
href="#modules"
class="btn-main"
>

<i class="fa-solid fa-play"></i>

Explore Modules

</a>


<a
href="https://github.com/Hakimakimy/Portfolio"
target="_blank"
class="btn-secondary"
>

<i class="fa-brands fa-github"></i>

GitHub Profile

</a>

</div>

</section>


<!-- =====================================================
     FILTER
===================================================== -->

<div class="modules-nav-wrapper">

<div class="filter-container">

<div class="filter-tabs">

<button
class="filter-tab active"
onclick="filterModules('all', event)"
>

All Modules
(<?php echo count($modules); ?>)

</button>


<button
class="filter-tab"
onclick="filterModules('frontend', event)"
>

Front-End

</button>


<button
class="filter-tab"
onclick="filterModules('backend', event)"
>

Backend & DB

</button>


<button
class="filter-tab"
onclick="filterModules('mobile', event)"
>

Mobile & Cloud

</button>


<button
class="filter-tab"
onclick="filterModules('management', event)"
>

Management & Security

</button>

</div>


<div
class="stats-counter"
id="statsCounter"
>

<i class="fa-solid fa-images"></i>

Total Exercises Preserved:

<span
id="totalExercisesCount"
style="
color:var(--luxury-brown);
font-weight:bold;
"
>

0

</span>

</div>

</div>

</div>


<!-- =====================================================
     MODULES
===================================================== -->

<section
class="modules-section"
id="modules"
>

<div class="section-title">

<h2>
OFPPT 2nd Year Modules Showcase
</h2>

<p>
// Track, upload and document your daily exercises & projects
</p>

</div>


<div
class="modules-grid"
id="modulesContainer"
>

<?php foreach ($modules as $mod): ?>

<div
class="module-card"
data-category="<?php echo $mod['category']; ?>"
>

<div class="module-header">

<span class="module-code">

<i class="fa-solid fa-bookmark"></i>

<?php echo $mod['code']; ?>

</span>


<h3 class="module-title">

<?php echo htmlspecialchars($mod['title']); ?>

</h3>


<p class="module-desc">

<?php echo htmlspecialchars($mod['desc']); ?>

</p>


<div class="module-tech-stack">

<?php foreach ($mod['techs'] as $tech): ?>

<span class="tech-tag">

<?php echo htmlspecialchars($tech); ?>

</span>

<?php endforeach; ?>

</div>

</div>


<div class="exercise-upload-area">

<div class="area-title">

<span>

<i class="fa-solid fa-camera"></i>

Exercises Screenshots

</span>


<span
style="
font-size:0.75rem;
color:var(--accent-green);
"
id="count_badge_<?php echo $mod['id']; ?>"
>

0 file(s)

</span>

</div>


<div
class="drop-zone"
onclick="triggerFileInput('<?php echo $mod['id']; ?>')"
ondragover="handleDragOver(event)"
ondragleave="handleDragLeave(event)"
ondrop="handleFileDrop(event, '<?php echo $mod['id']; ?>')"
>

<i class="fa-solid fa-cloud-arrow-up"></i>

<p>

Drag & Drop exercise photo or

<span>
Browse
</span>

</p>


<input
type="file"
id="file_input_<?php echo $mod['id']; ?>"
class="file-input-hidden"
accept="image/*"
onchange="handleFileSelect(event, '<?php echo $mod['id']; ?>')"
>

</div>


<div
class="gallery-grid"
id="gallery_<?php echo $mod['id']; ?>"
>
</div>

</div>


<div class="module-footer">

<button
class="btn-atelier"
onclick="openAtelier(
'<?php echo addslashes($mod['code'] . ' - ' . $mod['title']); ?>',
'<?php echo addslashes($mod['desc']); ?>',
'#',
'#',
'https://github.com/Hakimakimy/Portfolio'
)"
>

<i class="fa-solid fa-folder"></i>

View Details

</button>


<span
style="
font-size:0.75rem;
color:var(--text-muted);
font-family:var(--font-code);
"
>

OFPPT DD 2026

</span>

</div>

</div>

<?php endforeach; ?>

</div>

</section>


<!-- =====================================================
     DETAILS MODAL
===================================================== -->

<div
id="atelierModal"
class="modal"
>

<div class="modal-box">

<h2
id="atTitle"
style="
color:var(--luxury-brown);
font-family:var(--font-code);
margin-top:0;
"
>
</h2>


<p
id="atDesc"
style="
color:var(--text-light);
opacity:0.8;
font-size:0.9rem;
line-height:1.6;
"
>
</p>


<div class="modal-footer">

<a
href="#"
id="linkEnnonce"
class="btn-res btn-ennonce"
target="_blank"
>

<i class="fa-solid fa-file-lines"></i>

Module Syllabus

</a>


<a
href="#"
id="linkRapport"
class="btn-res btn-rapport"
target="_blank"
>

<i class="fa-solid fa-book"></i>

View Report / TP

</a>


<a
href="https://github.com/Hakimakimy/Portfolio"
id="linkGithub"
class="btn-res btn-github"
target="_blank"
>

<i class="fa-brands fa-github"></i>

Source Repository

</a>

</div>


<button
onclick="closeAtelier()"
style="
margin-top:25px;
border:none;
background:none;
cursor:pointer;
color:var(--luxury-brown);
font-family:var(--font-code);
font-size:0.8rem;
"
>

[ CLOSE_WINDOW ]

</button>

</div>

</div>


<!-- =====================================================
     LIGHTBOX
===================================================== -->

<div
id="lightboxModal"
class="lightbox-modal"
>

<span
class="lightbox-close"
onclick="closeLightbox()"
>

&times;

</span>


<img
id="lightboxImg"
class="lightbox-img"
src=""
alt="Exercise Preview"
>


<div
id="lightboxCaption"
class="lightbox-caption"
>
</div>

</div>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

<p>

&copy;
<?php echo date('Y'); ?>

//

COMPILED BY

<span>

<?php echo htmlspecialchars($studentName); ?>

</span>

//

OFPPT ISTA DIGITAL DEVELOPMENT PORTFOLIO

</p>

</footer>


<script>

/* =====================================================
   PHP MODULE DATA
===================================================== */

const PHP_MODULES =
<?php echo json_encode($modules); ?>;


const STORAGE_KEY =
'ofppt_portfolio_exercises_v1';


/* =====================================================
   LOCAL STORAGE
===================================================== */

function getStoredExercises() {

    const data =
        localStorage.getItem(STORAGE_KEY);


    if (data) {

        try {

            return JSON.parse(data);

        } catch(e) {

            console.error(e);

        }

    }


    const initialData = {};


    PHP_MODULES.forEach(mod => {

        initialData[mod.id] = [

            {
                id:
                    mod.id + '_sample',

                url:
                    mod.defaultImg,

                name:
                    'Exercise Screenshot Sample'
            }

        ];

    });


    localStorage.setItem(
        STORAGE_KEY,
        JSON.stringify(initialData)
    );


    return initialData;
}


function saveExercises(exercisesObj) {

    localStorage.setItem(
        STORAGE_KEY,
        JSON.stringify(exercisesObj)
    );

    updateAllGalleries();
}


/* =====================================================
   UPDATE GALLERIES
===================================================== */

function updateAllGalleries() {

    const allData =
        getStoredExercises();

    let totalCount = 0;


    PHP_MODULES.forEach(mod => {

        const items =
            allData[mod.id] || [];


        totalCount += items.length;


        const countBadge =
            document.getElementById(
                `count_badge_${mod.id}`
            );


        if (countBadge) {

            countBadge.innerText =
                `${items.length} file(s)`;

        }


        const galleryContainer =
            document.getElementById(
                `gallery_${mod.id}`
            );


        if (galleryContainer) {

            if (items.length === 0) {

                galleryContainer.innerHTML = `

                    <div
                        class="no-exercises"
                        style="grid-column:1/-1;"
                    >

                        No exercise screenshot added yet.

                    </div>

                `;

            } else {

                galleryContainer.innerHTML =
                    items.map(item => `

                        <div class="gallery-item">

                            <img
                                src="${item.url}"
                                alt="${escapeHtml(item.name)}"
                            >

                            <div
                                class="gallery-item-actions"
                            >

                                <button
                                    class="action-btn"
                                    title="Zoom"
                                    onclick="openLightbox(
                                        '${escapeJs(item.url)}',
                                        '${escapeJs(item.name)}'
                                    )"
                                >

                                    <i
                                        class="fa-solid fa-expand"
                                    ></i>

                                </button>


                                <button
                                    class="action-btn delete-btn"
                                    title="Delete"
                                    onclick="deleteExercise(
                                        '${escapeJs(mod.id)}',
                                        '${escapeJs(item.id)}'
                                    )"
                                >

                                    <i
                                        class="fa-solid fa-trash"
                                    ></i>

                                </button>

                            </div>

                        </div>

                    `).join('');

            }

        }

    });


    const counterEl =
        document.getElementById(
            'totalExercisesCount'
        );


    if (counterEl) {

        counterEl.innerText =
            totalCount;

    }

}


/* =====================================================
   HTML / JS ESCAPING
===================================================== */

function escapeHtml(value) {

    return String(value)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
}


function escapeJs(value) {

    return String(value)
        .replace(/\\/g, '\\\\')
        .replace(/'/g, "\\'")
        .replace(/\n/g, '\\n')
        .replace(/\r/g, '\\r');
}


/* =====================================================
   FILE UPLOAD
===================================================== */

function triggerFileInput(moduleId) {

    document
        .getElementById(
            `file_input_${moduleId}`
        )
        .click();

}


function handleFileSelect(event, moduleId) {

    const files =
        event.target.files;


    if (files && files[0]) {

        processFile(
            files[0],
            moduleId
        );

    }

}


function handleDragOver(event) {

    event.preventDefault();

    event.currentTarget
        .classList
        .add('dragover');

}


function handleDragLeave(event) {

    event.currentTarget
        .classList
        .remove('dragover');

}


function handleFileDrop(event, moduleId) {

    event.preventDefault();

    event.currentTarget
        .classList
        .remove('dragover');


    const files =
        event.dataTransfer.files;


    if (files && files[0]) {

        processFile(
            files[0],
            moduleId
        );

    }

}


function processFile(file, moduleId) {

    if (!file.type.startsWith('image/')) {

        alert(
            'Please upload an image file (.png, .jpg, .webp).'
        );

        return;

    }


    if (file.size > 3 * 1024 * 1024) {

        alert(
            'File size exceeds 3MB limit for LocalStorage. Please select a smaller screenshot.'
        );

        return;

    }


    const reader =
        new FileReader();


    reader.onload =
        function(e) {

            const base64Url =
                e.target.result;


            const newExercise = {

                id:
                    'ex_' + Date.now(),

                url:
                    base64Url,

                name:
                    file.name

            };


            const allData =
                getStoredExercises();


            if (!allData[moduleId]) {

                allData[moduleId] = [];

            }


            allData[moduleId]
                .push(newExercise);


            saveExercises(allData);

        };


    reader.readAsDataURL(file);

}


/* =====================================================
   DELETE EXERCISE
===================================================== */

function deleteExercise(
    moduleId,
    exerciseId
) {

    if (
        !confirm(
            'Are you sure you want to delete this exercise image?'
        )
    ) {

        return;

    }


    const allData =
        getStoredExercises();


    if (allData[moduleId]) {

        allData[moduleId] =
            allData[moduleId]
                .filter(
                    item =>
                        item.id !== exerciseId
                );


        saveExercises(allData);

    }

}


/* =====================================================
   FILTER MODULES
===================================================== */

function filterModules(
    category,
    clickedEvent = null
) {

    document
        .querySelectorAll('.filter-tab')
        .forEach(tab =>
            tab.classList.remove('active')
        );


    if (
        clickedEvent &&
        clickedEvent.currentTarget
    ) {

        clickedEvent.currentTarget
            .classList
            .add('active');

    }


    const cards =
        document.querySelectorAll(
            '.module-card'
        );


    cards.forEach(card => {

        if (
            category === 'all' ||
            card.dataset.category === category
        ) {

            card.style.display =
                'flex';

        } else {

            card.style.display =
                'none';

        }

    });

}


/* =====================================================
   LIGHTBOX
===================================================== */

function openLightbox(
    url,
    name
) {

    const modal =
        document.getElementById(
            'lightboxModal'
        );


    const img =
        document.getElementById(
            'lightboxImg'
        );


    const caption =
        document.getElementById(
            'lightboxCaption'
        );


    img.src =
        url;


    caption.innerText =
        name ||
        'Exercise Preview';


    modal.style.display =
        'flex';

}


function closeLightbox() {

    document.getElementById(
        'lightboxModal'
    ).style.display =
        'none';

}


/* =====================================================
   THEME
===================================================== */

function toggleTheme() {

    const body =
        document.body;


    const heroTitle =
        document.getElementById(
            'heroTitle'
        );


    const themeText =
        document.getElementById(
            'themeText'
        );


    body.classList.toggle(
        'purple-mode'
    );


    if (
        body.classList.contains(
            'purple-mode'
        )
    ) {

        heroTitle.innerHTML =
            'Royal <span>Elegance</span>';


        themeText.innerText =
            'ROSE MODE';

    } else {

        heroTitle.innerHTML =
            'Digital <span>Elegance</span>';


        themeText.innerText =
            'BURGUNDY MODE';

    }

}


/* =====================================================
   FLOATING PETALS
===================================================== */

function createLeaf() {

    const container =
        document.getElementById(
            'float-container'
        );


    if (!container) {

        return;

    }


    const leaf =
        document.createElement(
            'div'
        );


    leaf.className =
        'gold-leaf';


    leaf.style.left =
        Math.random() * 100 +
        'vw';


    leaf.style.animationDuration =
        (Math.random() * 5 + 7) +
        's';


    leaf.style.width =
        (Math.random() * 6 + 4) +
        'px';


    leaf.style.height =
        (Math.random() * 6 + 6) +
        'px';


    container.appendChild(
        leaf
    );


    setTimeout(
        () => leaf.remove(),
        10000
    );

}


setInterval(
    createLeaf,
    750
);


/* =====================================================
   DROPDOWN
===================================================== */

function toggleDropdown(e) {

    e.stopPropagation();


    document
        .getElementById(
            "myDropdown"
        )
        .classList
        .toggle("show");

}


/* =====================================================
   DETAILS MODAL
===================================================== */

function openAtelier(
    title,
    desc,
    ennonce,
    rapport,
    github
) {

    document.getElementById(
        'atTitle'
    ).innerText =
        title;


    document.getElementById(
        'atDesc'
    ).innerText =
        desc;


    document.getElementById(
        'linkEnnonce'
    ).href =
        ennonce;


    document.getElementById(
        'linkRapport'
    ).href =
        rapport;


    document.getElementById(
        'linkGithub'
    ).href =
        github ||
        'https://github.com/Hakimakimy/Portfolio';


    document.getElementById(
        'atelierModal'
    ).style.display =
        'flex';

}


function closeAtelier() {

    document.getElementById(
        'atelierModal'
    ).style.display =
        'none';

}


/* =====================================================
   CLOSE MODALS / DROPDOWN
===================================================== */

window.onclick =
    function(event) {

        if (
            !event.target.closest(
                '.dropdown'
            )
        ) {

            const dropdowns =
                document.getElementsByClassName(
                    "dropdown-content"
                );


            for (
                let i = 0;
                i < dropdowns.length;
                i++
            ) {

                dropdowns[i]
                    .classList
                    .remove('show');

            }

        }


        if (
            event.target.classList.contains(
                'modal'
            )
        ) {

            closeAtelier();

        }


        if (
            event.target.id ===
            'lightboxModal'
        ) {

            closeLightbox();

        }

    };


/* =====================================================
   INITIALIZE
===================================================== */

window.onload =
    function() {

        updateAllGalleries();

    };

</script>

</body>

</html>
