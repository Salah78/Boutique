<?php
require_once("inc/init.php");

// SI je ne suis pas connecté je suis redirigé vers la page de connexions

if(!internauteEstConnecte()) {
    header("location:connexion.php");
    exit();
}


require_once("inc/header.php");
?>
    <!-- Message de bienvenu -->
    <?php if($_SESSION["membre"]["civilite"] == "m") { ?>
        <h2 class="text-center mb-5">Bonjour Mr <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>, bienvenue sur votre espace personnel !</h2>
    <?php } else { ?>
        <h2 class="text-center mb-5">Bonjour Mme/Mlle <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>, bienvenue sur votre espace personnel !</h2>
    <?php } ?>

    <div class="card" style="width:18rem">

        <!-- Avatar -->
        <?php if($_SESSION["membre"]["civilite"] == "m") { ?>
            <img src="photo/avatar_male.png" alt="avatar male" class="card-img-top">
        <?php } else { ?>
            <img src="photo/avatar_female.png" alt="avatar female" class="card-img-top">
        <?php } ?>

        <div class="card-body">
            <h5 class="card-title text-center"> <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?> </h5>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center"> <?= $_SESSION["membre"]["email"] ?> </li>
            <li class="list-group-item text-center"> <?= $_SESSION["membre"]["adresse"] ?> </li>
            <li class="list-group-item text-center"> <?= $_SESSION["membre"]["code_postal"] . " " . $_SESSION["membre"]["ville"] ?> </li>
        </ul>

    </div>


<!-- BODY -->


<?php
require_once("inc/footer.php");
?>