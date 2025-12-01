<!-- EXERCICE : ex4-tableau-fonctions / Thème : Tableaux et fonctions / Niveau : Intermédiaire -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 4 - Tableaux et Fonctions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
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
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        .error {
            background-color: #fee;
            color: #c00;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exercice 4 : Gestion de produits</h1>
        
        <?php
        function calculerRemise($prix, $pourcentage) {
            return $prix * ($pourcentage / 100);
        }
        
        function afficherProduit($produit) {
            echo "<tr>";
            echo "<td>" . $produit['nom'] . "</td>";
            echo "<td>" . number_format($produit['prix'], 2) . " €</td>";
            echo "<td>" . $produit['stock'] . "</td>";
            echo "<td>" . $produit['categorie'] . "</td>";
            echo "</tr>";
        }
        
        $produits = array(
            array('nom' => 'Ordinateur', 'prix' => 899.99, 'stock' => 5, 'categorie' => 'Informatique'),
            array('nom' => 'Souris', 'prix' => 25.50, 'stock' => 15, 'categorie' => 'Informatique'),
            array('nom' => 'Clavier', 'prix' => 45.00, 'stock' => 10, 'categorie' => 'Informatique'),
            array('nom' => 'Écran', 'prix' => 299.99, 'stock' => 3, 'categorie' => 'Informatique')
        );
        
        echo "<h2>Liste des produits</h2>";
        echo "<table>";
        echo "<tr><th>Nom</th><th>Prix</th><th>Stock</th><th>Catégorie</th></tr>";
        foreach ($produits as $produit) {
            afficheProduit($produit);
        }
        echo "</table>";
        
        echo "<div class='result'>";
        echo "<h3>Statistiques</h3>";
        $total_produits = count($produits);
        echo "Nombre de produits : " . $total_produits . "<br>";
        
        $total_valeur = 0;
        foreach ($produits as $produit) {
            $total_valeur += $produit['prix'] * $produit['stock'];
        }
        echo "Valeur totale du stock : " . number_format($total_valeur, 2) . " €<br>";
        
        $prix_moyen = 0;
        foreach ($produits as $produit) {
            $prix_moyen += $produit[prix];
        }
        $prix_moyen = $prix_moyen / $total_produits;
        echo "Prix moyen : " . number_format($prix_moyen, 2) . " €<br>";
        echo "</div>";
        
        echo "<div class='result'>";
        echo "<h3>Produits avec remise de 20%</h3>";
        echo "<table>";
        echo "<tr><th>Produit</th><th>Prix original</th><th>Remise</th><th>Prix final</th></tr>";
        
        foreach ($produits as $produit) {
            $remise = calculerRemise($produit['prix'], 20);
            $prix_final = $produit['prix'] - $remise;
            
            echo "<tr>";
            echo "<td>" . $produit['nom'] . "</td>";
            echo "<td>" . number_format($produit['prix'], 2) . " €</td>";
            echo "<td>-" . number_format($remise, 2) . " €</td>";
            echo "<td><strong>" . number_format($prix_final, 2) . " €</strong></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        
        echo "<div class='result'>";
        echo "<h3>Produits en rupture de stock (stock < 5)</h3>";
        $produits_faible_stock = array();
        foreach ($produits as $produit) {
            if ($produit['stock'] < 5) {
                $produits_faible_stock[] = $produit;
            }
        }
        
        if (empty($produits_faible_stock)) {
            echo "<p>Aucun produit en rupture</p>";
        } else {
            echo "<ul>";
            foreach ($produits_faible_stock as $produit) {
                echo "<li>" . $produit['nom'] . " (Stock : " . $produit['stock'] . ")</li>";
            }
            echo "</ul>";
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>

