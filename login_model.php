<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
        
    public function __construct(){
        parent::__construct();       
    }
    
    public function connexion(){
        // récupérer la saisie de l'utilisateur
        $login = $this->security->xss_clean($this->input->post('login'));
        $motdepasse = $this->security->xss_clean($this->input->post('motdepasse'));
        
        // préparation de la requête SQL
        $this->db->where('login', $login);
        $this->db->where('motdepasse', $motdepasse);
        // lancer la requête
        $query = $this->db->get('personne');
        
        // résultat de la requête
        if ($query->num_rows ==1)
        {
            $data = array(
                'id' => $row->id,
                'nom' => $row->nom,
                'prenom' => $row->prenom,
                'login' => $row->login,
                'connexion'=> true );
                
                return true;
        }
        else {
                return false;
        }     

        }
}