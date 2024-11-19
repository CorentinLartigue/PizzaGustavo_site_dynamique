<section id="infos">
    <h1>Infos Pratiques</h1>

    <h2>Horaires d'ouverture</h2>
    <ul>
        <?php foreach ($horaires as $jour => $horaire): ?>
            <li><strong><?= htmlspecialchars($jour) ?></strong> : <?= htmlspecialchars($horaire) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Nous contacter</h2>
    <p><strong>Téléphone :</strong> <?= htmlspecialchars($contact['telephone']) ?></p>
    <p><strong>Email :</strong> <a href="mailto:<?= htmlspecialchars($contact['email']) ?>">
        <?= htmlspecialchars($contact['email']) ?></a></p>
    <p><strong>Adresse :</strong> <?= htmlspecialchars($contact['adresse']) ?></p>
    <p><a href="<?= htmlspecialchars($googleMapsLink) ?>" target="_blank">Voir sur Google Maps</a></p>

    <h2>Autres Informations</h2>
    <ul>
        <li>Parking gratuit disponible</li>
        <li>Accessible aux personnes à mobilité réduite</li>
        <li>Modes de paiement acceptés : espèces, carte bancaire</li>
    </ul>
</section>
