<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Personne_model extends CI_Model {
    
    // ATTRIBUTS
        
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $login;
    private $motdepasse;
    private $role;
    
    public function __construct(array $donnees)
    {
        parent::__construct();
        $this->hydrate($donnees);
        
    }
    
    // HYDRATATION
    
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key =>$value)
        {
            $methode = 'set'.ucfirst($key);
            if (method_exists($this, $methode))
            {
                $this->$methode($value);
            }
        }
    }
    
    //LISTE DES GETTERS
    
    public function id(){return $this->id;}
    public function nom(){return $this->nom;}
    public function prenom(){return $this->prenom;}
    public function email(){return $this->email;}
    public function login(){return $this->login;}
    public function motdepasse(){return $this->motdepasse;}
    public function role(){return $this->role;}
    
    //LISTE DES SETTERS
    
    public function setId($id)
    {       
        if ($id > 0){ 
            $this->id=$id;   }
    }        
    
    public function setNom($nom)
    {
        if (is_string($nom)){
            $this->nom=$nom;}
    }
    
    public function setPrenom($prenom)
    {
        if (is_string($prenom)){
            $this->prenom=$prenom;}
    }    

    public function setEmail($email)
    {
        if (is_string($email)){
            $this->email=$email;}               
    }
    
    public function setLogin ($login)
    {
        if (is_string($login)){
            $this->login=$login;}
    }
    
    public function setMotdepasse ($motdepasse)
    {
        if (is_string($motdepasse)){
            $this->motdepasse=$motdepasse;}
    }
    
    public function setRole ($role)
    {
        if (is_string($role)){
        $this->role=$role;}        
    }
}


