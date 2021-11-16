<select name="id_membre">
        <option selected>pseudo</option>
        <?php foreach ($allMembre as $value) : ?>
            <option value="<?= $value['id_membre']; ?>"><?= $value['pseudo']; ?></option>
        <?php endforeach; ?>
    </select>
    <select name="id_vehicule">
        <option selected>Marque de véhicule</option>
        <?php foreach ($allCommande as $value) : ?>
            <option value="<?= $value['id_vehicule']; ?>"><?= $value['marque']; ?></option>
        <?php endforeach; ?>
    </select>
    <select name="id_vehicule">
        <option selected>Prix journalier</option>
        <?php foreach ($allCommande as $value) : ?>
            <option value="<?= $value['id_vehicule']; ?>"><?= $value['prix_journalier']; ?></option>
        <?php endforeach; ?>
    </select>

    <select name="id_agence">
        <option selected>Agences</option>
        <?php foreach ($allCommande as $value) : ?>
            <option value="<?= $value['id_agence']; ?>"><?= $value['titre']; ?></option>
        <?php endforeach; ?>
    </select>

