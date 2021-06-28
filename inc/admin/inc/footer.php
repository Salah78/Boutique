            </div>
        </main>
        <!-- Footer -->
        <footer class="bg-primary page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-white text-uppercase">Footer Content</h5>
                <p class="text-white">Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-white text-uppercase">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="gestion_produits.php" class="text-white">Gestion des produits</a>
                </li>
                <li>
                    <a href="gestion_commandes.php" class="text-white">Gestion des commandes</a>
                </li>
                <li>
                    <a href="gestion_emails.php" class="text-white">Gestion des emails</a>
                </li>
                <li>
                    <a href="gestion_commentaires.php" class="text-white">Gestion des commentaires</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-white text-uppercase">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="../index.php" class="text-white">Boutique</a>
                </li>
                <li>
                    <a href="../connexion.php?action=deconnexion" class="text-white">Se déconnecter</a>
                </li>

                <?php if(internauteEstConnecte()) { ?>
                    <li>
                        <a href="profil.php" class="text-white">Mon profil</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="../connexion.php" class="text-white">Connexion</a>
                    </li>
                <?php } ?>
                </ul>

            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="text-white footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/" class="text-white"> Samih Habbani</a>
        </div>
        <!-- Copyright -->

        </footer>
        <!-- Footer -->

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="inc/js/app.js"></script>
</body>
</html>