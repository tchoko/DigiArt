<?php

class AccueilDB extends Accueil {
    private $_db;
    private $_array = array();
    
    public function __construct($db){  //contenu de $snx qui est dans l'index
        $this->_db = $db;
    }
    
    public function getTexteAccueil(){
        try{
            $query = "select * from fleur";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Accueil($data); //instanciation de la classe métier Accueil
            }        
        }
        catch(PDOException $e){
            print $e->getMessage();
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
}