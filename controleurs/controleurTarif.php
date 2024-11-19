<?php

require_once 'modeles/accesdb.php';
require_once 'config/param.php';

$maConnexion = connexion($dsn, $user, $pass);

// Récupérer toutes les catégories
$lesCateg = categories($maConnexion);

// Récupérer toutes les tailles de pizzas disponibles
$lesTailles = taillesDisponibles($maConnexion);

$carte = "<table border='1'>";
$carte .= "
    <thead>
        <tr>
            <th>Catégorie</th>";
foreach ($lesTailles as $uneTaille) {
    $carte .= "<th>" . htmlspecialchars($uneTaille['taille']) . " cm</th>";
}
$carte .= "
        </tr>
    </thead>
    <tbody>";

// Parcourir chaque catégorie
foreach ($lesCateg as $uneCateg) {
    $carte .= "<tr>";
    $carte .= "<td><strong>" . htmlspecialchars($uneCateg['libelleCategorie']) . "</strong></td>";

    // Parcourir chaque taille pour cette catégorie
    foreach ($lesTailles as $uneTaille) {
        $lesPizzas = pizzasCategorieEtTaille($maConnexion, $uneCateg['codeCategorie'], $uneTaille['taille']);
        $cellule = "";

        // Remplir la cellule avec les pizzas correspondantes
        foreach ($lesPizzas as $unePizza) {
            $lesIngredients = pizzasIngredients($maConnexion, $unePizza['numPizza']);
            $ingredientsList = array_map(
                fn($ing) => htmlspecialchars($ing['libelleIngredient']),
                $lesIngredients
            );

            $cellule .= "
                <div>
                    <strong>" . htmlspecialchars($unePizza['nomPizza']) . "</strong><br>
                    Prix : " . htmlspecialchars($unePizza['prix']) . " €<br>
                    Ingrédients : " . implode(", ", $ingredientsList) . "
                </div>";
        }

        $carte .= "<td>" . ($cellule ?: "Aucune pizza") . "</td>";
    }

    $carte .= "</tr>";
}

$carte .= "</tbody></table>";

require_once 'vues/vueTarif.php';
?>
