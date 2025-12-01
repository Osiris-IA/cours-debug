<!-- EXERCICE : ex3-sessions-login / Thème : Sessions et authentification / Niveau : Intermédiaire -->

<?php
sesion_start();

$users = array(
    'admin' => 'password123',
    'marie' => 'secret456',
    'pierre' => 'azerty789'
);

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if (isset($users[$username]) && $users[$username] == $password) {
            $_SESSION['user'] = $username;
            $_SESSION['login_time'] = time();
            $success = "Connexion réussie ! Bienvenue " . $username;
        } else {
            $error = "Identifiants incorrects";
        }
    }
    
    if (isset($_POST['logout'])) {
        session_destroy();
        $success = "Déconnexion réussie";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 3 - Sessions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
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
        input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #2980b9;
        }
        .logout-btn {
            background-color: #e74c3c;
        }
        .logout-btn:hover {
            background-color: #c0392b;
        }
        .error {
            background-color: #fee;
            color: #c00;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            text-align: center;
        }
        .success {
            background-color: #dfd;
            color: #060;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            text-align: center;
        }
        .user-info {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .hint {
            background-color: #fff3cd;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔐 Espace Connexion</h1>
        
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['logged_in'])): ?>
            <div class="user-info">
                <h2>✓ Vous êtes connecté</h2>
                <p><strong>Utilisateur :</strong> <?php echo htmlspecialchars($_SESSION['user']); ?></p>
                <p><strong>Connecté depuis :</strong> 
                    <?php 
                    $duration = time() - $_SESSION['login_time'];
                    echo gmdate("i:s", $duration);
                    ?> minutes
                </p>
            </div>
            
            <form method="POST">
                <button type="submit" name="logout" class="logout-btn">Se déconnecter</button>
            </form>
        <?php else: ?>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" name="login">Se connecter</button>
            </form>
            
            <div class="hint">
                <strong>💡 Comptes de test :</strong><br>
                • admin / password123<br>
                • marie / secret456<br>
                • pierre / azerty789
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

