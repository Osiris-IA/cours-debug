# 🐘 Installation et Configuration PHP + Xdebug

Ce guide explique comment installer PHP, Xdebug et exécuter les exercices.

---

## 🐛 Installation de Xdebug

### Sur Windows (avec XAMPP)

1. **Télécharger Xdebug**
   - Aller sur https://xdebug.org/wizard
   - Copier le résultat de `php -i` dans le formulaire
   - Télécharger le fichier `.dll` recommandé

2. **Installer Xdebug**
   ```
   - Placer le fichier dans C:\xampp\php\ext\
   - Exemple : php_xdebug-3.3.0-8.2-vs16-x86_64.dll
   ```

3. **Configurer php.ini**
   - Ouvrir `C:\xampp\php\php.ini`
   - Ajouter à la fin du fichier :

```ini
[Xdebug]
zend_extension = "C:\xampp\php\ext\php_xdebug-3.3.0-8.2-vs16-x86_64.dll"
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.client_port = 9003
xdebug.client_host = localhost
xdebug.log = "C:\xampp\tmp\xdebug.log"
```

### Sur macOS (avec Homebrew)

```bash
# Installer Xdebug via PECL
pecl install xdebug

# Trouver le fichier php.ini
php --ini

# Éditer php.ini (remplacer par votre chemin)
nano /opt/homebrew/etc/php/8.2/php.ini
```

Ajouter à la fin :

```ini
[Xdebug]
zend_extension="xdebug.so"
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_port=9003
xdebug.client_host=localhost
```

### Sur Linux

```bash
# Installer Xdebug
sudo apt install php-xdebug

# Configurer Xdebug
sudo nano /etc/php/8.x/cli/conf.d/20-xdebug.ini
```

Ajouter :

```ini
zend_extension=xdebug.so
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_port=9003
xdebug.client_host=localhost
```

### Vérification de Xdebug

```bash
php -v
```

Vous devriez voir :
```
PHP 8.x.x (cli) (built: ...)
    with Xdebug v3.x.x, Copyright (c) 2002-2023
```

Ou :

```bash
php -m | grep xdebug
```

Devrait afficher :
```
xdebug
```

---

## 🚀 Exécuter les exercices PHP

### Méthode 1 : Serveur PHP intégré (Recommandé)

**Démarrer le serveur**

```bash
# Se placer dans le dossier du projet
cd /chemin/vers/cours-methodo

# Démarrer le serveur sur le port 8000
php -S localhost:8000
```

**Accéder aux exercices**
- Ouvrir le navigateur
- Aller sur `http://localhost:8000/php-exercises/ex1-variables-types.php`

**Arrêter le serveur**
- Appuyer sur `Ctrl + C` dans le terminal

### Méthode 2 : Exécuter directement en ligne de commande

**Pour les fichiers sans HTML**

```bash
# Exécuter un fichier PHP
php php-exercises/ex1-variables-types.php
```

**Pour activer le debug**

```bash
# Exécuter avec affichage des erreurs
php -d display_errors=on -d error_reporting=E_ALL php-exercises/ex1-variables-types.php
```

### Méthode 3 : Avec XAMPP/MAMP

**XAMPP (Windows)**
1. Copier le dossier `cours-methodo` dans `C:\xampp\htdocs\`
2. Démarrer Apache dans le panneau XAMPP
3. Ouvrir `http://localhost/cours-methodo/php-exercises/ex1-variables-types.php`

**MAMP (macOS)**
1. Copier le dossier dans `/Applications/MAMP/htdocs/`
2. Démarrer MAMP
3. Ouvrir `http://localhost:8888/cours-methodo/php-exercises/ex1-variables-types.php`

---

## 🔍 Debugger avec Xdebug

### Configuration VS Code

1. **Installer l'extension PHP Debug**
   - Ouvrir VS Code
   - Extensions → Rechercher "PHP Debug"
   - Installer (Felix Becker)

2. **Créer la configuration de debug**

Créer `.vscode/launch.json` :

```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/chemin/vers/cours-methodo": "${workspaceFolder}"
            }
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9003
        }
    ]
}
```

3. **Utiliser le debugger**
   - Placer un point d'arrêt (clic à gauche du numéro de ligne)
   - Appuyer sur F5 ou Debug → Start Debugging
   - Exécuter le fichier PHP
   - Le code s'arrêtera au point d'arrêt

### Commandes utiles en debug

**Dans le terminal PHP**

```bash
# Activer le mode verbose
php -d xdebug.mode=debug,develop php-exercises/ex1-variables-types.php

# Voir la configuration Xdebug
php -i | grep xdebug
```

**Dans VS Code**
- `F5` : Démarrer le debug
- `F10` : Step over (ligne suivante)
- `F11` : Step into (entrer dans la fonction)
- `Shift + F11` : Step out (sortir de la fonction)
- `F9` : Placer/retirer un point d'arrêt

---

## 🛠️ Commandes PHP utiles

### Informations système

```bash
# Version de PHP
php -v

# Configuration PHP
php -i

# Modules installés
php -m

# Trouver php.ini
php --ini
```

### Exécution

```bash
# Exécuter un fichier
php fichier.php

# Exécuter du code PHP directement
php -r "echo 'Hello World';"

# Mode interactif
php -a

# Vérifier la syntaxe sans exécuter
php -l fichier.php
```

### Debug et erreurs

```bash
# Afficher toutes les erreurs
php -d display_errors=on -d error_reporting=E_ALL fichier.php

# Activer Xdebug pour une exécution
php -d xdebug.mode=debug fichier.php

# Voir les logs d'erreurs
tail -f /var/log/apache2/error.log  # Linux
tail -f C:\xampp\apache\logs\error.log  # Windows XAMPP
```

---

## 📝 Configuration recommandée pour le debug

### Activer l'affichage des erreurs (php.ini)

```ini
; Afficher les erreurs
display_errors = On
display_startup_errors = On

; Niveau de rapport d'erreurs
error_reporting = E_ALL

; Log des erreurs
log_errors = On
error_log = /tmp/php_errors.log

; Désactiver les notices (optionnel)
; error_reporting = E_ALL & ~E_NOTICE
```
