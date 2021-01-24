<body>
    <?php include("header.php"); ?>
	<div class="container-fluid">
    <?php include("nav_bar.php"); ?>
    <h1>Contact</h1>
    <form style="border:1px solid #A5AEE1" class="form-contact">
        <div class="row form-contact-bloc">
            <div class="col-xs-6 test">
                <label for="nmp">Nom</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-6">
                <label for="nmp">Email</label>
                <input type="email" class="form-control"><br>
            </div>
            <div class="col-xs-6">
                <label for="nmp">Objet</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-6">
                <label for="nmp">Numéro de téléphone</label>
                <input type="tel" class="form-control"><br>
            </div>
            <div class="col-xs-12">
                <label for="txt">Message</label>
                <textarea id="txt" rows="8" style="width: 100%"></textarea>
            </div> 
            <button type="submit" class="btn btn-primary pull-right button-form">Contactez-nous</button>
        </div>
    </form>
</div>

<?php include("footer.php"); ?>
<script src="bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" ></script>   
</body>
</html>