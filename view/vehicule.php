<h1 class="text-center">PAGE VEHICULE <small class="text-muted">Bienvenue à Véville</small></h1>


<table class="table table-bordered text-center">

  <thead class="table-primary">
    <tr>
      <th>Véhicule</th>
      <th>Agence</th>
      <th>Titre</th>
      <th>Marque</th>
      <th>Modèle</th>
      <th>Description</th>
      <th>Photo</th>
      <th>Prix</th>
      <th>Actions</th>
    </tr>
  </thead>

  <?php foreach ($agenceWithVehicule as $value) : ?>
    <tbody>
      <tr>

        <td><?= $value['id_vehicule']; ?></td>
        <td><?= $value['titre']; ?></td>
        <td><?= $value['titre']; ?></td>
        <td> <?= $value['marque']; ?></td>
        <td><?= $value['modele']; ?></td>
        <td><?= $value['description']; ?></td>
        <td><img src=" <?= $value['photo']; ?>" alt="" width="200" height="200"></td>
        <td><?= $value['prix_journalier']; ?></td>
        <td>
          <a href="?route=deletevehicule&id_vehicule=<?= $value['id_vehicule']; ?>">
            <svg type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
              <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
            </svg></a>
          <svg type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
          </svg>
          <svg type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </td>
      </tr>
    </tbody>
  <?php endforeach; ?>
</table>



<form method="POST">

  <div class="container">
    <div class="row g-2">
      <div class="col-6">

        <select name="id_agence">
          <?php foreach ($allAgence as $value) : ?>
            <option value="<?= $value['id_agence']; ?>"><?= $value['titre']; ?></option>

          <?php endforeach; ?>

        </select>
      </div>
    </div>
    <br />
    <div class="row g-2">
      <div class="col-6">

        <label>Titre</label>

        <div class="input-group w-50" class="p-3 border bg-light">

          <input type="text" class="form-control" name="titre" placeholder="Titre de l'annonce">
        </div>
      </div>
      <br />
      <div class="col-6">
        <label>Photo</label>
        <div class="input-group w-50" class="p-3 border bg-light">
          <div class="input-group w-50">
            <span class="input-group-text" id="basic-addon1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"></path>
              </svg>
            </span>
            <input type="text" class="form-control" name="photo" placeholder="url photo" aria-label="Input group example" aria-describedby="basic-addon1">
          </div>
        </div>
      </div>
      <br />

      <div class="col-6">

        <label>Marque</label>

        <div class="input-group w-50" class="p-3 border bg-light">
          <input type="text" class="form-control" name="marque" placeholder="Marque" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />
      <div class="col-6">
        <label>Description</label>

        <div class="input-group w-50" class="p-3 border bg-light">

          <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>

        </div>
      </div>

      <div class="col-6">
        <label>Modèle</label>
        <div class="input-group w-50" class="p-3 border bg-light">
          <input type="text" class="form-control" name="modele" placeholder="Modele" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />
      <div class="col-6">
        <div class="col-6">
          <label>Prix journalier</label>
          <div class="input-group w-50" class="p-3 border bg-light">
            <input type="text" class="form-control" name="prix_journalier" placeholder="prix/jour" aria-label="Input group example" aria-describedby="basic-addon1">
          </div>
        </div>
        <br />
      </div>

      <!-- <input type="date" name="date_enregistrement" placeholder="Date" /> -->

      <br />
      <div class="col-6">

        <div class="p-3 border bg-light">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit" name="vehicule">Enregistrer</button>
          </div>

        </div>
      </div>
    </div>
  </div>


</form>