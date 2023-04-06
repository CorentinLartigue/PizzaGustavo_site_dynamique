<?php

    require_once 'modeles/accesdb.php';
    require_once 'config/param.php';

    $maConnexion= connexion($dsn,$user,$pass);

    $lesCateg= categories($maConnexion);
    $carte="";
    foreach($lesCateg as $uneCateg){
        $carte .=$uneCateg['libelleCategorie'] . "<br>";
        $lesPizzaCateg =pizzasCategorie($maConnexion,$uneCateg['codeCategorie']);
        foreach($lesPizzaCateg as $unePizza){
            $carte .= "<br>";
            $carte .=$unePizza['nomPizza'] . "<br>";
            
            $lesIngredientsPizza=pizzasIngredients($maConnexion,$unePizza['numPizza']);
            foreach($lesIngredientsPizza as $unIngredient){
                $carte .=$unIngredient['libelleIngredient'] . "-";
            }
            $carte .= "<br>";
        }
    }

    require_once 'vues/vueCarte.php';
?>