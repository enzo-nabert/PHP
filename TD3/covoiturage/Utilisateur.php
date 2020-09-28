<?php
require_once("ModelCovoiturage.php");
	class Utilisateur{

		private $login;
		private $nom;
		private $prenom;

		public function __construct($login = null,$nom = null,$prenom = null){
		    if (!is_null($login) && !is_null($nom) && !is_null($prenom)){
                $this->$login = $login;
                $this->$nom = $nom;
                $this->$prenom = $prenom;
            }
		}

		public function getLogin(){
			return $this->login;
		}

        public function getNom()
        {
            return $this->nom;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }

        public function afficher(){
            echo "LOGIN: $this->login , NOM: $this->nom , PRENOM: $this->prenom <br>";
        }

		public static function getAllUtilisateurs(){
		    $pdo = ModelCovoiturage::$pdo;
		    $res = $pdo->query("SELECT * FROM utilisateur");
		    $res->setFetchMode(PDO::FETCH_CLASS,"Utilisateur");
		    return $res->fetchAll();
        }
	} 
 ?>