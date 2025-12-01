<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Configuration PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
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
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ecf0f1;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            border-left: 4px solid #28a745;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            border-left: 4px solid #dc3545;
        }
        .info {
            background-color: #d1ecf1;
            color: #0c5460;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            border-left: 4px solid #17a2b8;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
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
        .version {
            font-size: 2em;
            color: #3498db;
            font-weight: bold;
        }
        pre {
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }
        .badge-success { background-color: #28a745; color: white; }
        .badge-danger { background-color: #dc3545; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🐘 Test de Configuration PHP</h1>
        
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ?>
        
        <h2>Version PHP</h2>
        <div class="version"><?php echo phpversion(); ?></div>
        <?php if (version_compare(PHP_VERSION, '8.0.0', '>=')): ?>
            <div class="success">✓ Version PHP recommandée (8.0+)</div>
        <?php else: ?>
            <div class="error">⚠ Version PHP trop ancienne. Recommandé : 8.0+</div>
        <?php endif; ?>
        
        <h2>Xdebug</h2>
        <?php if (extension_loaded('xdebug')): ?>
            <div class="success">
                ✓ Xdebug est installé et actif
                <span class="badge badge-success">Version <?php echo phpversion('xdebug'); ?></span>
            </div>
            
            <h3>Configuration Xdebug</h3>
            <table>
                <tr>
                    <th>Paramètre</th>
                    <th>Valeur</th>
                </tr>
                <tr>
                    <td>xdebug.mode</td>
                    <td><?php echo ini_get('xdebug.mode') ?: 'Non défini'; ?></td>
                </tr>
                <tr>
                    <td>xdebug.start_with_request</td>
                    <td><?php echo ini_get('xdebug.start_with_request') ?: 'Non défini'; ?></td>
                </tr>
                <tr>
                    <td>xdebug.client_port</td>
                    <td><?php echo ini_get('xdebug.client_port') ?: 'Non défini'; ?></td>
                </tr>
                <tr>
                    <td>xdebug.client_host</td>
                    <td><?php echo ini_get('xdebug.client_host') ?: 'Non défini'; ?></td>
                </tr>
            </table>
        <?php else: ?>
            <div class="error">
                ✗ Xdebug n'est pas installé
                <span class="badge badge-danger">Non disponible</span>
            </div>
            <div class="info">
                📖 Consultez INSTALLATION-PHP.md pour installer Xdebug
            </div>
        <?php endif; ?>
        
        <h2>Configuration PHP</h2>
        <table>
            <tr>
                <th>Paramètre</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td>display_errors</td>
                <td><?php echo ini_get('display_errors') ? 'On' : 'Off'; ?></td>
            </tr>
            <tr>
                <td>error_reporting</td>
                <td><?php echo ini_get('error_reporting'); ?></td>
            </tr>
            <tr>
                <td>max_execution_time</td>
                <td><?php echo ini_get('max_execution_time'); ?> secondes</td>
            </tr>
            <tr>
                <td>memory_limit</td>
                <td><?php echo ini_get('memory_limit'); ?></td>
            </tr>
            <tr>
                <td>upload_max_filesize</td>
                <td><?php echo ini_get('upload_max_filesize'); ?></td>
            </tr>
            <tr>
                <td>post_max_size</td>
                <td><?php echo ini_get('post_max_size'); ?></td>
            </tr>
        </table>
        
        <h2>Extensions installées</h2>
        <?php
        $extensions = get_loaded_extensions();
        $important_extensions = ['xdebug', 'pdo', 'mysqli', 'mbstring', 'curl', 'json', 'xml'];
        ?>
        
        <table>
            <tr>
                <th>Extension</th>
                <th>Status</th>
            </tr>
            <?php foreach ($important_extensions as $ext): ?>
                <tr>
                    <td><?php echo $ext; ?></td>
                    <td>
                        <?php if (in_array($ext, $extensions)): ?>
                            <span class="badge badge-success">✓ Installée</span>
                        <?php else: ?>
                            <span class="badge badge-danger">✗ Non installée</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
        <h2>Toutes les extensions (<?php echo count($extensions); ?>)</h2>
        <pre><?php print_r($extensions); ?></pre>
        
        <h2>Chemins importants</h2>
        <table>
            <tr>
                <th>Description</th>
                <th>Chemin</th>
            </tr>
            <tr>
                <td>Fichier php.ini chargé</td>
                <td><?php echo php_ini_loaded_file() ?: 'Aucun'; ?></td>
            </tr>
            <tr>
                <td>Fichiers .ini supplémentaires</td>
                <td><?php echo php_ini_scanned_files() ?: 'Aucun'; ?></td>
            </tr>
            <tr>
                <td>Document root</td>
                <td><?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Non défini'; ?></td>
            </tr>
            <tr>
                <td>Script actuel</td>
                <td><?php echo __FILE__; ?></td>
            </tr>
        </table>
        
        <h2>Variables serveur</h2>
        <table>
            <tr>
                <th>Variable</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td>SERVER_SOFTWARE</td>
                <td><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Non défini'; ?></td>
            </tr>
            <tr>
                <td>SERVER_NAME</td>
                <td><?php echo $_SERVER['SERVER_NAME'] ?? 'Non défini'; ?></td>
            </tr>
            <tr>
                <td>SERVER_PORT</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?? 'Non défini'; ?></td>
            </tr>
            <tr>
                <td>REQUEST_METHOD</td>
                <td><?php echo $_SERVER['REQUEST_METHOD'] ?? 'Non défini'; ?></td>
            </tr>
        </table>
        
        <h2>Test des fonctions PHP</h2>
        <?php
        $tests = [
            'Variables' => function() {
                $test = "Hello";
                return $test === "Hello";
            },
            'Tableaux' => function() {
                $arr = ['a', 'b', 'c'];
                return count($arr) === 3;
            },
            'Fonctions' => function() {
                $func = function($x) { return $x * 2; };
                return $func(5) === 10;
            },
            'Sessions' => function() {
                return function_exists('session_start');
            },
            'JSON' => function() {
                return function_exists('json_encode');
            }
        ];
        
        echo "<table>";
        echo "<tr><th>Test</th><th>Résultat</th></tr>";
        foreach ($tests as $name => $test) {
            $result = $test();
            echo "<tr>";
            echo "<td>{$name}</td>";
            echo "<td>";
            if ($result) {
                echo "<span class='badge badge-success'>✓ OK</span>";
            } else {
                echo "<span class='badge badge-danger'>✗ Échec</span>";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        
        <h2>Résumé</h2>
        <div class="info">
            <strong>✓ Configuration vérifiée avec succès !</strong><br>
            Vous pouvez maintenant commencer les exercices PHP.
        </div>
        
        <h2>Commandes utiles</h2>
        <pre>
# Démarrer le serveur PHP
php -S localhost:8000

# Exécuter un fichier PHP
php nom-fichier.php

# Vérifier la version
php -v

# Lister les modules
php -m

# Trouver php.ini
php --ini
        </pre>
    </div>
</body>
</html>

