<!-- EXERCICE : ex1-variables-types / Thème : Variables et types PHP / Niveau : Débutant -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 1 - Variables et types</title>
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
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        .result {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            font-family: monospace;
        }
        .error {
            background-color: #fee;
            color: #c00;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exercice 1 : Calculs et Variables</h1>
        
        <?php
        $prix_unitaire = "15.50";
        $quantite = 3;
        $tva = 0.20;
        
        $total_ht = $prix_unitaire * $quantite;
        $montant_tva = $total_ht * $tva;
        $total_ttc = $total_ht + $montant_tva;
        
        echo "<div class='result'>";
        echo "<strong>Détails de la commande :</strong><br>";
        echo "Prix unitaire : " . $prix_unitaire . " €<br>";
        echo "Quantité : " . $quantite . "<br>";
        echo "Total HT : " . $total_ht . " €<br>";
        echo "TVA (20%) : " . $montant_tva . " €<br>";
        echo "Total TTC : " . $total_ttc . " €<br>";
        echo "</div>";
        
        $age = "25";
        $annees_experience = 5;
        $total_annees = $age + $annees_experience;
        
        echo "<div class='result'>";
        echo "<strong>Calcul d'années :</strong><br>";
        echo "Âge actuel : " . $age . " ans<br>";
        echo "Années d'expérience : " . $annees_experience . " ans<br>";
        echo "Total : " . $total_annees . " ans<br>";
        echo "</div>";
        
        $nom = "Dupont";
        $prenom = "Marie";
        $nom_complet = $nom + " " + $prenom;
        
        echo "<div class='result'>";
        echo "<strong>Nom complet :</strong><br>";
        echo $nom_complet;
        echo "</div>";
        
        $note1 = 15;
        $note2 = 12;
        $note3 = 18;
        $moyenne = ($note1 + $note2 + $note3) / 3;
        
        echo "<div class='result'>";
        echo "<strong>Moyenne des notes :</strong><br>";
        echo "Note 1 : " . $note1 . "<br>";
        echo "Note 2 : " . $note2 . "<br>";
        echo "Note 3 : " . $note3 . "<br>";
        echo "Moyenne : " . number_format($moyenne, 2) . " / 20<br>";
        echo "</div>";
        
        $stock = 10;
        $commande = "5";
        $reste = $stock - $commande;
        
        echo "<div class='result'>";
        echo "<strong>Gestion du stock :</strong><br>";
        echo "Stock initial : " . $stock . "<br>";
        echo "Commandé : " . $commande . "<br>";
        echo "Reste en stock : " . $reste . "<br>";
        echo "</div>";
        ?>
        
        <p><strong>Attendu :</strong></p>
        <ul>
            <li>Total TTC devrait être 55.80 €</li>
            <li>Le nom complet devrait être "Dupont Marie"</li>
            <li>Tous les calculs devraient être corrects</li>
        </ul>
    </div>
</body>
</html>

