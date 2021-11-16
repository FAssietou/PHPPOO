<?php

namespace controller;

ini_set("display_errors", "on");


class Controller
{
    private $dbEntityRepository;

    public function __construct()
    {
        session_start();
        $this->dbEntityRepository = new \model\EntityRepository;
    }

    public function handleRequest()
    {
        $route = isset($_GET['route']) ? $_GET['route'] : [];

        if (isset($_POST['sign_up'])) {
            $this->sign_up($_POST);
        }

        if (isset($_POST['sign'])) {
            $this->sign($_POST);
        }


        try {
            //----------------------VEHICULE--------------------------------
            if ($route == "vehicule") {
                $this->getVehicule();
                if (isset($_POST['vehicule'])) $this->postVehicule($_POST);
                //-----------------------AGENCE---------------------------------
            } elseif ($route == 'agence') {
                $this->getAgence();
                if (isset($_POST['agence'])) $this->postAgence($_POST);
                //-----------------------MEMBRE---------------------------------
            } elseif ($route == 'membre') {
                $this->getMembre();
                if (isset($_POST['membre'])) $this->postMembre($_POST);
                //-----------------------COMMANDE---------------------------------                
            } elseif ($route == 'commande'){
                $this->getCommande();
                //-----------------------Déconnexion---------------------------------                            
            } elseif ($route == 'logout') {
                $this->logout();
            } elseif ($route == []) {
                $this->accueil();
                //-----------------------ACCUEIL-------------------------------------                            
            } elseif ($route == 'delete') {
                $this->delete($_GET['id_membre']);

            } elseif ($route == 'deletevehicule') {
                $this->delete2($_GET['id_vehicule']);

            } elseif ($route == 'deleteagence'){
                $this->delete3($_GET['id_agence']);
                
            
            } elseif ($route == 'reservation'){
                $this->test($_GET['id_vehicule']);
                $this->getReservation();
                if(isset($_POST['reservation'])) $this->postCommande($_POST);
            }

        } catch (\Exception $e) {
            echo "Application error" . $e->getMessage();
        }
    }

    //---------------------------------------AGENCE-------------------------------------------------------------

    public function getAgence()
    {
        $this->render('layout.php', 'agence.php', [
            'title' => "Bienvenue à Véville",
            'allAgence' => $this->dbEntityRepository->getAllAgences()
        ]);
    }

    public function postAgence($value)
    {
        $this->dbEntityRepository->postAgence($value);
    }

    //---------------------------------------VEHICULE-------------------------------------------------------------

    public function getVehicule()
    {
        $this->render('layout.php', 'vehicule.php', [
            'title' => "Bienvenue à Véville",
            'allAgence' => $this->dbEntityRepository->getAllAgences(),
            'agenceWithVehicule' => $this->dbEntityRepository->getAllVehiculeWithAgence()
        ]);
    }

    public function postVehicule($value)
    {
        $this->dbEntityRepository->postVehicule($value);
    }

    //---------------------------------------MEMBRE-------------------------------------------------------------

    public function getMembre()
    {
        $this->render('layout.php', 'membre.php', [
            'title' => "Bienvenue à Véville",
            'allMembre' => $this->dbEntityRepository->getAllMembre()
        ]);
    }
    public function postMembre($value)
    {
        $this->dbEntityRepository->postMembre($value);
    }

    //---------------------------------------COMMANDE-------------------------------------------------------------

    public function getCommande()
    {
        $this->render('layout.php', 'commande.php', [
            'title' => "Bienvenue à Véville",
            'allCommande' => $this->dbEntityRepository->getAllCommande(),
            'allAgence' => $this->dbEntityRepository->getAllAgences(),
            'agenceWithVehicule' => $this->dbEntityRepository->getAllVehiculeWithAgence(),
            'allMembre' => $this->dbEntityRepository->getAllMembre()
        ]);
    }
    public function postCommande($value)
    {
        $this->dbEntityRepository->postCommande($value);
    }

    //---------------------------------------SIGN-UP-------------------------------------------------------------

    // @sign_up fonction qui permet de s'inscrire.

    public function sign_up($value)
    {
        $this->dbEntityRepository->sign_up($value);
    }
    //---------------------------------------SIGN-------------------------------------------------------------

    public function sign($value)
    {
        $this->dbEntityRepository->sign($value);
    }
    //---------------------------------------réservation-------------------------------------------------------------

    public function test($id)
    {
        $this->dbEntityRepository->test($id);
    }
    public function getReservation()
    {
        $this->render('layout.php', 'reservation.php', [
            'title' => "Bienvenue à Véville",
            'allCommande' => $this->dbEntityRepository->getAllCommande(),
            'allAgence' => $this->dbEntityRepository->getAllAgences(),
            'agenceWithVehicule' => $this->dbEntityRepository->getAllVehiculeWithAgence(),
            'allMembre' => $this->dbEntityRepository->getAllMembre(),
            'reservation' => $this->dbEntityRepository->test($_GET['id_vehicule']),
        ]);
    }
    //---------------------------------------LOGOUT-------------------------------------------------------------

    public function logout()
    {
        session_destroy();
        header('Accueil: http://127.0.0.1/PROJET_PHP_POO/');
    }
    //---------------------------------------ACCUEIL-------------------------------------------------------------

    public function accueil()
    {
        $this->render('layout.php', 'accueil.php', [
            'title' => "Bienvenue à Véville",
            'allAgence' => $this->dbEntityRepository->getAllAgences(),
            'agenceWithVehicule' => $this->dbEntityRepository->getAllVehiculeWithAgence()
        ]);
    }
    public function delete($id) // $id = $_GET['id_membre']
    {
        $this->dbEntityRepository->deleteMembre($id);
    }
    public function delete2($id)
    {
        $this->dbEntityRepository->deleteVehicule($id);
    }
    public function delete3($id)
    {
        $this->dbEntityRepository->deleteAgence($id);
    }

    //---------------------------------------RENDER-------------------------------------------------------------

    public function render($layout, $template, $parameters = [])
    {
        // permettent d'extraire chaque indice d un array sous forme de variable
        extract($parameters); // $parameters['employes] --> $employes (title , data)

        ob_start();
        // mise en tampon, on commence a garder en mémoire des données.

        // require_once " view/view-employes.php
        require_once "view/$template";
        // cette inclusion est stockée directement dans la variable $content

        // $content = le fichier vehicule.php
        $content = ob_get_clean();
        // on stock la mise en mémoire, c'est à dire que l'on stock dans la variable 
        // $content, le template lui-même, c'est à dire le résultat du require

        ob_start(); // temporise la sortie d'affichage

        // require_once "view/layout.php
        require_once "view/$layout";

        // on inclue le layout qui est le gabarit de base (header/nav/footer )
        return ob_end_flush();
        //  libère l'affichage et fait tout apparaitre sur le navigateur / Envoi les données de la mise en mémoire, mise en tampon de sortie.
    }
}
