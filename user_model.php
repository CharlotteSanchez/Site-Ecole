<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
        
    public function __construct(){
        parent::__construct();
    }
    
    public function verify_user(){
        $recup_user = $bdd->$prepare('SELECT id, motdepasse FROM personne WHERE login= :login');
        $recup_user->execute(array(
        'login'=>$login));
            $resultat = $recup_user->fetch();
            
        $motdepasseOk = password_verify($_POST['motdepasse'], $resultat['motdepasse']);
        
        if (!$resultat){
            echo'Mauvais identifiant ou mot de passe, veuillez réessayer.';
        }
        else {
            if ($motdepasseOk){
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['login'] = $login;
                
                echo 'Vous êtes connecté!';
            }
            else {
                echo 'Mauvais identifiant ou mot de passe, veuillez réessayer.';
            }
        }
           
    }
        
    }



