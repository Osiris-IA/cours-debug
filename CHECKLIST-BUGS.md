# Checklist des bugs à trouver

Ce fichier liste le **nombre de bugs** dans chaque exercice et **ce qui ne fonctionne pas** visuellement ou fonctionnellement.

Utilise cette checklist pour vérifier que tu as bien trouvé tous les bugs !

---

## Exercices HTML/CSS

### ex1-image-404.html
**3 bugs à trouver** :
- [ ] Le titre n'a pas le bon style (bordure bleue manquante)
- [ ] L'image ne s'affiche pas
- [ ] Problème d'accessibilité (attribut manquant sur l'image)

---

### ex2-flex-casse.html
**2 bugs à trouver** :
- [ ] Les 3 cartes sont empilées verticalement au lieu d'être en ligne

---

### ex3-style-non-applique.html
**3 bugs à trouver** :
- [ ] Le bouton n'est pas rouge avec texte blanc (il est bleu/jaune)
- [ ] Le bouton devrait être rouge même avec l'id #special-button
- [ ] Un des paragraphes n'a pas le bon style

---

### ex4-responsive-casse.html
**2 bugs à trouver** :
- [ ] Sur mobile (< 768px), le texte et l'image restent côte à côte au lieu de s'empiler
- [ ] La mise en page ne change pas quand on redimensionne la fenêtre

---

### ex5-z-index-probleme.html
**2 bugs à trouver** :
- [ ] Le menu de navigation disparaît derrière la section hero
- [ ] La popup modale n'apparaît pas au-dessus du menu de navigation

---

### ex6-grid-layout-casse.html
**1 bug à trouver** :
- [ ] Les images de la galerie sont empilées verticalement au lieu d'être en grille 3 colonnes

---

### ex7-form-styling.html
**2 bugs à trouver** :
- [ ] Les champs input débordent du conteneur sur les côtés
- [ ] Le champ email n'est pas relié au bon label (clic sur label ne focus pas l'input)

---

### ex8-cascade-css-complexe.html
**5 bugs à trouver** :
- [ ] Tous les boutons sont orange au lieu d'être bleus (sauf les premium qui doivent être orange)
- [ ] Le badge "⭐ PREMIUM" ne s'affiche pas sur la carte premium
- [ ] Le bouton "Documentation" ne devient pas gris au survol
- [ ] Le bouton "Choisir Pro" (featured) reste bleu au lieu d'être vert
- [ ] Les boutons des pricing cards ne changent pas de couleur au survol

---

### ex9-dashboard-layout.html
**5 bugs à trouver** :
- [ ] Le badge de notification (chiffre "3") ne s'affiche pas sur la cloche
- [ ] Le header sticky passe derrière d'autres éléments quand on scroll
- [ ] La colonne "Activité récente" prend trop de place (3 colonnes au lieu de 2)
- [ ] Le hover sur les lignes du tableau ne fonctionne pas
- [ ] Le tableau a un scroll vertical inutile en plus du scroll horizontal

---

### ex10-animations-transitions.html
**5 bugs à trouver** :
- [ ] La boîte "Pulsation" ne pulse pas (pas d'animation)
- [ ] La boîte "Glisse →" ne se déplace pas au survol
- [ ] La boîte "Flip 3D" montre les deux faces en même temps
- [ ] La boîte "Effet lumineux" n'a pas d'effet de lueur au survol
- [ ] La boîte "Rebond ↕" ne rebondit pas

---

## Exercices JavaScript

### ex1-button-ne-marche-pas.html
**2 bugs à trouver** :
- [ ] Le bouton ne réagit pas au clic (erreur dans la console)
- [ ] Le message ne s'affiche pas même après correction du premier bug

---

### ex2-compteur-bugue.html
**1 bug à trouver** :
- [ ] Le bouton "+" affiche "01", "011", "0111" au lieu de 1, 2, 3...

---

### ex3-todo-list-cassee.html
**2 bugs à trouver** :
- [ ] Les tâches ne s'ajoutent pas à la liste (erreur dans la console)
- [ ] On peut ajouter des tâches vides (juste des espaces)

---

### ex4-dom-null.html
**2 bugs à trouver** :
- [ ] Les boutons ne fonctionnent pas (erreur "cannot read property of null")
- [ ] Même après avoir déplacé le script, les boutons ne marchent toujours pas

---

### ex5-filtre-recherche.html
**1 bug à trouver** :
- [ ] La recherche ne filtre rien, tous les utilisateurs restent affichés

---

### ex6-slider-images.html
**1 bug à trouver** :
- [ ] Le bouton "Suivant" saute une image (passe de l'image 3 à 1 directement)

---

### ex7-validation-formulaire.html
**1 bug à trouver** :
- [ ] L'erreur "Les mots de passe ne correspondent pas" ne s'affiche jamais

---

## Exercices API

### ex1-fetch-pokemon-bugue.html
**3 bugs à trouver** :
- [ ] Erreur 404 dans la console (URL incorrecte)
- [ ] Le nom du Pokémon ne s'affiche pas (undefined)
- [ ] Aucun message d'erreur n'apparaît quand l'API échoue

---

### ex2-fetch-meteo-bugue.html
**2 bugs à trouver** :
- [ ] La page reste bloquée sur "Chargement..." (Promise non résolue)
- [ ] La température ne s'affiche pas (undefined °C)

---

### ex3-fetch-users-bugue.html
**2 bugs à trouver** :
- [ ] Erreur "users.forEach is not a function" dans la console
- [ ] Les noms des utilisateurs ne s'affichent pas (undefined)

---

### ex4-fetch-posts-bugue.html
**1 bug à trouver** :
- [ ] Les articles ne s'affichent pas (erreur dans la console)

---

### ex5-headers-auth.html
**2 bugs à trouver** :
- [ ] Le premier bouton ne charge rien (erreur de header)
- [ ] Les détails utilisateur ne chargent rien non plus

---

### ex6-response-types.html
**4 bugs à trouver** :
- [ ] Le bouton "Charger JSON" reste bloqué sur "Chargement..."
- [ ] Le bouton "Charger Texte" affiche "undefined caractères"
- [ ] Les statistiques affichent des valeurs incorrectes (undefined)
- [ ] Le tableau des commentaires affiche "undefined" dans la colonne Nom

---

### ex7-params-query.html
**2 bugs à trouver** :
- [ ] La recherche ne fonctionne jamais (erreur 400)
- [ ] Le filtre par utilisateur ne filtre rien

---

### ex8-missing-keys.html
**2 bugs à trouver** :
- [ ] Le nom de l'entreprise ne s'affiche pas (undefined)
- [ ] L'adresse affiche "undefined" pour la ville

---

## Exercices PHP

### ex1-variables-types.php
**3 bugs à trouver** :
- [ ] Le total TTC affiche 4646.5 au lieu de 55.80 (problème de type string/number)
- [ ] Le nom complet affiche 0 au lieu de "Dupont Marie"
- [ ] Les calculs s'affichent bizarrement (concaténation au lieu d'addition)

---

### ex2-formulaire-validation.php
**3 bugs à trouver** :
- [ ] Le formulaire s'affiche toujours comme "envoyé" même sans cliquer
- [ ] Erreurs PHP "Undefined index" dans la console
- [ ] La validation se déclenche même sur page vide

---

### ex3-sessions-login.php
**3 bugs à trouver** :
- [ ] La page ne charge pas du tout (erreur fatale)
- [ ] Après connexion réussie, on reste sur "non connecté"
- [ ] La déconnexion ne vide pas la session

---

### ex4-tableau-fonctions.php
**3 bugs à trouver** :
- [ ] Les produits ne s'affichent pas dans le tableau (erreur fatale)
- [ ] Message "Undefined index: prix" dans la console
- [ ] Le prix moyen calculé est incorrect

---

### ex5-fichiers-upload.php
**3 bugs à trouver** :
- [ ] Les fichiers ne s'uploadent jamais (erreur de déplacement)
- [ ] Message "Fichier trop volumineux" même pour petits fichiers
- [ ] Les fichiers disparaissent après upload

---

### ex6-db-connexion.php
**2 bugs à trouver** :
- [ ] Tous les utilisateurs s'affichent au lieu de seulement "Marie"
- [ ] Erreur après l'affichage des statistiques

---

## Challenge Final

### mini-site-bugathon.html
**8 bugs à trouver** :

**HTML/CSS** :
- [ ] Les 3 cartes sont empilées verticalement au lieu d'être alignées
- [ ] Sur mobile, le layout ne passe pas en colonne

**JavaScript** :
- [ ] Le bouton "Incrémenter" affiche 01, 011, 0111...
- [ ] Le bouton "Décrémenter" ne fait rien (erreur console)
- [ ] Les boutons ne fonctionnent pas au chargement de la page

**API** :
- [ ] La page reste bloquée sur "Chargement..." pour la citation
- [ ] La citation ne s'affiche pas (propriété undefined)
