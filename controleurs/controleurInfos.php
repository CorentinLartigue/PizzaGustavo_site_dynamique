<?php
// Inclusion du modèle pour accéder aux données
require_once 'modeles/accesdb.php';

// Données statiques ou récupérées de la base
$horaires = [
    "Lundi" => "11h00 - 22h00",
    "Mardi" => "11h00 - 22h00",
    "Mercredi" => "11h00 - 22h00",
    "Jeudi" => "11h00 - 22h00",
    "Vendredi" => "11h00 - 23h00",
    "Samedi" => "12h00 - 23h00",
    "Dimanche" => "Fermé"
];

$contact = [
    "telephone" => "07 72 81 89 48",
    "email" => "PizzaGustavo-contact@gmail.com",
    "adresse" => "123 Rue de la Pizza, 75000 Paris"
];

// Lien vers Google Maps
$googleMapsLink = "https://www.google.com/maps?q=123+Rue+de+la+Pizza,+75000+Paris";

// Chargement de la vue
require_once 'vues/vueInfos.php';
?>
