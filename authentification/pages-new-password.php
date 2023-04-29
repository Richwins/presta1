<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>pasword</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/logo.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

          <!-- Vendor CSS Files -->
          <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

        <main>
            <div class="container">

                <section
                    class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                                <div class="d-flex justify-content-center py-4">
                                    <a href="../index.php" class="logo d-flex align-items-center w-auto">
                                        <img src="assets/img/logo.png" alt="">
                                        <a class="d-none d-lg-block"
                                            style=" color:darkgreen;font-size: 2rem; font-weight: 600;"
                                            href="index.php">PRESTA<span style="color: #2eca6a;"
                                                class="color-b">Bénin</span></a>
                                    </a>
                                </div><!-- End Logo -->

                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Nouveau mot de passe</h5>
                                            <p class="text-center small">Entrez les informations pour créer un nouveau
                                                mot de passe</p>
                                        </div>

                                        <form class="row g-3 needs-validation" action="" method="post">
                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Nouveau Mot de
                                                    passe</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="yourPassword" required>
                                                <div class="invalid-feedback">Entrez nouveau mot de passe!</div>
                                            </div>
                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Confirmer nouveau mot de
                                                    passe</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="yourPassword" required>
                                                <div class="invalid-feedback">Confirmez votre nouveau mot de passe!
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-success w-100"
                                                    style="background-color: #2eca6a; color: white;"
                                                    type="submit">Réinitialiser</button>
                                            </div>
                                            <div class="col-12">
                                                <div class="small mb-0">Vous avez déjà un compte ? <a
                                                        style="color: #2eca6a;" href="pages-login.php">Se connecter</a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </main><!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

                <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="js/main.js"></script>

    </body>

</html>