<?php 
    require_once 'Partials/head.php';?>
    <title>Sneakers House, Page de connexion</title>
   <?php  require_once 'Partials/nav.php';

    ?>
    
    
</head>
     
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mb-3">
                <form class="form" action="controllers/LoginCtrl.php" method="post" >
                    <h1 class="mb-3">Se connecter</h1>
                    <div class="social-media d-flex justify-content-center">
                        <p class=" ml-2"><i class="fa-brands fa-google fa-sm icone " ></i></p>
                        <p class=" ml-2"><i class="fa-brands fa-facebook  fa-sm icone" ></i></p>
                        <p class=" ml-2"><i class="fa-brands fa-apple fa-lg icone " ></i></p>
                        <p class=" ml-2"><i class="fa-brands fa-twitter fa-sm icone" ></i></p>
                    </div>
                    
                    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
                    
                    <div class="inputs">
                        <input class="pl-3 py-3" type="email" placeholder="Email"name="email">
                        <input class="pl-3 py-3"type="password" placeholder="Mot de passe"name="password">
                    </div>

                    <div class=" d-flex justify-content-center">
                        <button type="submit">Se connecter</button>
                    </div>
                    
                    <p class="inscription">Je n'ai pas de compte. Je m'en <span><a href="signup.php">crée</a></span>  un.</p>
                    <p class="inscription"><a href="forgotpassword.php"> Mot de passe oublié ? </a></p>
                </form>
    
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php 
    
    require_once 'Partials/footer.php';
    

    ?>