<?php
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

  public function setCouleur($immatriculation2){
    $this->immatriculation = $immatriculation2;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    // À compléter dans le prochain exercice
  }
}
?>