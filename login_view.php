<!----- TITLE ----->

<div class="container">
    <p> Authentification à votre compte Ecole </p>
</div>

<!----- CONTENU DE LA PAGE ----->

<div class="container">
    <h2> Authentification </h2>
    <div class="row">
        <div class="col-3">
        <img class="img-fluid img-thumbnail" src="<?php echo base_url("assets/images/cadenas.png");?>">    
        </div>
        <div class="col-9">
            <form method="post" action="<?php echo site_url('login/connexion'); ?>" name="connexion">
                <div class="form-group">
                    <?php if(! is_null($message)) echo $message;?>
                <label for="login"> Votre login </label><br/>                
                <input type="text" class="form-control" id="login" placeholder="nom">        
                </div>
                <div class="form-group">
                <label for="motdepasse"> Mot de passe </label>
                <input type="password" class="form-control" id="password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-info"> Se connecter </button>
            </form>
        </div>
    </div>

</div>
