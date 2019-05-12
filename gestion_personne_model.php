<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_personne_model extends CI_Model {
    
   private $db;
    
    public function __construct($db)
    {
        parent::__construct();
            $this->setDb($db);
    }
    
    public function ajouter(Personne $user)
    {
        // Préparation de la requête d'insertion.
        $query = $this->db->prepare('INSERT INTO personne(nom, prenom, email, login, '
                . 'motdepasse, role) VALUES(:nom, :prenom, :email, :login, :motdepasse'
                . ':role');
        // Association des valeurs aux champs de la base.
        $query->bindValue(':nom', $user->nom());
        $query->bindValue(':prenom', $user->prenom());
        $query->bindValue(':email', $user->email()); 
        $query->bindValue(':login', $user->login());
        $query->bindValue(':motdepasse', $user->motdepasse());        
        $query->bindValue(':role', $user->role());        
        // Exécution de la requête.
        $query->execute();       
    }
    
    public function supprimer()
    {
        // Requête de suppression.
    }
    
    public function get()
    {
        // Requête pour obtenir un utilisateur en particulier
        
    }
    
    public function getList()
    {
        // Renvoi la liste de tout les inscrits.
    }
    
    public function miseajour()
    {
        // Préparation de la requête de mise à jour.
        // Assignation des nouvelles valeurs.
        // Exécution de la requête.
    }
    
    public function setDb(PDO $db)
    {
        $this->db = $db;
    }
}
