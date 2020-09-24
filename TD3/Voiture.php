<?php
require_once ("Model.php");

class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // getters      
  public function getMarque() {
    return $this->marque;  
  }

  public function getCouleur() {
    return $this->couleur;  
  }

  public function getImmatriculation() {
    return $this->immatriculation;  
  }
     
  //setters
  public function setMarque($marque2) {
    $this->marque = $marque2;
  }

  public function setCouleur($couleur2){
    $this->couleur = $couleur2;
  }

  public function setImmatriculation($immatriculation2){
    if (strlen($immatriculation2) <= 8) {
      $this->immatriculation = $immatriculation2;
    }else{
      $this->immatriculation = "erreur trop long";
    }
    
  }
      
  // un constructeur
  public function __construct($i = null, $m = null, $c = null)  {
      if (!is_null($m) && !is_null($c) && !is_null($i)) {
          $this->marque = $m;
          $this->couleur = $c;
          $this->immatriculation = $i;
      }
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "<p>Immatriculation: $this->immatriculation , Marque: $this->marque , Couleur: $this->couleur</p>\n";
  }

  public static function getAllVoitures(){
      $pdo = Model::$pdo;
      $rep = $pdo->query("SELECT * FROM voiture");
      $rep->setFetchMode(PDO::FETCH_CLASS,"Voiture");
      return $rep->fetchAll();
  }

  public static function getVoitureByImmat($immat) {
      $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
      // Préparation de la requête
      $req_prep = Model::$pdo->prepare($sql);

      $values = array(
          "nom_tag" => $immat,
          //nomdutag => valeur, ...
      );
      // On donne les valeurs et on exécute la requête
      $req_prep->execute($values);

      // On récupère les résultats comme précédemment
      $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
      $tab_voit = $req_prep->fetchAll();
      // Attention, si il n'y a pas de résultats, on renvoie false
      if (empty($tab_voit))
          return false;
      return $tab_voit[0];
  }

  public function save(){
      $sql = "INSERT INTO voiture VALUES('$this->immatriculation','$this->marque','$this->couleur')";
      $pdo = Model::$pdo;
      $req = $pdo->prepare($sql);
      $req->execute();
  }
}
?>