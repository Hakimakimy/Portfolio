<?php
// Portfolio Configuration & Data Setup
$studentName = "Your Name";
$specialty = "Développement Digital - 2ème Année";
$institution = "OFPPT - ISTA / ISGI";
$contactEmail = "student@example.com";
$githubUrl = "https://github.com/yourusername";
$linkedinUrl = "https://linkedin.com/in/yourusername";

$skills = [
    'Front-End' => ['HTML5 / CSS3', 'JavaScript (ES6+)', 'React.js', 'Tailwind CSS', 'Bootstrap'],
    'Back-End' => ['PHP (Native / OOP)', 'Laravel Framework', 'Node.js', 'REST API Architecture'],
    'Databases' => ['MySQL', 'PostgreSQL', 'UML Modeling (MCD/MLD)'],
    'Tools & DevOps' => ['Git & GitHub', 'Postman', 'Docker', 'Agile / Scrum']
];

$modules = [
    [
        'id' => 'backend',
        'title' => 'Back-End Web Development (Laravel & PHP)',
        'description' => 'Building RESTful APIs, MVC structure, authentication with Sanctum, Eloquent ORM, and middleware handling.',
        'exercise' => 'E-Commerce Management API with Role-Based Access Control.',
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
        'id' => 'frontend',
        'title' => 'Front-End Development (React.js)',
        'description' => 'Component architecture, state management with Redux Toolkit, asynchronous HTTP requests using Axios, and client-side routing.',
        'exercise' => 'Dynamic Management Dashboard connected to REST Backend.',
        'code_snippet' => 'import React, { useState, useEffect } from "react";
import axios from "axios";

export default function Dashboard() {
  const [data, setData] = useState([]);
  useEffect(() => {
    axios.get("/api/products").then(res => setData(res.data));
  }, []);
  return <div className="p-4">Loaded {data.length} items</div>;
}'
    ],
    [
        'id' => 'database',
        'title' => 'Database Design & SQL Stored Procedures',
        'description' => 'Conceptual data modeling (UML/Merise), database normalization, complex SQL joins, triggers, and transactions.',
        'exercise' => 'Inventory System Database Optimization & Automated Triggers.',
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
        'id' => 'mobile',
        'title' => 'Mobile Application Development',
        'description' => 'Cross-platform app design, native navigation, local data persistence (AsyncStorage/SQLite), and API synchronization.',
        'exercise' => 'Mobile Task & Ticket Tracker with Offline Fallback.',
        'code_snippet' => 'import { View, Text, FlatList } from "react-native";

export default function TaskList({ tasks }) {
  return (
    <FlatList 
      data={tasks} 
      renderItem={({item}) => <Text>{item.title}</Text>} 
    />
  );
}'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $studentName; ?> - OFPPT Portfolio</title>
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

        /* Header / Banner */
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

        /* Skills Grid */
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

        /* Module Sections */
        .module-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .module-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .module-header h3 {
            color: var(--accent);
            font-size: 1.3rem;
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

        /* Code & Image Boxes */
        pre {
            background-color: #090d16;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid var(--border);
            overflow-x: auto;
            font-size: 0.85rem;
            color: #a7f3d0;
        }

        .photo-placeholder {
            border: 2px dashed var(--border);
            border-radius: 6px;
            background-color: #131b2e;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 180px;
            text-align: center;
            padding: 15px;
            color: var(--text-muted);
        }

        .photo-placeholder img {
            max-width: 100%;
            border-radius: 4px;
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
            <a href="mailto:<?php echo $contactEmail; ?>">Email Me</a>
            <a href="<?php echo $githubUrl; ?>" target="_blank">GitHub</a>
            <a href="<?php echo $linkedinUrl; ?>" target="_blank">LinkedIn</a>
        </div>
    </header>

    <!-- Technical Skills -->
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

    <!-- Modules and Exercise Visuals -->
    <h2 class="section-title">2nd Year Modules & Exercise Work</h2>

    <?php foreach ($modules as $module): ?>
        <div class="module-card" id="<?php echo $module['id']; ?>">
            <div class="module-header">
                <h3><?php echo $module['title']; ?></h3>
            </div>
            <p><strong>Overview:</strong> <?php echo $module['description']; ?></p>
            <p><strong>Featured Exercise:</strong> <?php echo $module['exercise']; ?></p>

            <div class="exercise-grid">
                <!-- Code Snippet Box -->
                <div>
                    <p style="margin-bottom: 8px; color: var(--accent);"><strong>Exercise Code Structure:</strong></p>
                    <pre><code><?php echo htmlspecialchars($module['code_snippet']); ?></code></pre>
                </div>

                <!-- Exercise Photo Output Slot -->
                <div>
                    <p style="margin-bottom: 8px; color: var(--accent);"><strong>Exercise Result / Screenshot:</strong></p>
                    <div class="photo-placeholder">
                        <p>📷 <strong>Insert Screenshot Here</strong></p>
                        <small>Place your execution screenshot or Postman result image for this module inside your project folder and link it via an <code>&lt;img&gt;</code> tag.</small>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $studentName; ?> - OFPPT Digital Development Trainee Portfolio</p>
    </footer>

</div>

</body>
</html>