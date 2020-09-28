<?php
require_once("ModelCovoiturage.php");
	class Trajet{

		private $id;
		private $depart;
		private $arrivee;
		private $date;
		private $nbPlaces;
		private $prix;
		private $conducteur_login;

		public function __construct($data = null){
		    if(!is_null($data)) {
                foreach ($data as $key => $value) {
                    $this->$key = $value;
                }
            }
		}

		public function get($attribut){
			return $this->$attribut;
		}

		public function set($attribut,$valeur){
			$this->$attribut = $valeur;
		}

		public function afficher(){
			echo "ID: $this->id , DEPART: $this->depart , ARRIVEE: $this->arrivee , DATE: $this->date , Places: $this->nbPlaces , PRIX: $this->prix € , CONDUCTEUR: $this->conducteur_login<br>";
		}

        public static function getAllTrajets(){
            $pdo = ModelCovoiturage::$pdo;
            $res = $pdo->query("SELECT * FROM trajet");
            $res->setFetchMode(PDO::FETCH_CLASS,"Trajet");
            return $res->fetchAll();
        }

        public static function findPassagers($id){
		    $pdo = ModelCovoiturage::$pdo;
		    $res = $pdo->query("SELECT u.login,nom,prenom 
                FROM utilisateur u
                JOIN passager p ON p.utilisateur_login = u.login
                WHERE id_trajet = $id"
            );
		    $res->setFetchMode(PDO::FETCH_CLASS,"Utilisateur");
		    return $res->fetchAll();
        }
	}
 ?>