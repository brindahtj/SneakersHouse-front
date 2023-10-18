<?php  require_once 'Partials/head.php';?>
     
    <title>Sneakers House, Mot de passe oublié</title>
    
<?php  require_once 'Partials/nav.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mb-3">
                <form class="form" action="controllers/forgotpasswordCtrl.php" method="POST">
                    <h1 class="mb-3">Mot de passe oublié</h1>

                    
                    <p class="choose-email">Je saisie mon adresse e-mail :</p>
                    
                    <div class=" inputs mb-5 d-flex flex-column justify-content-center">

                        <input class="input pl-3 py-3" type="email" name ="email" placeholder="E-mail" id="userMail">
                        
                    </div > 
                    <div class="center d-flex justify-content-center">
                        <button type="submit">Envoyer un mail</button>
                    </div>
                    
                    <p class="inscription">Je n'ai pas de <span>compte</span> . Je m'en <span><a href="signup.php">crée</a></span>  un.</p>                </form>
    
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php  require_once 'Partials/footer.php';?>
