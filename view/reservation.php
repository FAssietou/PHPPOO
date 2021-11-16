<?php foreach ($reservation as $value) : ?>

    <ul style="padding-top: 40px;">
        <div class="row">
            <div class="col">
                <li class="list-group" style="padding-left: 400px"><img src=" <?= $value['photo']; ?>" alt="" width="200" height="200"></li>
            </div>
            <div class="col" style="padding-top: 20px;">
                <li class="list-group">AGENCE : <?= $value['titre']; ?></li>
                <li class="list-group">MARQUE : <?= $value['marque']; ?></li>
                <li class="list-group">Modèle : <?= $value['modele']; ?></li>
                <li class="list-group">Description : <?= $value['description']; ?></li>
                <li class="list-group">Prix journalier : <?= $value['prix_journalier']; ?></li>
            </div>
        </div>
        <br />
    </ul>
<?php endforeach; ?>

<form method="post" class="nav justify-content-center">
    <input type="date" name="date_heure_depart" placeholder="Date de location">
    <input type="date" name="date_heure_fin" placeholder="Date de fin de location">
    <input type="number" name="prix_total" placeholder="Prix total">
    <button class="btn btn-primary" type="submit" name="reservation">Commandez</button>

</form>