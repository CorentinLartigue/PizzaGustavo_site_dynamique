<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Gustavo - La Carte</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header id="entete"></header>

    <nav>
        <ul class="menu-nav">
            <li><a href="/projet_perso/TP-Pizza/accueil">Accueil</a></li>
            <li><a href="/projet_perso/TP-Pizza/tarif">Tarif</a></li>
            <li><a href="/projet_perso/TP-Pizza/info">Info</a></li>
        </ul>
    </nav>

    <main id="menu">
        <?php
            require_once 'controleurs/controleurPrincipal.php';
        ?>
    </main>

    <footer>
        <p>Création par Corentin Lartigue</p>
        <p>&copy; 2024 Pizza Gustavo. Tous droits réservés.</p>
    </footer>
</body>
</html>
