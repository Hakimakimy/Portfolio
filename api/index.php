<?php
// Student Profile & Configuration
$studentName = "Hakima Bouabidi";
$specialty = "Développement Digital - 2ème Année";
$institution = "OFPPT - ISTA / ISGI";
$contactEmail = "hakima.bouabidi@example.com";
$githubUrl = "https://github.com/hakimabouabidi";
$linkedinUrl = "https://linkedin.com/in/hakimabouabidi";

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
            // Unique filename per module upload
            $newFileName = $moduleId . '_' . time() . '.' . $fileExtension;
            $destPath = $uploadDir . $newFileName;
            
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $uploadMessage = "Photo uploaded successfully for module: " . htmlspecialchars($moduleId);
            } else {
                $uploadMessage = "Error uploading image to destination folder.";
            }
        } else {
            $uploadMessage = "Invalid file type. Please upload JPG, PNG, GIF, or WEBP images.";
        }
    }
}

// Technical Skills Matrix
$skills = [
    'Front-End' => ['HTML5 / CSS3', 'JavaScript (ES6+)', 'React.js', 'Tailwind CSS', 'Bootstrap'],
    'Back-End' => ['PHP (Native / OOP)', 'Laravel Framework', 'Node.js', 'REST API Architecture'],
    'Databases' => ['MySQL', 'PostgreSQL', 'UML Modeling (MCD/MLD)'],
    'Tools & DevOps' => ['Git & GitHub', 'Postman', 'Docker', 'Agile / Scrum']
];

// OFPPT 2nd Year Modules List (M201 - M206)
$modules = [
    [
        'code' => 'M201',
        'id' => 'm201_backend',
        'title' => 'M201 - Développer le back-end d\'une application web (PHP / Laravel)',
        'description' => 'Architecture MVC, Eloquent ORM, API RESTful, authentification (Sanctum/JWT), middleware, et migrations.',
        'exercise' => 'Création d\'une API REST d\'authentification et gestion d\'un catalogue produits.',
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
        'title' => 'M202 - Développer le front-end d\'une application web (React.js)',
        'description' => 'Composants React, Hooks (useState, useEffect), gestion d\'état global avec Redux Toolkit, et requêtes Axios.',
        'exercise' => 'Tableau de bord dynamique connecté à une API REST.',
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
        'title' => 'M203 - Administrer et développer des bases de données (SQL / PLSQL)',
        'description' => 'Modélisation UML/Merise, requêtes SQL avancées, procédures stockées, déclencheurs (Triggers), et transactions.',
        'exercise' => 'Optimisation de base de données relationnelle et écriture de déclencheurs automatiques.',
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
        'title' => 'M204 - Développer des applications mobiles (React Native / Flutter)',
        'description' => 'Interface mobile multiplateforme, navigation native, stockage local (AsyncStorage/SQLite), et synchronisation API.',
        'exercise' => 'Application mobile de gestion de tâches avec sauvegarde locale.',
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
        'title' => 'M205 - Analyse et conception logicielle (UML & Agile)',
        'description' => 'Diagrammes de cas d\'utilisation, diagrammes de classes, diagrammes de séquence, et méthodologie Scrum.',
        'exercise' => 'Dossier d\'analyse et conception complète pour une plateforme e-commerce.',
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
        'title' => 'M206 - Projet de Fin d\'Etudes (PFE)',
        'description' => 'Conception et réalisation d\'une application Full-Stack complète intégrant l\'ensemble des compétences acquises.',
        'exercise' => 'Application Web & Mobile de gestion globale d\'entreprise.',
        'code_snippet' => '// Stack Technique PFE:
// Front-end: React.js / Tailwind CSS
// Back-end: Laravel REST API
// Base de données: MySQL'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?php echo $studentName; ?></title>
    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --bg-dark: #0f172a;
            --card-bg: #1e293b;
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
            --accent: #38bdf8;
            --border: #334155;
            --success: #22c55e;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        header {
            background: linear-gradient(135deg, #1e293b, #0f172a);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 30px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 10px;
        }

        header p {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .contact-links {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .contact-links a {
            color: var(--text-light);
            background-color: var(--primary);
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s ease;
        }

        .contact-links a:hover {
            background-color: var(--primary-dark);
        }

        .alert-message {
            background-color: #064e3b;
            color: #6ee7b7;
            border: 1px solid #047857;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-title {
            font-size: 1.8rem;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 8px;
            margin: 40px 0 20px 0;
            color: var(--accent);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .skill-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            padding: 20px;
            border-radius: 8px;
        }

        .skill-card h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .skill-card ul {
            list-style-type: none;
        }

        .skill-card li {
            color: var(--text-muted);
            margin-bottom: 6px;
            padding-left: 12px;
            position: relative;
        }

        .skill-card li::before {
            content: "•";
            color: var(--accent);
            position: absolute;
            left: 0;
        }

        .module-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .module-header h3 {
            color: var(--accent);
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .exercise-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .exercise-grid {
                grid-template-columns: 1fr;
            }
        }

        pre {
            background-color: #090d16;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid var(--border);
            overflow-x: auto;
            font-size: 0.85rem;
            color: #a7f3d0;
        }

        .upload-section {
            border: 2px dashed var(--border);
            border-radius: 8px;
            background-color: #131b2e;
            padding: 20px;
            text-align: center;
        }

        .upload-form {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }

        .upload-form input[type="file"] {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .upload-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        .upload-btn:hover {
            background-color: var(--primary-dark);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
            gap: 10px;
            margin-top: 15px;
        }

        .gallery-grid img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid var(--border);
            transition: transform 0.2s ease;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 30px 0;
            color: var(--text-muted);
            border-top: 1px solid var(--border);
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header Section -->
    <header>
        <h1><?php echo $studentName; ?></h1>
        <p><?php echo $specialty; ?> | <?php echo $institution; ?></p>
        <div class="contact-links">
            <a href="mailto:<?php echo $contactEmail; ?>">Contact Email</a>
            <a href="<?php echo $githubUrl; ?>" target="_blank">GitHub Profile</a>
            <a href="<?php echo $linkedinUrl; ?>" target="_blank">LinkedIn Profile</a>
        </div>
    </header>

    <?php if ($uploadMessage): ?>
        <div class="alert-message">
            <?php echo $uploadMessage; ?>
        </div>
    <?php endif; ?>

    <!-- Technical Skills Matrix -->
    <h2 class="section-title">Technical Skills Matrix</h2>
    <div class="skills-grid">
        <?php foreach ($skills as $category => $techList): ?>
            <div class="skill-card">
                <h3><?php echo $category; ?></h3>
                <ul>
                    <?php foreach ($techList as $tech): ?>
                        <li><?php echo $tech; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Modules List (M201 to M206) -->
    <h2 class="section-title">2ème Année Modules & Exercises Showcase</h2>

    <?php foreach ($modules as $module): ?>
        <div class="module-card" id="<?php echo $module['id']; ?>">
            <div class="module-header">
                <h3><?php echo $module['title']; ?></h3>
            </div>
            <p><strong>Overview:</strong> <?php echo $module['description']; ?></p>
            <p style="margin-top: 5px;"><strong>Exercice Clé:</strong> <?php echo $module['exercise']; ?></p>

            <div class="exercise-grid">
                <!-- Code Snippet Box -->
                <div>
                    <p style="margin-bottom: 8px; color: var(--accent);"><strong>Exemple de Code:</strong></p>
                    <pre><code><?php echo htmlspecialchars($module['code_snippet']); ?></code></pre>
                </div>

                <!-- Exercise Photo Upload & Gallery Section -->
                <div class="upload-section">
                    <p style="margin-bottom: 10px; color: var(--accent);"><strong>📸 Exercise Screenshots:</strong></p>
                    
                    <!-- Upload Form -->
                    <form action="#<?php echo $module['id']; ?>" method="POST" enctype="multipart/form-data" class="upload-form">
                        <input type="hidden" name="module_id" value="<?php echo $module['id']; ?>">
                        <input type="file" name="exercise_photo" accept="image/*" required>
                        <button type="submit" class="upload-btn">Upload Exercise Photo</button>
                    </form>

                    <!-- Photo Gallery for this Module -->
                    <div class="gallery-grid">
                        <?php
                        $uploadedPhotos = glob($uploadDir . $module['id'] . "_*.*");
                        if (!empty($uploadedPhotos)):
                            foreach ($uploadedPhotos as $photoPath): ?>
                                <a href="<?php echo $photoPath; ?>" target="_blank">
                                    <img src="<?php echo $photoPath; ?>" alt="Exercise Screenshot">
                                </a>
                            <?php endforeach;
                        else: ?>
                            <p style="grid-column: 1/-1; color: var(--text-muted); font-size: 0.85rem;">
                                No photos uploaded yet for <?php echo $module['code']; ?>. Select an image above and click Upload.
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $studentName; ?> - Portfolio Développement Digital OFPPT</p>
    </footer>

</div>

</body>
</html>