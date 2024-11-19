<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'accueil'; 

switch ($controller) {
    case 'tarif':
        require_once 'controleurs/controleurTarif.php'; 
        break;
    case 'info':
        require_once 'controleurs/controleurInfos.php'; 
        break;
    default:
        require_once 'controleurs/controleurAccueil.php'; 
        break;
}
?>
