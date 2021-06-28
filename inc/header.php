<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container-flud">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
            <a class="navbar-brand" href="index.php">
                <img src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Shopping Project
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Boutique <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                    <?php if(!internauteEstConnecte()) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscription.php">Inscription</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Mon Profil</a>
                        </li>
                    <?php } ?>

                    <li class="nav-item position_relative">
                        <?php if(isset($_SESSION["panier"]["id_produit"]) && count($_SESSION["panier"]["id_produit"]) > 0) { ?>
                            <span class='number_elem_in_cart'> <?php echo afficherNombreProduitsPanier(); ?> </span>
                            
                        <?php } ?>
                        <a class="nav-link" href="panier.php">Panier</a>
                    </li>

                    <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                    <?php if(internauteEstConnecte()) { ?>

                        <li class="nav-item">
                            <a class="nav-link font-italic" href="connexion.php?action=deconnexion">
                                Se déconnecter
                            </a>
                        </li>

                    <?php } ?>

                    <?php if(internauteEstConnecteEtAdmin()) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">Back Office</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </nav>

        <main class="bg-light p-5">
            <div class="row col-md-10 mx-auto justify-content-center">
