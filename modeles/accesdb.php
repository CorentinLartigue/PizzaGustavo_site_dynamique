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

    function pizzasCategorie ($uneConnex,$uneCateg){
        $query="select * from pizza where codeCategorie ";
        $rep=$uneConnex->query($query);
        return $rep->fetchAll(PDO::FETCH_ASSOC);
    }

    function pizzasIngredients($uneConnex,$unePizza){
        $query="select * from composer join ingredient on ingredient.numIngredient =composer.numIngredient where numPizza=".$unePizza;
        $rep=$uneConnex->query($query);
        return $rep->fetchAll(PDO::FETCH_ASSOC);
    }

?>
