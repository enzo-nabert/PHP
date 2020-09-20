<?php 
	class Trajet{

		private $id;
		private $depart;
		private $arrivee;
		private $date;
		private $nbPlaces;
		private $prix;
		private $conducteurLogin;

		public function __construct($data){
			foreach ($data as $key => $value) {
				$this->$key = $value;
			}
		}

		public function get($attribut){
			return $this->$attribut;
		}

		public function set($attribut,$valeur){
			$this->$attribut = $valeur;
		}

		public function afficher(){
			echo "$this->id<br>$this->depart<br>$this->arrivee<br>$this->date<br>Places: $this->nbPlaces<br>$this->prix €<br>$this->conducteurLogin";
		}
	}
 ?>