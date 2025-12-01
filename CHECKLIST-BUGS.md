# Checklist des bugs à trouver

Ce fichier liste le **nombre de bugs** dans chaque exercice et **ce qui ne fonctionne pas** visuellement ou fonctionnellement.

Utilise cette checklist pour vérifier que tu as bien trouvé tous les bugs !

---

## Démos d'introduction

### demo-html-css.html
**3 bugs à trouver** :
- [ ] Le titre n'a pas le style attendu (pas de couleur #333)
- [ ] L'image ne s'affiche pas (404)
- [ ] Un texte devrait être visible mais ne l'est pas

---

### demo-js.html
**2 bugs à trouver** :
- [ ] Le bouton ne fait rien quand on clique dessus
- [ ] Le compteur ne s'affiche pas / erreur dans la console

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
- [ ] L'espacement des cartes n'est pas correct

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
