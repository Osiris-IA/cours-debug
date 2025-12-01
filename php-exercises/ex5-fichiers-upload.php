<!-- EXERCICE : ex5-fichiers-upload / Thème : Upload et manipulation de fichiers / Niveau : Avancé -->

<?php
$message = '';
$error = '';
$upload_dir = 'uploads/';

if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fichier'])) {
    $file = $_FILES['fichier'];
    $filename = $file['name'];
    $tmp_name = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    
    $extensions_autorisees = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    if ($file_error === 0) {
        if (in_array($extension, $extensions_autorisees)) {
            if ($file_size < 2000000) {
                $nouveau_nom = uniqid('', true) . "." . $extension;
                $destination = $upload_dir . "/" . $nouveau_nom;
                
                if (move_uploaded_file($tmp_name, $destination)) {
                    $message = "✓ Fichier uploadé avec succès : " . $filename;
                } else {
                    $error = "Erreur lors du déplacement du fichier";
                }
            } else {
                $error = "Le fichier est trop volumineux (max 2 Mo)";
            }
        } else {
            $error = "Type de fichier non autorisé. Utilisez : " . implode(', ', $extensions_autorisees);
        }
    } else {
        $error = "Erreur lors de l'upload (code: " . $file_error . ")";
    }
}

$fichiers_uploades = array();
if (is_dir($upload_dir)) {
    $fichiers_uploades = scandir($upload_dir);
    $fichiers_uploades = array_diff($fichiers_uploades, array('.', '..'));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 5 - Upload de fichiers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
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
        .upload-form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        input[type="file"] {
            padding: 10px;
            border: 2px dashed #3498db;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            cursor: pointer;
        }
        button {
            background-color: #27ae60;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background-color: #229954;
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
        .files-list {
            margin-top: 30px;
        }
        .file-item {
            background-color: #f8f9fa;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: 4px solid #3498db;
        }
        .file-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .file-size {
            color: #7f8c8d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📁 Gestionnaire de fichiers</h1>
        
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <div class="upload-form">
            <h2>Uploader un fichier</h2>
            <p>Formats acceptés : JPG, PNG, GIF, PDF (max 2 Mo)</p>
            
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="fichier" required>
                <button type="submit">Uploader</button>
            </form>
        </div>
        
        <div class="files-list">
            <h2>Fichiers uploadés (<?php echo count($fichiers_uploades); ?>)</h2>
            
            <?php if (empty($fichiers_uploades)): ?>
                <p>Aucun fichier uploadé pour le moment</p>
            <?php else: ?>
                <?php foreach ($fichiers_uploades as $fichier): ?>
                    <?php
                    $chemin_fichier = $upload_dir . $fichier;
                    $taille = filesize($chemin_fichier);
                    $taille_mb = round($taille / 1024 / 1024, 2);
                    ?>
                    <div class="file-item">
                        <div class="file-info">
                            <div>
                                <strong><?php echo htmlspecialchars($fichier); ?></strong><br>
                                <span class="file-size"><?php echo $taille_mb; ?> Mo</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

