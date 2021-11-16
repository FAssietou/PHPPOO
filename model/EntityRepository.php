<?php

namespace model;

ini_set('display_errors', 'on');

class EntityRepository
{
  private $db; // (1)

  public function getDb() // (2)
  {
    if (!$this->db) // (3)
    {
      try {
        // $xml = simplexml_load_file('app/config.xml'); 
        // echo '<pre>'; print_r($xml); echo '<pre>';
        try {
          $this->db = new \PDO(
            "mysql:host=localhost;dbname=veville",
            'root',
            '',
            array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
          );
        } catch (\Exception $e) {
          echo "Probleme connexion : " . $e->getMessage();
        }
      } catch (\Exception $e) {
        echo "Probleme config, xml manquand : " . $e->getMessage();
      }
    }
    return $this->db; // (4)
  }
  //---------------------------------------VEHICULE-------------------------------------------------------------

  public function getAllVehicule()
  {
    $req = $this->getDb()->query('SELECT * FROM vehicule');
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public function getAllVehiculeWithAgence()
  {
    $req = $this->getDb()->query('SELECT agences.titre, vehicule.id_vehicule, vehicule.titre, vehicule.marque,
     vehicule.modele, vehicule.description, vehicule.photo, vehicule.prix_journalier FROM vehicule INNER JOIN agences USING (id_agence);');
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public function postVehicule($value)
  {
    try {
      $req = $this->getDb()->prepare("INSERT INTO vehicule (id_agence,titre,marque,modele,description,photo,prix_journalier)
  VALUES (:id_agence,:titre,:marque,:modele,:description,:photo,:prix_journalier)");
      $req->bindParam(':id_agence', $value['id_agence'], \PDO::PARAM_INT);
      $req->bindParam(':titre', $value['titre'], \PDO::PARAM_STR);
      $req->bindParam(':marque', $value['marque'], \PDO::PARAM_STR); // PARAM_STR: le type de values or input
      $req->bindParam(':modele', $value['modele'], \PDO::PARAM_STR);
      $req->bindParam(':description', $value['description'], \PDO::PARAM_STR);
      $req->bindParam(':photo', $value['photo'], \PDO::PARAM_STR);
      $req->bindParam(':prix_journalier', $value['prix_journalier'], \PDO::PARAM_STR);
      $req->execute();
      return "success insert Vehicule";
    } catch (\Exception $e) {
      return "Erreur Insert into to vehicule : " . $e->getMessage();
    }
  }

  //---------------------------------------AGENCE-------------------------------------------------------------

  public function getAllAgences()
  {
    $req = $this->getDb()->query('SELECT * FROM agences');
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }
  public function postAgence($values)
  {
    try {
      $req = $this->getDb()->prepare("INSERT INTO agences (titre,adresse, ville, description,photo,cp) 
    VALUES (:titre,:adresse,:ville,:description,:photo,:cp)");
      $req->bindParam(':titre', $values['titre'], \PDO::PARAM_STR);
      $req->bindParam(':adresse', $values['adresse'], \PDO::PARAM_STR); // PARAM_STR: le type de values or input
      $req->bindParam(':ville', $values['ville'], \PDO::PARAM_STR);
      $req->bindParam(':description', $values['description'], \PDO::PARAM_STR);
      $req->bindParam(':photo', $values['photo'], \PDO::PARAM_STR);
      $req->bindParam(':cp', $values['cp'], \PDO::PARAM_INT);
      $req->execute();
      return "success insert Agency";
    } catch (\Exception $e) {
      return "Erreur Insert into to agence : " . $e->getMessage();
    }
  }

  //---------------------------------------MEMBRE-------------------------------------------------------------

  public function getAllMembre()
  {
    $req = $this->getDb()->query('SELECT * FROM membre');
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }
  public function postMembre($values)
  {
    try {
      $req = $this->getDb()->prepare("INSERT INTO membre (pseudo,mdp,nom,prenom,email,civilite,statut,date_enregistrement) 
  VALUES (:pseudo,:mdp,:nom,:prenom,:email,:civilite,:statut,now())");
      $req->bindParam(':pseudo', $values['pseudo'], \PDO::PARAM_STR);
      $req->bindParam(':mdp', $values['mdp'], \PDO::PARAM_STR);
      $req->bindParam(':nom', $values['nom'], \PDO::PARAM_STR); // PARAM_STR: le type de values or input
      $req->bindParam(':prenom', $values['prenom'], \PDO::PARAM_STR);
      $req->bindParam(':email', $values['email'], \PDO::PARAM_STR);
      $req->bindParam(':civilite', $values['civilite'], \PDO::PARAM_STR);
      $req->bindParam(':statut', $values['statut'], \PDO::PARAM_STR);
      $req->execute();
      return "success insert Member";
    } catch (\Exception $e) {
      return "Erreur Insert into to Member : " . $e->getMessage();
    }
  }

  //---------------------------------------COMMANDE-------------------------------------------------------------

  public function getAllCommande()
  {
    $req = $this->getDb()->query('SELECT commande.id_commande, membre.id_membre, vehicule.id_vehicule, agences.id_agence,
  commande.date_heure_depart, commande.date_heure_fin, commande.prix_total, commande.date_enregistrement 
  FROM commande 
  INNER JOIN membre USING (id_membre) 
  INNER JOIN vehicule USING (id_vehicule) 
  INNER JOIN agences ON commande.id_agence=agences.id_agence');
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public function postCommande($values)
  {
    try {
      $req = $this->getDb()->prepare("INSERT INTO commande (id_membre,id_vehicule,id_agence,date_heure_depart,date_heure_fin,prix_total,date_enregistrement) 
  VALUES (:id_membre,:id_vehicule,:id_agence,:date_heure_depart,:date_heure_fin,:prix_total,now())");
      $req->bindParam(':id_membre', $values['id_membre'], \PDO::PARAM_INT);
      $req->bindParam(':id_vehicule', $values['id_vehicule'], \PDO::PARAM_INT); // PARAM_STR: le type de values or input
      $req->bindParam(':id_agence', $values['id_agence'], \PDO::PARAM_INT);
      $req->bindParam(':date_heure_depart', $values['date_heure_depart'], \PDO::PARAM_STR);
      $req->bindParam(':date_heure_fin', $values['date_heure_fin'], \PDO::PARAM_STR);
      $req->bindParam(':prix_total', $values['prix_total'], \PDO::PARAM_STR);
      $req->execute();
      return "success insert Commande";
    } catch (\Exception $e) {
      return "Erreur Insert into to agence : " . $e->getMessage();
    }
  }

  //---------------------------------------SIGN-UP------------------------------------------------------------------

  public function sign_up($value)
  {
    $req = $this->getDb()->query("SELECT * FROM membre WHERE pseudo = '$value[pseudo]'");
    if ($req->rowCount() >= 1) {
      return false;
    } else {
      $mdp = password_hash($value['mdp'], PASSWORD_DEFAULT);
      //var_dump($mdp);
      $req = $this->getDb()->prepare("INSERT INTO membre (pseudo,mdp,nom,prenom,email,civilite,statut,date_enregistrement) 
    VALUES (:pseudo,:mdp,:nom,:prenom,:email,:civilite,0, now())");
      $req->bindParam(':pseudo', $value['pseudo'], \PDO::PARAM_STR);
      $req->bindParam(':mdp', $mdp, \PDO::PARAM_STR);
      $req->bindParam(':nom', $value['nom'], \PDO::PARAM_STR); // PARAM_STR: le type de values or input
      $req->bindParam(':prenom', $value['prenom'], \PDO::PARAM_STR);
      $req->bindParam(':email', $value['email'], \PDO::PARAM_STR);
      $req->bindParam(':civilite', $value['civilite'], \PDO::PARAM_STR);
      $req->execute();
    }
  }

  //---------------------------------------réservation------------------------------------------------------------------
  public function test($id)
  {
    $req = $this->getDb()->query("SELECT * FROM vehicule WHERE id_vehicule = '$id'");
    $result = $req->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }
  public function reservation($values)
  {
    try {
      $req = $this->getDb()->prepare("INSERT INTO commande (id_membre,id_vehicule,id_agence,date_heure_depart,date_heure_fin,prix_total,date_enregistrement)
  VALUES (:id_membre,:id_vehicule,:id_agence,:date_heure_depart,:date_heure_fin,:prix_total,now())");
      $req->bindParam(':id_membre', $values['id_membre'], \PDO::PARAM_INT);
      $req->bindParam(':id_vehicule', $values['id_vehicule'], \PDO::PARAM_INT); // PARAM_STR: le type de values or input
      $req->bindParam(':id_agence', $values['id_agence'], \PDO::PARAM_INT);
      $req->bindParam(':date_heure_depart', $values['date_heure_depart'], \PDO::PARAM_STR);
      $req->bindParam(':date_heure_fin', $values['date_heure_fin'], \PDO::PARAM_STR);
      $req->bindParam(':prix_total', $values['prix_total'], \PDO::PARAM_STR);
      $req->execute();
      return "success insert Commande";
    } catch (\Exception $e) {
      return "Erreur Insert into to agence : " . $e->getMessage();
    }
  }


  //---------------------------------------SIGN-----------------------------------------------------------------

  public function sign($value)
  {
    $pseudo = trim($value['pseudo']); // trim suprime les espaces en début et fin de chaîne.
    $mdp = trim($value['mdp']);   // trim suprime les espacesen début et fin de chaîne.

    $req = $this->getDb()->prepare("SELECT * FROM membre WHERE pseudo = ?"); // ? = paceholder (évite les injections sql)
    $req->execute([$pseudo]);
    $user = $req->fetch(\PDO::FETCH_ASSOC);



    if (is_countable($user) && count($user) > 0) {
      if (password_verify($mdp, $user['mdp']))  // vérifie si le mot de passe saisie correspond à celui qu'on a en BD
      {
        foreach ($user as $key => $value) {
          $_SESSION['membre'][$key] = $value; // on genere une session membre avec toutes les données de l'utilisateurs qui veut se connecter
        }
      } else {
        echo "password ne correspond pas!";
      }
    } else {
      var_dump($user);
    }
  }
  public function deleteMembre($id)
  {
    $this->getDb()->query("DELETE FROM membre WHERE id_membre='$id'");
  }
  public function deleteVehicule($id)
  {
    $this->getDb()->query("DELETE FROM vehicule WHERE id_vehicule='$id'");
  }
  public function deleteAgence($id)
  {
    $this->getDb()->query("DELETE FROM agences WHERE id_agence='$id'");
  }
}

//  1 - Permet de stocker un objet issu de la classe PDO, C'est à dire la connexion à la BDD.
//  2 - Fonction permettant de construire la connexion à la BDD.
//  3 - Si dans la variable $db, il n'y a pas de connexion PDO, alors on entre dans le IF et on la construit.
//  4 -  Si la propriété db contient bien une connexion BDD, un objet PDO, on retourne la connexion.
/*
    ? = placeholder (évite les injections sql)
    FETCH_ASSOC = renvoie la valeur d'un tableau sans indexation;
    exemple sans FETCH_ASSOC : 
      [0] => prenom
      [prenom] => prenom 
      [1] => nom
      [nom] => nom
    exemple avec  FETCH_ASSOC : 
      [prenom] => prenom 
      [nom] => nom
    */
//  if(is_countable($user) && count($user) > 0) On verifie si le tableau est comptable et si il est comptable
    // et si il est comptable on verifie si il est supérieur a 0
    // ce qui signifie qu'un utilisateur a ete trouvé
