<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }
      
    public function index()
    {                
	$this->load->view('header_view');
        $this->load->view('accueil_user_view');
        $this->load->view('footer_view');
    }
}
