<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login2_model extends CI_Model {
        
    public function __construct(){
        parent::__construct(); 

    }
    public function connexion(){
            
            try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=base_ecole;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
            die('Erreur : ' . $e->getMessage());
            }
            // récupérer les données dans la base
        $query = $bdd->query('SELECT login, mostdepasse FROM personne');
        return $query;
    }
        
}     
        
