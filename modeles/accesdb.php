<?php
    function connexion($unDsn,$unUser,$unPass){
        try{
            $uneConnex=new PDO($unDsn,$unUser,$unPass);
            return $uneConnex;
        }
        catch(PDOExeption $e){
            echo $e->getMessage();
            die("erreur de connexion");
        }
    }
    function categories($uneConnex){
        $query="select * from categorie";
        $rep=$uneConnex->query($query);
        return $rep->fetchAll(PDO::FETCH_ASSOC);

    }

    function pizzasCategorieEtTaille($connexion, $codeCategorie, $taille) {
        $sql = "
            SELECT p.numPizza, p.nomPizza, pr.prix 
            FROM pizza p
            JOIN prix pr ON p.numPizza = pr.numPizza
            WHERE p.codeCategorie = :codeCategorie AND pr.taille = :taille
        ";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([
            'codeCategorie' => $codeCategorie,
            'taille' => $taille
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    function pizzasIngredients($connexion, $numPizza) {
        $sql = "
            SELECT i.libelleIngredient 
            FROM ingredient i
            JOIN composer c ON i.numIngredient = c.numIngredient
            WHERE c.numPizza = :numPizza
        ";
        $stmt = $connexion->prepare($sql);
        $stmt->execute(['numPizza' => $numPizza]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function taillesDisponibles($connexion) {
        $sql = "SELECT taille FROM taille ORDER BY taille";
        $stmt = $connexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

?>
