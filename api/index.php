<?php
// Student Profile & Configuration
$studentName = "Hakima Bouabidi";
$specialty = "Développement Digital - Option Web / Full-Stack";
$institution = "OFPPT - ISTA / ISGI";
$contactEmail = "hakima.bouabidi@example.com";
$githubUrl = "https://github.com/hakimabouabidi";
$academicYear = "2025/2026";

// Directory setup for uploaded photos
$uploadDir = "uploads/";
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle Image Upload Process
$uploadMessage = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['exercise_photo'])) {
    $moduleId = $_POST['module_id'] ?? '';
    
    if ($moduleId && isset($_FILES['exercise_photo']['name']) && $_FILES['exercise_photo']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['exercise_photo']['tmp_name'];
        $fileName = $_FILES['exercise_photo']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = $moduleId . '_' . time() . '.' . $fileExtension;
            $destPath = $uploadDir . $newFileName;
            
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $uploadMessage = "✅ Photo téléchargée avec succès pour le module : " . htmlspecialchars($moduleId);
            } else {
                $uploadMessage = "❌ Erreur lors du téléchargement de l'image.";
            }
        } else {
            $uploadMessage = "⚠️ Format non valide. Veuillez utiliser JPG, PNG, GIF ou WEBP.";
        }
    }
}

// Technical Skills Matrix
$skills = [
    'Front-End' => ['HTML5 / CSS3', 'JavaScript (ES6+)', 'React.js', 'Tailwind CSS', 'Bootstrap'],
    'Back-End' => ['PHP (Native / POO)', 'Laravel Framework', 'Node.js', 'Architecture REST API'],
    'Databases' => ['MySQL', 'PostgreSQL', 'Modélisation UML (MCD/MLD)'],
    'Tools & DevOps' => ['Git & GitHub', 'Postman', 'Docker', 'Agile / Scrum']
];

// OFPPT 2nd Year Modules List (M201 - M206)
$modules = [
    [
        'code' => 'M201',
        'id' => 'm201_backend',
        'category' => 'backend',
        'title' => 'M201 - Développer le back-end d\'une application web (PHP / Laravel)',
        'description' => 'Architecture MVC, Eloquent ORM, API RESTful, authentification (Sanctum/JWT), middleware, et migrations.',
        'exercise' => 'Création d\'une API REST d\'authentification et gestion d\'un catalogue produits.',
        'techs' => ['PHP', 'Laravel', 'REST API', 'MySQL'],
        'code_snippet' => '<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
        return response()->json(Product::with("category")->paginate(10), 200);
    }
}'
    ],
    [
        'code' => 'M202',
        'id' => 'm202_frontend',
        'category' => 'frontend',
        'title' => 'M202 - Développer le front-end d\'une application web (React.js)',
        'description' => 'Composants React, Hooks (useState, useEffect), gestion d\'état global avec Redux Toolkit, et requêtes Axios.',
        'exercise' => 'Tableau de bord dynamique connecté à une API REST.',
        'techs' => ['React.js', 'Redux', 'Axios', 'Tailwind'],
        'code_snippet' => 'import React, { useState, useEffect } from "react";
import axios from "axios";

export default function Dashboard() {
  const [items, setItems] = useState([]);
  useEffect(() => {
    axios.get("/api/products").then(res => setItems(res.data));
  }, []);
  return <div className="p-4">Total Produit: {items.length}</div>;
}'
    ],
    [
        'code' => 'M203',
        'id' => 'm203_database',
        'category' => 'backend',
        'title' => 'M203 - Administrer et développer des bases de données (SQL / PLSQL)',
        'description' => 'Modélisation UML/Merise, requêtes SQL avancées, procédures stockées, déclencheurs (Triggers), et transactions.',
        'exercise' => 'Optimisation de base de données relationnelle et écriture de déclencheurs automatiques.',
        'techs' => ['SQL', 'PL/SQL', 'Triggers', 'UML'],
        'code_snippet' => 'CREATE TRIGGER update_stock_after_sale
AFTER INSERT ON sale_details
FOR EACH ROW
BEGIN
    UPDATE products 
    SET stock_quantity = stock_quantity - NEW.quantity
    WHERE id = NEW.product_id;
END;'
    ],
    [
        'code' => 'M204',
        'id' => 'm204_mobile',
        'category' => 'mobile',
        'title' => 'M204 - Développer des applications mobiles (React Native / Flutter)',
        'description' => 'Interface mobile multiplateforme, navigation native, stockage local (AsyncStorage/SQLite), et synchronisation API.',
        'exercise' => 'Application mobile de gestion de tâches avec sauvegarde locale.',
        'techs' => ['React Native', 'Flutter', 'SQLite'],
        'code_snippet' => 'import { View, Text, FlatList } from "react-native";

export default function TaskList({ tasks }) {
  return (
    <FlatList 
      data={tasks} 
      renderItem={({item}) => <Text>{item.title}</Text>} 
    />
  );
}'
    ],
    [
        'code' => 'M205',
        'id' => 'm205_agile',
        'category' => 'management',
        'title' => 'M205 - Analyse et conception logicielle (UML & Agile)',
        'description' => 'Diagrammes de cas d\'utilisation, diagrammes de classes, diagrammes de séquence, et méthodologie Scrum.',
        'exercise' => 'Dossier d\'analyse et conception complète pour une plateforme e-commerce.',
        'techs' => ['UML', 'Agile', 'Scrum', 'Use Cases'],
        'code_snippet' => 'System: E-Commerce Platform
Actor: Client, Administrateur

Use Cases:
- Authentification
- Passer une commande
- Gérer le catalogue produits (Admin)'
    ],
    [
        'code' => 'M206',
        'id' => 'm206_pfe',
        'category' => 'backend',
        'title' => 'M206 - Projet de Fin d\'Etudes (PFE)',
        'description' => 'Conception et réalisation d\'une application Full-Stack complète intégrant l\'ensemble des compétences acquises.',
        'exercise' => 'Application Web & Mobile de gestion globale d\'entreprise.',
        'techs' => ['Full-Stack', 'React', 'Laravel', 'MySQL'],
        'code_snippet' => '// Stack Technique PFE:
// Front-end: React.js / Tailwind CSS
// Back-end: Laravel REST API
// Base de données: MySQL'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Développeuse | <?php echo htmlspecialchars($studentName); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-dark: #120a14; 
            --deep-green: #2b1128;
            --luxury-brown: #e082b2;
            --luxury-brown-hover: #f0a0cc;
            --accent-green: #f39c12;
            --text-light: #fcf5f9;
            --text-muted: #cbb4c8;
            --glass-bg: rgba(43, 17, 40, 0.25);
            --card-bg: rgba(28, 12, 26, 0.85);
            --border-color: rgba(224, 130, 178, 0.25);
            --shadow: 0 15px 35px rgba(0,0,0,0.6);
            --font-code: 'Fira Code', 'Consolas', monospace;
            --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body.purple-mode {
            --bg-dark: #0f0c1b; 
            --deep-green: #1d173b;
            --luxury-brown: #a88beb; 
            --luxury-brown-hover: #c4b0f7;
            --accent-green: #ff7675;
            --text-light: #f5f3ff;
            --text-muted: #b9b3d6;
            --glass-bg: rgba(29, 23, 59, 0.3);
            --card-bg: rgba(21, 17, 38, 0.85);
            --border-color: rgba(168, 139, 235, 0.3);
            --shadow: 0 15px 35px rgba(168, 139, 235, 0.2);
        }

        * { box-sizing: border-box; scroll-behavior: smooth; }
        body {
            font-family: var(--font-sans);
            background-color: var(--bg-dark); 
            color: var(--text-light);
            margin: 0;
            overflow-x: hidden;
            transition: background-color 0.5s ease, color 0.5s ease;
            min-height: 100vh;
        }

        header {
            background: rgba(18, 10, 20, 0.85);
            backdrop-filter: blur(12px);
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            position: sticky; top: 0; z-index: 1000;
            height: 75px;
        }

        .logo {
            font-family: var(--font-code);
            font-weight: 800;
            color: var(--luxury-brown);
            font-size: 1.2rem;
            display: flex; align-items: center; gap: 8px;
            text-decoration: none;
        }

        .logo span.badge {
            font-size: 0.65rem;
            background: rgba(224, 130, 178, 0.15);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown);
            padding: 2px 8px;
            border-radius: 12px;
        }

        nav { display: flex; align-items: center; gap: 12px; }
        nav a {
            text-decoration: none;
            color: var(--text-light);
            padding: 8px 14px;
            font-weight: 500; font-size: 0.88rem;
            transition: 0.3s; border-radius: 6px;
            display: flex; align-items: center; gap: 6px;
        }
        nav a:hover { color: var(--luxury-brown); }

        .theme-toggle-btn {
            background: linear-gradient(135deg, var(--luxury-brown), #914870);
            color: white; border: none; padding: 8px 16px;
            border-radius: 20px; cursor: pointer;
            font-size: 0.75rem; font-weight: 700; transition: 0.3s;
            display: flex; align-items: center; gap: 6px;
        }

        .hero {
            min-height: 60vh; display: flex; flex-direction: column;
            justify-content: center; align-items: center;
            background: radial-gradient(circle at center, var(--deep-green) 0%, var(--bg-dark) 75%);
            padding: 40px 20px; text-align: center;
        }

        .hero h1 { font-size: 3rem; margin: 0; font-weight: 900; }
        .hero h1 span { color: var(--luxury-brown); }
        .hero p { font-family: var(--font-code); color: var(--accent-green); margin: 15px 0 25px; font-size: 0.95rem; }

        .btn-container { display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; }
        .btn-main {
            background: linear-gradient(135deg, var(--luxury-brown), #914870);
            color: white; padding: 12px 28px; border-radius: 8px;
            text-decoration: none; font-weight: 700; transition: 0.3s;
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-secondary {
            background: rgba(255,255,255,0.05); color: var(--text-light);
            border: 1px solid var(--border-color); padding: 12px 24px;
            border-radius: 8px; text-decoration: none; transition: 0.3s;
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-main:hover, .btn-secondary:hover { transform: translateY(-3px); }

        .skills-section {
            padding: 40px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        .section-title {
            font-size: 1.8rem;
            color: var(--luxury-brown);
            margin-bottom: 25px;
            font-family: var(--font-code);
            display: flex; align-items: center; gap: 10px;
        }
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .skill-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 20px;
            backdrop-filter: blur(10px);
        }
        .skill-card h3 {
            color: var(--accent-green);
            font-size: 1.1rem;
            margin-top: 0;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 8px;
        }
        .skill-card ul { list-style: none; padding: 0; margin: 0; }
        .skill-card li {
            padding: 6px 0;
            color: var(--text-muted);
            font-size: 0.88rem;
            display: flex; align-items: center; gap: 8px;
        }
        .skill-card li::before {
            content: '❖'; color: var(--luxury-brown); font-size: 0.7rem;
        }

        .modules-nav-wrapper {
            position: sticky; top: 75px; z-index: 900;
            background: var(--bg-dark); border-bottom: 1px solid var(--border-color);
            padding: 12px 5%; backdrop-filter: blur(10px);
        }
        .filter-container { display: flex; align-items: center; justify-content: space-between; gap: 15px; flex-wrap: wrap; }
        .filter-tabs { display: flex; gap: 8px; overflow-x: auto; }
        .filter-tab {
            background: rgba(255,255,255,0.04); border: 1px solid var(--border-color);
            color: var(--text-muted); padding: 6px 14px; border-radius: 20px;
            font-size: 0.8rem; cursor: pointer; font-family: var(--font-code);
        }
        .filter-tab.active { background: var(--luxury-brown); color: white; }

        .modules-section { padding: 40px 5% 80px; max-width: 1400px; margin: 0 auto; }
        .modules-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 30px; }
        .module-card {
            background: var(--card-bg); border: 1px solid var(--border-color);
            border-radius: 20px; overflow: hidden; backdrop-filter: blur(10px);
            display: flex; flex-direction: column;
        }
        .module-header { padding: 22px 25px 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .module-code {
            font-family: var(--font-code); font-size: 0.75rem; color: var(--accent-green);
            background: rgba(243, 156, 18, 0.1); padding: 3px 10px; border-radius: 12px;
        }
        .module-tech-stack { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 12px; }
        .tech-tag { font-size: 0.7rem; background: rgba(224, 130, 178, 0.12); color: var(--luxury-brown); padding: 2px 8px; border-radius: 4px; }

        .exercise-area { padding: 20px 25px; background: rgba(0,0,0,0.15); flex-grow: 1; }
        
        pre {
            background: rgba(0,0,0,0.4);
            border: 1px solid var(--border-color);
            padding: 12px;
            border-radius: 8px;
            overflow-x: auto;
            font-family: var(--font-code);
            font-size: 0.78rem;
            color: var(--text-light);
            margin-top: 10px;
        }

        .upload-form { margin-top: 15px; }
        .file-label {
            display: block; border: 2px dashed var(--border-color);
            border-radius: 10px; padding: 12px; text-align: center;
            cursor: pointer; transition: 0.3s; font-size: 0.8rem;
            color: var(--text-muted);
        }
        .file-label:hover { border-color: var(--luxury-brown); background: rgba(224,130,178,0.08); }
        .file-input { display: none; }
        .submit-btn {
            width: 100%; margin-top: 8px; background: var(--luxury-brown);
            color: white; border: none; padding: 8px; border-radius: 6px;
            cursor: pointer; font-weight: 600; transition: 0.3s;
        }
        .submit-btn:hover { background: var(--luxury-brown-hover); }

        .alert-box {
            background: rgba(224, 130, 178, 0.15); border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown); padding: 12px 20px; border-radius: 8px;
            margin: 20px 5%; text-align: center; font-family: var(--font-code);
        }

        footer { text-align: center; padding: 40px 20px; border-top: 1px solid var(--border-color); font-family: var(--font-code); font-size: 0.75rem; color: var(--text-muted); }
    </style>
</head>
<body>

    <header>
        <a href="#" class="logo">
            <i class="fa-solid fa-code"></i> <?php echo htmlspecialchars($studentName); ?> 
            <span class="badge">DEV FULL-STACK</span>
        </a>
        <nav>
            <a href="#skills"><i class="fa-solid fa-laptop-code"></i> Compétences</a>
            <a href="#modules"><i class="fa-solid fa-cubes"></i> Modules</a>
            <button class="theme-toggle-btn" onclick="toggleTheme()">
                <i class="fa-solid fa-circle-half-stroke"></i> <span id="themeText">ROSE MODE</span>
            </button>
        </nav>
    </header>

    <?php if ($uploadMessage): ?>
        <div class="alert-box"><?php echo $uploadMessage; ?></div>
    <?php endif; ?>

    <section class="hero">
        <h1>Développeuse <span>Full-Stack</span></h1>
        <p>> <?php echo htmlspecialchars($institution); ?> | <?php echo htmlspecialchars($specialty); ?></p>
        <div class="btn-container">
            <a href="<?php echo htmlspecialchars($githubUrl); ?>" target="_blank" class="btn-main"><i class="fa-brands fa-github"></i> GitHub</a>
            <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>" class="btn-secondary"><i class="fa-solid fa-envelope"></i> Contact</a>
        </div>
    </section>

    <section class="skills-section" id="skills">
        <h2 class="section-title"><i class="fa-solid fa-layer-group"></i> Compétences Techniques</h2>
        <div class="skills-grid">
            <?php foreach ($skills as $category => $skillList): ?>
                <div class="skill-card">
                    <h3><?php echo htmlspecialchars($category); ?></h3>
                    <ul>
                        <?php foreach ($skillList as $skill): ?>
                            <li><?php echo htmlspecialchars($skill); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="modules-nav-wrapper">
        <div class="filter-container">
            <div class="filter-tabs">
                <button class="filter-tab active" onclick="filterModules('all')">Tous les Modules (<?php echo count($modules); ?>)</button>
                <button class="filter-tab" onclick="filterModules('frontend')">Front-End</button>
                <button class="filter-tab" onclick="filterModules('backend')">Backend & DB</button>
                <button class="filter-tab" onclick="filterModules('mobile')">Mobile</button>
                <button class="filter-tab" onclick="filterModules('management')">Management</button>
            </div>
        </div>
    </div>

    <section class="modules-section" id="modules">
        <div class="modules-grid" id="modulesContainer">
            <?php foreach ($modules as $mod): ?>
                <div class="module-card" data-category="<?php echo $mod['category']; ?>">
                    <div class="module-header">
                        <span class="module-code"><i class="fa-solid fa-bookmark"></i> <?php echo $mod['code']; ?></span>
                        <h3 class="module-title" style="font-size:1.1rem; margin-top:8px;"><?php echo htmlspecialchars($mod['title']); ?></h3>
                        <p class="module-desc" style="font-size:0.85rem; color:var(--text-muted);"><?php echo htmlspecialchars($mod['description']); ?></p>
                        <div class="module-tech-stack">
                            <?php foreach ($mod['techs'] as $tech): ?>
                                <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="exercise-area">
                        <p style="font-size:0.85rem; margin-bottom:5px;"><strong>Exercice :</strong> <?php echo htmlspecialchars($mod['exercise']); ?></p>
                        
                        <pre><code><?php echo htmlspecialchars($mod['code_snippet']); ?></code></pre>

                        <form action="" method="POST" enctype="multipart/form-data" class="upload-form">
                            <input type="hidden" name="module_id" value="<?php echo $mod['id']; ?>">
                            <label class="file-label" for="file_<?php echo $mod['id']; ?>">
                                <i class="fa-solid fa-cloud-arrow-up"></i> Importer une capture d'écran
                                <input type="file" name="exercise_photo" id="file_<?php echo $mod['id']; ?>" class="file-input" accept="image/*" onchange="this.form.submit()">
                            </label>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <span><?php echo htmlspecialchars($studentName); ?></span> - Portfolio OFPPT</p>
    </footer>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('purple-mode');
            const isPurple = document.body.classList.contains('purple-mode');
            document.getElementById('themeText').innerText = isPurple ? 'VIOLET MODE' : 'ROSE MODE';
        }

        function filterModules(category) {
            document.querySelectorAll('.filter-tab').forEach(tab => tab.classList.remove('active'));
            event.target.classList.add('active');

            document.querySelectorAll('.module-card').forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>