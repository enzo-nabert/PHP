<?php
	class Utilisateur{

		private $login;
		private $nom;
		private $prenom;

		public function __construct($login,$nom,$prenom){
			$this->$login = $login;
			$this->$nom = $nom;
			$this->$prenom = $prenom;
		}

		public function getLogin(){
			return $this->login;
		}	
	} 
 ?>