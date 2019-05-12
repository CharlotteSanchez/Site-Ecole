<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {


    function __construct(){
        parent::__construct();
    }
      
    public function index()
    {   
	$this->load->view('header_view');
        $this->load->view('inscription_view');
        $this->load->view('footer_view');
    }    
        
    
    public function new_inscription()
    {
        
        $this->load->model('gestion_personne_model');        
        $db = new PDO('mysql:host=localhost;dbname=base_ecole', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
        $this->gestion_personne_model->__construct($db);
        $gestionnaire = new Gestion_personne_model($db);
        
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])
                && isset($_POST['login']) && isset($_POST['motdepasse']) && 
                isset($_POST['role']))  
        {
            $user = new Personne(['nom' => $_POST['nom'],'prenom' => $_POST['prenom'],
                'email' => $_POST['email'], 'login' => $_POST['login'], 'motdepasse' => $_POST['motdepasse'],
                'role' => $_POST['role']]);
            $gestionnaire->ajouter($user);
        }        
            
               
       
    }

}