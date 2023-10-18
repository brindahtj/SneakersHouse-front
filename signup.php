<?php 
require_once 'Partials/head.php';?>
<title>Creer votre compte </title>
<?php
require_once 'Partials/nav.php';?>

    

<div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mb-3">
                <form class="form" action="Controllers/singupCtrl.php" method="post" enctype="multipart/form-data">
                    <h1 class="mb-3">S'inscrire</h1>

                    <div class="social-media d-flex justify-content-center">
                        <p class=" ml-2"><i class="fa-brands fa-google fa-sm " style="color: #1a1a19;"></i></p>
                        <p class=" ml-2"><i class="fa-brands fa-facebook  fa-sm " style="color: #1a1a19;"></i></p>
                        <p class=" ml-2"><i class="fa-brands fa-apple fa-lg " style="color: #1a1a19;"></i></p>
                        <p class=" ml-2"><i class="fa-brands fa-twitter fa-sm " style="color: #1a1a19;"></i></p>
                    </div>
                    
                    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
                    
                    <div class=" inputs mb-5 d-flex flex-column justify-content-center">

                        <input class="input pl-3 py-3 bg-input" type="text" id="nom" name ="nom" placeholder="Nom de famille" id="userLastName"> 
                        <span class="nom text-invalid" ></span> 

                        <input class="input pl-3 py-3 bg-input" type="text" id="prenom" name ="prenom"placeholder="Prenom" id="userFristName">
                        <span class="prenom text-invalid"></span> 

                        <input class="input pl-3 py-3" type="email" id="email" name ="email" placeholder="E-mail" id="userMail">
                        <span class="email text-invalid"></span> 

                        <input class="input pl-3 py-3" type="password" id="password" name ="password" placeholder="Mot de passe"id="userPassword">
                        <span class="password text-invalid"></span>

                        <input class="input pl-3 py-3" type="password" id="confirm_password" name ="confirm_password" placeholder="Confirmez le mot de passe"id="userPassword2">
                        <span class="confirm_password text-invalid"></span>

                        <p>Changer d'avatar</p>
                        <input name="avatar" type="file">
                    </div > 
                    <div class="center d-flex justify-content-center">
                        <button type="submit" id="submit" name="submit">S'inscrire</button>
                    </div>
                    
                    <p class="inscription">J'ai déjà un <span><a href="login.php"> compte</a></span> .</p>
                </form>
    
            </div>
            <div class="col"></div>
        </div>
    </div>
    
    <?php 
require_once 'Partials/footer.php';   
    ?>