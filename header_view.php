
<!DOCTYPE html>
<html>    
    <!----- HEADER ----->
    <head>
        <!----- Required meta tags ----->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!----- Bootstrap and CSS ----->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo site_url('accueil'); ?>">
                    <img src="<?php echo base_url("assets/images/logo.png");?>" width="50" class="d-inline_block align-top" alt="logo"> ECOLE
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('accueil'); ?>">
                                Accueil                                
                            </a>                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('login'); ?>">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('inscription'); ?>">
                                Inscription
                            </a>                            
                        </li>                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">        
                <img class="img-fluid" src="<?php echo base_url("assets/images/banniere.jpg");?>">
        </div>
    

