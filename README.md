# 🐛 Cours de Méthodologie de Debug

## Types de bugs 

### HTML/CSS
- Chemins d'images incorrects
- Classes mal orthographiées
- Problèmes de visibilité (couleurs identiques)
- Flexbox cassé (display manquant)
- Media queries incorrectes
- Sélecteurs CSS erronés
- Z-index mal écrit ou mal utilisé
- Grid CSS sans display
- Box-sizing incorrect
- Attributs HTML manquants ou incorrects

### JavaScript
- Sélecteurs DOM incorrects (querySelector)
- EventListener mal écrit ou sur mauvais élément
- Problèmes de types (string vs number)
- Scripts chargés avant le DOM
- Validation de formulaire manquante
- Concaténation au lieu d'addition
- Méthodes appelées sans parenthèses
- Erreurs dans les conditions (>=, >, <)
- Boucles et itérations incorrectes
- Template literals mal utilisés

### API/Fetch
- URLs incorrectes
- Propriétés JSON inexistantes
- Await manquant
- Pas de gestion d'erreurs
- Paramètres d'URL incorrects (? vs &)
- Méthodes JavaScript mal orthographiées (appendChild vs appendchild)
- Promesses non résolues
- Headers HTTP mal nommés (Authorization vs Authentification)
- Types de réponse incorrects (.json() sans await)
- Clés d'objets manquantes ou mal orthographiées
- Noms de paramètres de requête incorrects

## Utilisation

1. Ouvrez un fichier d'exercice dans votre navigateur
2. Constatez le bug
3. Ouvrez la console développeur (F12)
4. Lisez les messages d'erreur
5. Inspectez le code source
6. Corrigez les bugs

## Outils recommandés

**Pour HTML/CSS/JavaScript :**
- Navigateur moderne (Chrome)
- Console développeur (F12)
- Éditeur de code (VS Code, Sublime Text, etc.)
- Extensions utiles :
  - Live Server (pour VS Code)
  - DevTools (intégré au navigateur)

**Pour PHP :**
- PHP 8.x installé
- Xdebug pour le debug
- Serveur local (XAMPP, MAMP ou `php -S`)
- Extension PHP Debug pour VS Code
