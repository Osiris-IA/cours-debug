<!-- EXERCICE : ex2-formulaire-validation / Thème : Formulaires et validation / Niveau : Intermédiaire -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 2 - Formulaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
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
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #34495e;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        .error {
            background-color: #fee;
            color: #c00;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .success {
            background-color: #dfd;
            color: #060;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire d'inscription</h1>
        
        <?php
        $errors = array();
        
        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $pays = $_POST['pays'];
            
            if (empty($nom)) {
                $errors[] = "Le nom est obligatoire";
            }
            
            if (empty($email)) {
                $errors[] = "L'email est obligatoire";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "L'email n'est pas valide";
            }
            
            if (empty($age)) {
                $errors[] = "L'âge est obligatoire";
            } elseif ($age < 18) {
                $errors[] = "Vous devez avoir au moins 18 ans";
            }
            
            if ($pays == "") {
                $errors[] = "Veuillez sélectionner un pays";
            }
            
            if (count($errors) == 0) {
                echo "<div class='success'>";
                echo "<strong>✓ Inscription réussie !</strong><br>";
                echo "Nom : " . htmlspecialchars($nom) . "<br>";
                echo "Email : " . htmlspecialchars($email) . "<br>";
                echo "Âge : " . htmlspecialchars($age) . " ans<br>";
                echo "Pays : " . htmlspecialchars($pays) . "<br>";
                echo "</div>";
            }
        }
        
        if (!empty($errors)) {
            echo "<div class='error'>";
            echo "<strong>Erreurs :</strong><br>";
            foreach ($errors as $error) {
                echo "• " . $error . "<br>";
            }
            echo "</div>";
        }
        ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="nom">Nom complet *</label>
                <input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="age">Âge *</label>
                <input type="number" id="age" name="age" value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="pays">Pays *</label>
                <select id="pays" name="pays">
                    <option value="">-- Sélectionner --</option>
                    <option value="France" <?php echo (isset($_POST['pays']) && $_POST['pays'] == 'France') ? 'selected' : ''; ?>>France</option>
                    <option value="Belgique" <?php echo (isset($_POST['pays']) && $_POST['pays'] == 'Belgique') ? 'selected' : ''; ?>>Belgique</option>
                    <option value="Suisse" <?php echo (isset($_POST['pays']) && $_POST['pays'] == 'Suisse') ? 'selected' : ''; ?>>Suisse</option>
                    <option value="Canada" <?php echo (isset($_POST['pays']) && $_POST['pays'] == 'Canada') ? 'selected' : ''; ?>>Canada</option>
                </select>
            </div>
            
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>

