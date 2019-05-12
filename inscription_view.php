<!----- TITLE ----->

<div class="container">
    <p> Interface d'inscription </p>
</div>

<!----- CONTENU DE LA PAGE ----->

<div class="container">
    <h2> Inscription </h2>
    <div class="row">
        <div class="col-3">
        <img class="img-fluid img-thumbnail" src="<?php echo base_url("assets/images/crayon.png");?>">    
        </div>
        <div class="col-9">
            <form method="post" action="<?php echo site_url('inscription/new_inscription'); ?>" name="inscription">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom"> Nom </label>                
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom"> Prénom </label>                
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prénom"> 
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="email"> E-mail </lable>
                    <input type="text" class="form-control" id="email" name="email" placeholder="exemple@mail.fr">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="login"> Login (ex : saisissez de nouveau votre nom) </label>                
                        <input type="text" class="form-control" id="login" name="login" placeholder="login"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="motdepasse"> Mot de passe </label>
                        <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="*********"> 
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="role"> Choisissez le type d'utilisateur </label>
                    <select class="form-control" id="role" name="role">
                        <option id="etudiant" name="etudiant"> Etudiant </option>
                        <option id="enseignant" name="etudiant"> Enseignant </option>
                        <option id="administrateur" name="etudiant"> Administrateur </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-info"> S'inscrire </button>
            </form>
        </div>
    </div>

</div>
