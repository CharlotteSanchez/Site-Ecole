<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_personne_model2 extends CI_Model {
        
    public function __construct()
    {
        parent::__construct();            
    }
    
    public function ajouter()
    {                
        try
            {
                $db = new PDO('mysql:host=localhost;dbname=base_ecole;charset=utf8', 'root', '');
            }
        catch(Exception $e)
            {die('Erreur : '.$e->getMessage());}            
        // Préparation de la requête d'insertion.
        $query = $db->prepare('INSERT INTO personne(nom, prenom, email, login, motdepasse, role) VALUES(?, ?, ?, ?, ?, ?)');
        
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])
                && isset($_POST['login']) && isset($_POST['motdepasse']) && 
                isset($_POST['role']))
            {       
        $query->execute(array(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['motdepasse'],
            $_POST['role']
                ));            
            }
}
}