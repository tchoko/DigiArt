<?php

class Accueil {

  private $_attributs = array();
  
  public function __construct(array $data) {
      $this->hydrate($data);
  }    
  //hydrate
  public function hydrate(array $data) {
     foreach ($data as $key => $value) {  //$key =  nom du champ (e.g id_fleur,nom_fleur,..) et $value, la valeur du champ(e.g 2,lys,..)
    	$this->$key = $value;       
    //on affecte � la cl� sa valeur; le tableau $data est le resultset, tableau associatif
     }
  }

 //getters
  public function __get ($nom) { 
      if (isset ($this->_attributs[$nom])){  
        return $this->_attributs[$nom];
      }
  }
  
  //setters
  public function __set ($nom, $valeur) { //$key $value de la methode hydrate
     $this->_attributs[$nom] = $valeur;    
  }
   
}

?>