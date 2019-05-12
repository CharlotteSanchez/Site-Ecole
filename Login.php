<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }
      
    public function index($message = NULL)
    {   
        $data['message'] = $message;
	$this->load->view('header_view');
        $this->load->view('login_view', $data);
        $this->load->view('footer_view');
    }
        
    public function connexion()
    {
        // charger le modèle
        $this->load->model('login_model');
        // récupérer le résultat du modèle
        $result = $this->login_model->connexion();
        if(! $result){
            $message = '<font color=red> Mot de passe ou login invalide ! </font><br/>';
            $this->index($message);           
        } else {
            redirect('user');
        }
    }
}
