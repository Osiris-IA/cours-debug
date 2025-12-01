<!-- EXERCICE : ex6-db-connexion / Thème : Connexion base de données / Niveau : Avancé -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 6 - Base de données</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .message {
            background-color: #dfd;
            color: #060;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .error {
            background-color: #fee;
            color: #c00;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .warning {
            background-color: #fff3cd;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }
        .stat-card {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .stat-value {
            font-size: 2em;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 Gestion des utilisateurs</h1>
        
        <?php
        $host = 'localhost';
        $dbname = 'test_db';
        $username = 'root';
        $password = '';
        
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "<div class='message'>✓ Connexion à la base de données réussie</div>";
            
            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);
            $users = $stmt->fetchAll();
            
            echo "<div class='stats'>";
            echo "<div class='stat-card'>";
            echo "<div class='stat-value'>" . count($users) . "</div>";
            echo "<div>Utilisateurs totaux</div>";
            echo "</div>";
            
            $sql_active = "SELECT COUNT(*) as count FROM users WHERE status = 'active'";
            $stmt_active = $conn->query($sql_active);
            $active_count = $stmt_active->fetch()['count'];
            
            echo "<div class='stat-card'>";
            echo "<div class='stat-value'>" . $active_count . "</div>";
            echo "<div>Utilisateurs actifs</div>";
            echo "</div>";
            echo "</div>";
            
            echo "<h2>Liste des utilisateurs</h2>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Statut</th><th>Date d'inscription</th></tr>";
            
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . htmlspecialchars($user['nom']) . "</td>";
                echo "<td>" . htmlspecialchars($user['email']) . "</td>";
                echo "<td>" . htmlspecialchars($user['status']) . "</td>";
                echo "<td>" . date('d/m/Y', strtotime($user['created_at'])) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            $sql_search = "SELECT * FROM users WHERE nom LIKE 'Marie%'";
            $stmt_search = $conn->prepare($sql_search);
            $stmt_search->execute();
            $results = $stmt_search->fetchAll();
            
            echo "<h2>Recherche : Utilisateurs dont le nom commence par 'Marie'</h2>";
            if (empty($results)) {
                echo "<p>Aucun résultat trouvé</p>";
            } else {
                echo "<p>Trouvé : " . count($results) . " résultat(s)</p>";
            }
            
        } catch(PDOException $e) {
            echo "<div class='error'>";
            echo "<strong>Erreur de connexion :</strong><br>";
            echo $e->getMessage();
            echo "</div>";
            
            echo "<div class='warning'>";
            echo "<strong>Note :</strong> Cet exercice nécessite une base de données MySQL.<br>";
            echo "Pour tester :<br>";
            echo "1. Créer une base 'test_db'<br>";
            echo "2. Créer une table 'users' avec les colonnes : id, nom, email, status, created_at<br>";
            echo "3. Insérer quelques données de test";
            echo "</div>";
        }
        
        $conn = null;
        ?>
    </div>
</body>
</html>

