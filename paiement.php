<body>
    <?php include("header.php"); ?>
	<div class="container-fluid">
    <?php include("nav_bar.php"); ?>

    <h4 class="title">Validez & payez votre commande par carte bancaire</h4>

    <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-8 containerForm">
        <form class="form-inline">
        <div class="form-group col-lg-6  marginBot">
            <label class="sr-only" for="exampleInputE3">Titulaire de la carte</label>
            <input type="text" class="form-control col-lg-12 lengthInput" id="exampleInputNom3" placeholder="Titulaire de la carte">
        </div>
        <div class="form-group col-lg-12 marginTopBot">
            <label class="sr-only" for="exampleInputE3">N° de la carte</label>
            <input type="number" class="form-control col-lg-12 lengthInput" id="exampleInputNom3" placeholder="N° de la carte">
        </div>
        <div class="form-group col-lg-6 marginTopBot">
            <label class="sr-only" for="exampleInputE3">Date d'expiration</label>
            <input type="number" class="form-control col-lg-12 lengthInput" id="exampleInputNom3" placeholder="Date d'expiration">
        </div>
        <div class="form-group col-lg-6 marginTopBot">
            <label class="sr-only" for="exampleInputPrenom3">Cryptogramme</label>
            <input type="number" class="form-control col-lg-12 lengthInput" id="exampleInputPrenom3" placeholder="Cryptogramme">

        </div>

    </div>

    <div class="col-xs-6 col-md-4 col-lg-3 globalContainerCommande">
        <div class="containerCommande">
        <h3>Votre commande</h3>
        <div class="displayFlex">

            <div>
            <p>Iphone - Reconditionné à neuf</p>
            <p class="violet">Apple</p>
            <p>XR - 120 giga - Gris - 1</p>
            </div>
        </div>
        <div class="displayFlex marginTopBot30">
        
            <div>
            <p>Iphone - Reconditionné à neuf</p>
            <p class="violet">Apple<p>
            <p>12 PRO MAX - 350 giga - 2 </p>
            </div>
        </div>
        <div class="infosLivraison">
            <p>Livraison offerte</p>
            <div class="assurance">
            <p>Assurance 12 mois</p>
            <p><span class="violet"> 9,99€ </span> / mois</p>
            </div>
        </div>
        <p class="totalTTC">TOTAL TTC :<span class="violet"> 3 500 € </span> </p>
        <div class="Recapitulatif">
            <p> Récapitulatif adresse de livraison: <br>
            Léa Dupont <br>
            86 rue de la Drôme <br>
            92300 Levallois-Perret <br>
            0765789900 - l.dupont@live.fr </p><br><br>

        </div>
        </div>
        <a id="nextLink" class="btn btn-primary" href="#" role="button" target="_blank">Soumettre</a>
    </div>
    </div>

    </div>

<?php include("footer.php"); ?>
<script src="bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" ></script>   
</body>
</html>