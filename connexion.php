<body>
    <?php include("header.php"); ?>
	<div class="container-fluid">
    <?php include("nav_bar.php"); ?>
    <div class="col-xs-6">
        <h4>Connexion</h4>
        <form style="border:1px solid #A5AEE1" class="form-contact">
        <div class="row form-connexion">
            <div class="col-xs-12">
                <label for="nmp">Identifiant *</label>
                <input type="text" class="form-control"><br>
            </div>
            <div class="col-xs-12">
                <label for="nmp">Mot de passe *</label>
                <input type="password" class="form-control"><br>
            </div>
            <center><button type="submit" class="btn btn-primary button-form">Se connecter</button></center>
        </div>
    </form>
    </div>
    <div class="col-xs-6">
        <h4>S'enregistrer</h4>
        <form style="border:1px solid #A5AEE1" class="form-contact">
        <div class="row form-connexion">
            <div class="col-xs-12">
                <label for="nmp">Nom *</label>
                <input type="text" class="form-control"><br>
            </div>
            <div class="col-xs-12">
                <label for="nmp">Numéro de téléphone *</label>
                <input type="tel" class="form-control"><br>
            </div>
            <div class="col-xs-12">
                <label for="nmp">Identifiant *</label>
                <input type="text" class="form-control"><br>
            </div>
            <div class="col-xs-12">
                <label for="nmp">Mot de passe *</label>
                <input type="password" class="form-control"><br>
            </div>
            <center><button type="submit" class="btn btn-primary button-form">S'enregistrer</button></center>
        </div>
    </form>
    </div>
    

    </div>

<?php include("footer.php"); ?>
<script src="bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" ></script>   
</body>
</html>